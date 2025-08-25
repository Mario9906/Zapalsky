<!DOCTYPE html>
<html lang="pl" dir="ltr">
   <link rel="icon" type="image/png" href="assets/logo.svg">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Tworzenie stron WWW – proces, pakiety, technologie</title>
  <meta name="description" content="Projektuję i wdrażam nowoczesne strony WWW: proces, pakiety cenowe, RWD, SEO, WCAG oraz przykłady realizacji." />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="assets/favicon.png" />
  <link rel="canonical" href="strony-www.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Tworzenie stron WWW – proces, pakiety, technologie" />
  <meta property="og:description" content="Nowoczesne, szybkie i dostępne strony internetowe. Zobacz proces, pakiety i technologie." />
  <meta property="og:url" content="strony-www.php" />
  <meta property="og:image" content="assets/og-image.png" />
  <meta name="twitter:card" content="summary_large_image" />
</head>
<body>
  <a class="skip-link" href="#content">Przejdź do treści</a>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="content">
    <section class="section hero hero--sub reveal">
      <div class="container">
        <h1>Tworzenie stron WWW</h1>
        <p>Nowoczesne, lekkie i dostępne serwisy – od koncepcji po wdrożenie i podstawowe SEO.</p>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="proc-title">
      <div class="container">
        <h2 id="proc-title" class="section__title">Mój proces</h2>
        <ol class="steps">
          <li><span>1</span> Brief i cele</li>
          <li><span>2</span> Makieta i styl</li>
          <li><span>3</span> Implementacja (HTML/CSS/JS)</li>
          <li><span>4</span> Testy RWD/WCAG</li>
          <li><span>5</span> Wdrożenie + podstawowe SEO</li>
          <li><span>6</span> Krótka instrukcja i wsparcie</li>
        </ol>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="pakiety-title">
      <div class="container">
        <h2 id="pakiety-title" class="section__title">Pakiety</h2>
        <div class="grid cards">
          <article class="card">
            <h3>Starter</h3>
            <ul>
              <li>1–3 podstrony</li>
              <li>Formularz kontaktowy</li>
              <li>RWD + podstawowe SEO</li>
            </ul>
            <a class="btn btn--primary" href="kontakt.php">Zapytaj o wycenę</a>
          </article>
          <article class="card">
            <h3>Biznes</h3>
            <ul>
              <li>Do 6 podstron</li>
              <li>Blog/aktualności</li>
              <li>Optymalizacja szybkości</li>
            </ul>
            <a class="btn btn--primary" href="kontakt.php">Zapytaj o wycenę</a>
          </article>
          <article class="card">
            <h3>Pro</h3>
            <ul>
              <li>Więcej podstron + landing</li>
              <li>Integracje (np. mapa, analityka)</li>
              <li>Rozszerzone SEO</li>
            </ul>
            <a class="btn btn--primary" href="kontakt.php">Zapytaj o wycenę</a>
          </article>
        </div>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="tech-title">
      <div class="container">
        <h2 id="tech-title" class="section__title">Technologie i standardy</h2>
        <ul class="list">
          <li>HTML5, CSS3 (Grid/Flex), JavaScript (vanilla)</li>
          <li>RWD – mobile-first, testy na kluczowych breakpointach</li>
          <li>Dostępność – semantyka, kontrasty, focus, ARIA</li>
          <li>SEO – tytuły, opisy, struktura, prędkość</li>
          <li>WCAG – nawigacja klawiaturą, focus-visible</li>
        </ul>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="ex-title">
      <div class="container">
        <h2 id="ex-title" class="section__title">Przykłady</h2>
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

    <section class="section section--cta reveal">
      <div class="container center">
        <h2>Gotowy na nową stronę?</h2>
        <a class="btn btn--primary" href="kontakt.php">Skontaktuj się</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <button id="backToTop" class="back-to-top" aria-label="Wróć na górę">↑</button>

  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Article",
    "headline":"Tworzenie stron WWW – proces, pakiety, technologie",
    "author":{"@type":"Person","name":"MZ"},
    "inLanguage":"pl-PL"
  }
  </script>
  <script src="scripts.js" defer></script>
</body>
</html>
