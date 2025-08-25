<!DOCTYPE html>
<html lang="pl" dir="ltr">
   <link rel="icon" type="image/png" href="assets/logo.svg">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Projektowanie ulotek – formaty i przygotowanie do druku</title>
  <meta name="description" content="Projektuję ulotki w popularnych formatach: A6, A5, DL i inne. Pliki gotowe dla drukarni: spady, CMYK, PDF/X." />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="assets/favicon.png" />
  <link rel="canonical" href="ulotki.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Projektowanie ulotek – formaty i przygotowanie do druku" />
  <meta property="og:description" content="Profesjonalne projekty ulotek: formaty, proces i pliki przygotowane dla drukarni." />
  <meta property="og:url" content="ulotki.php" />
  <meta property="og:image" content="assets/og-image.png" />
</head>
<body>
  <a class="skip-link" href="#content">Przejdź do treści</a>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="content">
    <section class="section hero hero--sub reveal">
      <div class="container">
        <h1>Projektowanie ulotek</h1>
        <p>Przejrzyste projekty promocyjne, gotowe do druku w Twojej drukarni.</p>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="formats-title">
      <div class="container">
        <h2 id="formats-title" class="section__title">Popularne formaty</h2>
        <div class="grid cards">
          <article class="card"><h3>A6</h3><p>105×148 mm – poręczna ulotka.</p></article>
          <article class="card"><h3>A5</h3><p>148×210 mm – więcej treści i grafiki.</p></article>
          <article class="card"><h3>DL</h3><p>99×210 mm – idealne do stojaków.</p></article>
          <article class="card"><h3>A4</h3><p>210×297 mm – katalog/mini-plakat.</p></article>
        </div>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="prepress-title">
      <div class="container">
        <h2 id="prepress-title" class="section__title">Przygotowanie do druku</h2>
        <ul class="list">
          <li>Spady: zwykle 2–3 mm, bezpieczne marginesy</li>
          <li>Kolor: CMYK, profil drukarni</li>
          <li>Fonty: zagnieżdżone lub zamienione na krzywe</li>
          <li>Plik: PDF/X, 300 DPI</li>
          <li>Kontrola: preflight i podgląd spadów</li>
        </ul>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="proc-title">
      <div class="container">
        <h2 id="proc-title" class="section__title">Proces</h2>
        <ol class="steps">
          <li><span>1</span> Brief i grupa docelowa</li>
          <li><span>2</span> Projekt graficzny</li>
          <li><span>3</span> Korekty</li>
          <li><span>4</span> Finalny PDF/X</li>
        </ol>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="cennik-title">
      <div class="container">
        <h2 id="cennik-title" class="section__title">Zestawy</h2>
        <div class="grid cards">
          <article class="card">
            <h3>Podstawowy</h3>
            <ul>
              <li>Projekt 1-stronny</li>
              <li>1 runda poprawek</li>
              <li>PDF do druku</li>
            </ul>
            <a class="btn btn--primary" href="kontakt.php">Zapytaj o wycenę</a>
          </article>
          <article class="card">
            <h3>Standard</h3>
            <ul>
              <li>Projekt 2-stronny</li>
              <li>2 rundy poprawek</li>
              <li>Warianty kolorystyczne</li>
            </ul>
            <a class="btn btn--primary" href="kontakt.php">Zapytaj o wycenę</a>
          </article>
          <article class="card">
            <h3>Plus</h3>
            <ul>
              <li>2-stronny + dodatkowy format</li>
              <li>Pakiet plików (PDF/JPG)</li>
              <li>Wersja do social mediów</li>
            </ul>
            <a class="btn btn--primary" href="kontakt.php">Zapytaj o wycenę</a>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--cta reveal">
      <div class="container center">
        <h2>Zlecimy projekt?</h2>
        <a class="btn btn--primary" href="kontakt.php">Skontaktuj się</a>
      </div>
    </section>
  </main>

  <footer class="site-footer" role="contentinfo">
  <div class="container footer__grid">
    <div>
      <a class="brand brand--footer" href="index.php">
        <img src="assets/logo.svg" alt="" width="24" height="24" />
        <span>MZ Studio</span>
      </a>
      <p class="muted">Chętnie doradzę przed startem projektu.</p>

      <ul class="list" style="list-style:none; padding:0; margin:0">
        <!-- e-mail: otworzy domyślną aplikację pocztową -->
        <li>E-mail:
          <a class="link" href="mailto:m.zapalski990@gmail.com">
            m.zapalski990@gmail.com
          </a>
        </li>
        <!-- telefon: na telefonie otworzy dialer, na desktopie np. Skype -->
        <li>Tel.:
          <a class="link" href="tel:+48 727 460 550">
            +48&nbsp;727&nbsp;460&nbsp;550
          </a>
        </li>
      </ul>
    </div>

  <button id="backToTop" class="back-to-top" aria-label="Wróć na górę">↑</button>
  <script src="scripts.js" defer></script>
</body>
</html>
