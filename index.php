<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <link rel="icon" type="image/png" href="assets/logo.svg">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Strony WWW, Ulotki, Social Media – Portfolio i Oferta</title>
  <meta name="description" content="Tworzę strony internetowe, projektuję ulotki i prowadzę social media (Instagram, Facebook). Szybko uczę się nowych technologii i automatyzacji. Sprawdź ofertę i portfolio." />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="assets/favicon.png" />
  <link rel="manifest" href="assets/site.webmanifest" />
  <link rel="canonical" href="index.php" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Strony WWW, Ulotki, Social Media – Portfolio i Oferta" />
  <meta property="og:description" content="Nowoczesne strony WWW, ulotki do druku i prowadzenie profili IG/FB. Zobacz ofertę i przykłady realizacji." />
  <meta property="og:url" content="index.php" />
  <meta property="og:image" content="assets/og-image.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Strony WWW, Ulotki, Social Media – Portfolio i Oferta" />
  <meta name="twitter:description" content="Nowoczesne strony WWW, ulotki do druku i prowadzenie profili IG/FB. Zobacz ofertę i przykłady realizacji." />
  <meta name="twitter:image" content="assets/og-image.png" />
</head>
<body>
  <a class="skip-link" href="#content">Przejdź do treści</a>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="content">
    <!-- HERO -->
    <section class="section hero reveal" aria-labelledby="hero-title">
      <div class="container hero__grid">
        <div class="hero__text">
          <h1 id="hero-title">Nowoczesne <span class="glow">strony WWW</span>, skuteczne <span class="glow">ulotki</span> i prowadzenie <span class="glow">social mediów</span></h1>
          <p>Projektuję i wdrażam lekkie serwisy, przygotowuję materiały do druku oraz pomagam firmom rosnąć na Instagramie i Facebooku. Na bieżąco uczę się automatyzacji, by działać szybciej i taniej.</p>
          <div class="hero__actions">
            <a class="btn btn--primary" href="kontakt.php">Darmowa wycena</a>
            <a class="btn btn--ghost" href="portfolio.php">Zobacz portfolio</a>
          </div>
          <ul class="badges">
            <li class="badge">RWD</li>
            <li class="badge">SEO</li>
            <li class="badge">WCAG</li>
            <li class="badge">Automatyzacje</li>
          </ul>
        </div>
        
      </div>
    </section>

    <!-- USŁUGI -->
    <section class="section reveal" aria-labelledby="offer-title">
      <div class="container">
        <h2 id="offer-title" class="section__title">Czym się zajmuję</h2>
        <div class="grid cards">
          <article class="card">
            <h3>Tworzenie stron WWW</h3>
            <p>Strony firmowe, landing pages i wizytówki. Szybkie, dostępne, zoptymalizowane.</p>
            <ul>
              <li>RWD i wydajność</li>
              <li>SEO podstawowe</li>
              <li>Integracje i formularze</li>
            </ul>
            <a class="btn btn--primary" href="strony-www.php" aria-label="Przejdź do strony o usłudze tworzenia stron WWW">Więcej</a>
          </article>
          <article class="card">
            <h3>Projektowanie ulotek</h3>
            <p>Profesjonalne projekty do druku w popularnych formatach. Pliki gotowe dla drukarni.</p>
            <ul>
              <li>Formaty: A6, A5, DL...</li>
              <li>Spady i kolorystyka</li>
              <li>Kontrola jakości PDF</li>
            </ul>
            <a class="btn btn--primary" href="ulotki.php">Więcej</a>
          </article>
          <article class="card">
            <h3>Social media: IG/FB</h3>
            <p>Tworzę grafiki i treści, ustawiam profile, planuję publikacje i podstawową analitykę.</p>
            <ul>
              <li>Content plan</li>
              <li>Konfiguracja profili</li>
              <li>Harmonogram postów</li>
            </ul>
            <a class="btn btn--primary" href="social-media.php">Więcej</a>
          </article>
        </div>
      </div>
    </section>

    <!-- PRZEWAGI -->
    <section class="section reveal" aria-labelledby="why-title">
      <div class="container">
        <h2 id="why-title" class="section__title">Dlaczego warto</h2>
        <div class="grid cards cards--compact">
          <article class="card card--icon">
            <svg aria-hidden="true" class="icon"><circle cx="16" cy="16" r="14"/></svg>
            <h3>Szybkość i automatyzacje</h3>
            <p>Wykorzystuję skrypty i narzędzia automatyzujące powtarzalne zadania – krótsze terminy i niższe koszty.</p>
          </article>
          <article class="card card--icon">
            <svg aria-hidden="true" class="icon"><rect x="4" y="4" width="24" height="24" rx="6"/></svg>
            <h3>Dostępność i RWD</h3>
            <p>Projektuję zgodnie z dobrymi praktykami WCAG – treści czytelne na każdym urządzeniu.</p>
          </article>
          <article class="card card--icon">
            <svg aria-hidden="true" class="icon"><polygon points="16,2 30,30 2,30"/></svg>
            <h3>Transparentna współpraca</h3>
            <p>Krótki proces, jasne koszty i regularne podglądy pracy.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- TECHNOLOGIE -->
    <section class="section reveal" aria-labelledby="tech-title">
      <div class="container">
        <h2 id="tech-title" class="section__title">Zaufali mi / Technologie</h2>
        <ul class="tech-list" role="list">
          <li class="tech"><span class="tech__dot"></span>HTML5</li>
          <li class="tech"><span class="tech__dot"></span>CSS3</li>
          <li class="tech"><span class="tech__dot"></span>JavaScript</li>
          <li class="tech"><span class="tech__dot"></span>Figma</li>
          <li class="tech"><span class="tech__dot"></span>Canva</li>
          <li class="tech"><span class="tech__dot"></span>Google Analytics (podstawy)</li>
        </ul>
      </div>
    </section>

    <!-- PORTFOLIO ZAJAWKA -->
    <section class="section reveal" aria-labelledby="portf-title">
      <div class="container">
        <h2 id="portf-title" class="section__title">Wybrane realizacje</h2>
        <div class="grid cards">
          <article class="card">
            <img src="assets/agent.jpg" alt="Podgląd strony zaufanyagent.pl" loading="lazy" decoding="async" />
            <h3><a href="https://www.zaufany-agent.pl" target="_blank" rel="noopener">zaufanyagent.pl</a></h3>
            <p>Strona agencji ubezpieczeniowej.</p>
          </article>
          <article class="card">
            <img src="assets/lukmed.jpg" alt="Podgląd strony lukmed.eu" loading="lazy" decoding="async" />
            <h3><a href="https://www.lukmed.eu" target="_blank" rel="noopener">lukmed.eu</a></h3>
            <p>Strona placówki medycznej.</p>
          </article>
          
        </div>
      </div>
    </section>

    <!-- OPINIE placeholder -->
    <section class="section reveal" aria-labelledby="opinie-title">
      <div class="container">
        <h2 id="opinie-title" class="section__title">Opinie</h2>
        <div class="grid cards cards--compact">
          <article class="card">
            <p>„Świetna komunikacja i szybka realizacja.”</p>
            <span class="muted">— Klient 1 (placeholder)</span>
          </article>
          <article class="card">
            <p>„Estetyczny projekt i sensowne wskazówki SEO.”</p>
            <span class="muted">— Klient 2 (placeholder)</span>
          </article>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="section reveal" aria-labelledby="faq-title">
      <div class="container">
        <h2 id="faq-title" class="section__title">FAQ</h2>
        <div class="faq">
          <details>
            <summary>Jak wygląda proces współpracy?</summary>
            <div>Krótki brief → wycena → umowa → projekt → akceptacja → wdrożenie → wsparcie.</div>
          </details>
          <details>
            <summary>Czy pomagam w domenie i hostingu?</summary>
            <div>Tak, doradzam i konfiguruję podstawowe ustawienia.</div>
          </details>
          <details>
            <summary>Czy przygotowuję pliki „pod druk”?</summary>
            <div>Tak, PDF/X ze spadami, profil CMYK i kontrola fontów.</div>
          </details>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section section--cta reveal" aria-labelledby="cta-title">
      <div class="container center">
        <h2 id="cta-title" class="section__title">Masz pomysł? Zacznijmy teraz</h2>
        <a class="btn btn--primary" href="kontakt.php">Napisz do mnie</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <button id="backToTop" class="back-to-top" aria-label="Wróć na górę">↑</button>

  <div id="cookieBanner" class="cookie" role="dialog" aria-live="polite" aria-label="Komunikat o cookies" hidden>
    <p>Używam plików cookies w celu poprawy działania serwisu. <a href="#" class="link">Dowiedz się więcej</a>.</p>
    <div class="cookie__actions">
      <button class="btn btn--primary" id="cookieAccept">Akceptuję</button>
    </div>
  </div>

  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@graph":[
      {
        "@type":"WebSite",
        "name":"MZ Studio",
        "url":"index.php",
        "inLanguage":"pl-PL",
        "publisher":{"@type":"Person","name":"MZ"}
      },
      {
        "@type":"Person",
        "name":"Mariusz Z.",
        "jobTitle":"Web Developer / Designer",
        "url":"index.php",
        "sameAs":[
          "https://www.instagram.com/placeholder",
          "https://www.facebook.com/placeholder"
        ]
      }
    ]
  }
  </script>
  <script src="scripts.js" defer></script>
</body>
</html>
