<?php
  $current = basename($_SERVER['SCRIPT_NAME'] ?? '');
  function currentAttrFooter($file) {
    global $current;
    return $current === $file ? ' aria-current="page"' : '';
  }
?>
<footer class="site-footer" role="contentinfo">
  <div class="container footer__grid">
    <div>
      <a class="brand brand--footer" href="index.php">
        <img src="assets/logo.svg" alt="" width="24" height="24" />
        <span>MZ Studio</span>
      </a>
      <p class="muted">Chętnie doradzę przed startem projektu.</p>
      <ul class="list" style="list-style:none; padding:0; margin:0">
        <li>E-mail:
          <a class="link" href="mailto:m.zapalski990@gmail.com">m.zapalski990@gmail.com</a>
        </li>
        <li>Tel.:
          <a class="link" href="tel:+48 727 460 550">+48&nbsp;727&nbsp;460&nbsp;550</a>
        </li>
      </ul>
    </div>
    <nav aria-label="Stopka">
      <ul class="footer__nav">
        <li><a href="strony-www.php"<?php echo currentAttrFooter('strony-www.php'); ?>>Strony WWW</a></li>
        <li><a href="ulotki.php"<?php echo currentAttrFooter('ulotki.php'); ?>>Ulotki</a></li>
        <li><a href="social-media.php"<?php echo currentAttrFooter('social-media.php'); ?>>Social media</a></li>
        <li><a href="portfolio.php"<?php echo currentAttrFooter('portfolio.php'); ?>>Portfolio</a></li>
        <li><a href="o-mnie.php"<?php echo currentAttrFooter('o-mnie.php'); ?>>O mnie</a></li>
        <li><a href="kontakt.php"<?php echo currentAttrFooter('kontakt.php'); ?>>Kontakt</a></li>
      </ul>
    </nav>
  </div>
  <div class="container footer__legal">
    <span class="muted">© <span id="year"></span> MZ Studio.</span>
    <a class="muted" href="#">Polityka prywatności</a>
  </div>
</footer>

<button id="backToTop" class="back-to-top" aria-label="Wróć na górę">↑</button>

<div id="cookieBanner" class="cookie" role="dialog" aria-live="polite" aria-label="Komunikat o cookies" hidden>
  <p>Używam plików cookies w celu poprawy działania serwisu. <a href="#" class="link">Dowiedz się więcej</a>.</p>
  <div class="cookie__actions">
    <button class="btn btn--primary" id="cookieAccept">Akceptuję</button>
  </div>
</div>

<script src="scripts.js" defer></script>
