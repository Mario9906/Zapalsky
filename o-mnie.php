<!DOCTYPE html>
<html lang="pl" dir="ltr">
   <link rel="icon" type="image/png" href="assets/logo.svg">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>O mnie – wykształcenie, narzędzia, dlaczego ja</title>
  <meta name="description" content="Magister inż. Informatyki (Politechnika Lubelska). Tworzę strony WWW, projektuję ulotki i prowadzę social media. Szybko uczę się automatyzacji i nowych technologii." />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="assets/favicon.png" />
  <link rel="canonical" href="o-mnie.php" />
  <meta property="og:type" content="profile" />
  <meta property="og:title" content="O mnie – wykształcenie, narzędzia, dlaczego ja" />
  <meta property="og:description" content="Magister inż. Informatyki, praktyka w tworzeniu stron WWW, ulotek i social mediów." />
  <meta property="og:url" content="o-mnie.php" />
  <meta property="og:image" content="assets/og-image.png" />
</head>
<body>
  <a class="skip-link" href="#content">Przejdź do treści</a>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="content">
    <section class="section hero hero--sub reveal">
      <div class="container">
        <h1>O mnie</h1>
        <p>Jestem absolwentem studiów magisterskich z informatyki na Politechnice Lubelskiej oraz posiadam tytuł inżyniera. Tworzę strony WWW, projektuję ulotki i prowadzę social media. Szybko odnajduję się w nowych wyzwaniach i uczę się automatyzacji.</p>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="edu-title">
      <div class="container">
        <h2 id="edu-title" class="section__title">Wykształcenie</h2>
        <ul class="list">
          <li>Magister Informatyki – Politechnika Lubelska</li>
          <li>Tytuł inżyniera – Informatyka</li>
        </ul>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="tools-title">
      <div class="container">
        <h2 id="tools-title" class="section__title">Narzędzia i umiejętności</h2>
        <ul class="badges badges--wrap">
          <li class="badge">HTML5</li>
          <li class="badge">CSS3 (Grid/Flex)</li>
          <li class="badge">JavaScript</li>
          <li class="badge">Figma</li>
          <li class="badge">Canva</li>
          <li class="badge">Podstawy SEO</li>
          <li class="badge">WCAG</li>
          <li class="badge">Automatyzacje</li>
        </ul>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="why-title">
      <div class="container">
        <h2 id="why-title" class="section__title">Dlaczego ja</h2>
        <div class="grid cards">
          <article class="card">
            <h3>Komunikacja</h3>
            <p>Jasne ustalenia i szybki kontakt.</p>
          </article>
          <article class="card">
            <h3>Jakość</h3>
            <p>Dbałość o detale i dostępność.</p>
          </article>
          <article class="card">
            <h3>Rozwój</h3>
            <p>Na bieżąco z trendami i automatyzacjami.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--cta reveal">
      <div class="container center">
        <h2>Współpracujmy</h2>
        <a class="btn btn--primary" href="kontakt.php">Napisz wiadomość</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <button id="backToTop" class="back-to-top" aria-label="Wróć na górę">↑</button>
  <script src="scripts.js" defer></script>
</body>
</html>
