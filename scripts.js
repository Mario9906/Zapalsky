(() => {
  'use strict';

  const qs = (sel, el = document) => el.querySelector(sel);
  const qsa = (sel, el = document) => Array.from(el.querySelectorAll(sel));

  // Rok w stopce
  const yearEl = qsa('#year');
  yearEl.forEach(el => el.textContent = new Date().getFullYear());

  // Mobile menu
  const menuBtn = qs('.js-menu-toggle');
  const nav = qs('.js-nav');
  if (menuBtn && nav) {
    menuBtn.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('is-open');
      menuBtn.setAttribute('aria-expanded', String(isOpen));
    });
  }

  // Intersection Observer for reveal
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (!prefersReduced && 'IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('in-view');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.2 });
    qsa('.reveal').forEach(el => io.observe(el));
  } else {
    qsa('.reveal').forEach(el => el.classList.add('in-view'));
  }

  // Back to top
  const backBtn = qs('#backToTop');
  const onScroll = () => {
    if (!backBtn) return;
    if (window.scrollY > 400) backBtn.classList.add('show');
    else backBtn.classList.remove('show');
  };
  window.addEventListener('scroll', onScroll, { passive: true });
  if (backBtn) {
    backBtn.addEventListener('click', () => {
      if (prefersReduced) window.scrollTo(0, 0);
      else window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // Cookie banner
  const cookieBanner = qs('#cookieBanner');
  const cookieAccept = qs('#cookieAccept');
  try {
    if (cookieBanner && !localStorage.getItem('cookieConsent')) {
      cookieBanner.hidden = false;
    }
    if (cookieAccept) {
      cookieAccept.addEventListener('click', () => {
        localStorage.setItem('cookieConsent', '1');
        cookieBanner.hidden = true;
      });
    }
  } catch (e) {
    if (cookieAccept && cookieBanner) {
      cookieAccept.addEventListener('click', () => cookieBanner.hidden = true);
    }
  }

  // Kontakt – walidacja, sanitizacja i realna wysyłka do sendmail.php
  const form = qs('#contactForm');
  if (form) {
    const el = {
      name: qs('#name', form),
      email: qs('#email', form),
      phone: qs('#phone', form),
      subject: qs('#subject', form),
      message: qs('#message', form),
      consent: qs('#consent', form),
      success: qs('#formSuccess', form),
      generalErr: qs('#formError', form), // opcjonalny ogólny błąd
      err: {
        name: qs('#err-name', form),
        email: qs('#err-email', form),
        phone: qs('#err-phone', form),
        subject: qs('#err-subject', form),
        message: qs('#err-message', form),
        consent: qs('#err-consent', form)
      }
    };

    const sanitize = (str) => {
      if (typeof str !== 'string') return '';
      const withoutScripts = str.replace(/<\s*\/?\s*script[^>]*>/gi, '');
      return withoutScripts
        .replaceAll('&', '&amp;')
        .replaceAll('<', '&lt;')
        .replaceAll('>', '&gt;')
        .replaceAll('"', '&quot;')
        .replaceAll("'", '&#39;')
        .trim();
    };

    const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/i;
    const phoneRx = /^[\d\s()+-]{7,}$/;

    const setFieldError = (key, msg) => { if (el.err[key]) el.err[key].textContent = msg || ''; };
    const clearErrors = () => {
      Object.keys(el.err).forEach(k => setFieldError(k, ''));
      if (el.generalErr) { el.generalErr.textContent = ''; el.generalErr.hidden = true; }
    };

    // Phone input mask (prosta)
    if (el.phone) {
      el.phone.addEventListener('input', () => {
        el.phone.value = el.phone.value.replace(/[^\d()+\-\s]/g, '');
      });
    }

    form.addEventListener('submit', async (evt) => {
      evt.preventDefault();
      clearErrors();
      if (el.success) el.success.hidden = true;

      const data = {
        name: sanitize(el.name?.value || ''),
        email: sanitize(el.email?.value || ''),
        phone: sanitize(el.phone?.value || ''),
        subject: sanitize(el.subject?.value || ''),
        message: sanitize(el.message?.value || ''),
        consent: !!el.consent?.checked
      };

      // Frontend walidacja
      let ok = true;
      if (data.name.length < 2) { setFieldError('name', 'Podaj pełne imię i nazwisko.'); ok = false; }
      if (!emailRx.test(data.email)) { setFieldError('email', 'Podaj poprawny adres e-mail.'); ok = false; }
      if (data.phone && !phoneRx.test(data.phone)) { setFieldError('phone', 'Podaj poprawny numer telefonu.'); ok = false; }
      if (data.subject.length < 3) { setFieldError('subject', 'Temat jest zbyt krótki.'); ok = false; }
      if (data.message.length < 10) { setFieldError('message', 'Wiadomość jest zbyt krótka.'); ok = false; }
      if (!data.consent) { setFieldError('consent', 'Wymagana zgoda na kontakt.'); ok = false; }
      if (!ok) return;

      // Przygotowanie danych – użyjemy FormData z formularza,
      // żeby trafiły też ukryte pola (np. honeypot "website")
      const fd = new FormData(form);
      // Nadpisz polami po sanitizacji (bez modyfikacji checkboxów)
      fd.set('name', data.name);
      fd.set('email', data.email);
      fd.set('phone', data.phone);
      fd.set('subject', data.subject);
      fd.set('message', data.message);

      const submitBtn = form.querySelector('[type="submit"]');
      const btnInitial = submitBtn ? submitBtn.textContent : '';
      const setLoading = (v) => {
        if (!submitBtn) return;
        submitBtn.disabled = v;
        submitBtn.textContent = v ? 'Wysyłanie…' : btnInitial;
      };

      try {
        setLoading(true);
        const endpoint = form.getAttribute('action') || 'sendmail.php';
        const res = await fetch(endpoint, { method: 'POST', body: fd });
        const text = (await res.text()).trim();

        if (res.ok && text === 'OK') {
          if (el.success) { el.success.hidden = false; }
          form.reset();
          form.querySelectorAll('input, textarea').forEach(i => i.blur());
        } else {
          // Serwer zwraca 4xx/5xx + komunikat (np. walidacja z PHP)
          const msg = text || 'Wystąpił błąd podczas wysyłki.';
          if (el.generalErr) {
            el.generalErr.textContent = msg;
            el.generalErr.hidden = false;
          } else {
            // fallback jeśli nie ma #formError
            alert(msg);
          }
        }
      } catch (ex) {
        const msg = 'Nie udało się połączyć z serwerem. Sprawdź internet lub spróbuj ponownie później.';
        if (el.generalErr) {
          el.generalErr.textContent = msg;
          el.generalErr.hidden = false;
        } else {
          alert(msg);
        }
      } finally {
        setLoading(false);
      }
    });
  }

})();
