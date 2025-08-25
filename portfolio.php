<!DOCTYPE html>
<html lang="pl" dir="ltr">
   <link rel="icon" type="image/png" href="assets/logo.svg">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Portfolio – case studies i przykłady realizacji</title>
  <meta name="description" content="Zobacz wykonane projekty stron WWW i inne realizacje: zaufanyagent.pl, lukmed.eu oraz kolejne przykłady." />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="assets/favicon.png" />
  <link rel="canonical" href="portfolio.php" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Portfolio – case studies i przykłady realizacji" />
  <meta property="og:description" content="Przykłady zakończonych projektów stron internetowych i materiałów." />
  <meta property="og:url" content="portfolio.php" />
  <meta property="og:image" content="assets/og-image.png" />
</head>
<body>
  <a class="skip-link" href="#content">Przejdź do treści</a>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="content">
    <section class="section hero hero--sub reveal">
      <div class="container">
        <h1>Portfolio</h1>
        <p>Wybrane realizacje i krótkie case studies.</p>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="cases-title">
      <div class="container">
        <h2 id="cases-title" class="section__title">Case studies</h2>
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
    <section class="section reveal" aria-labelledby="cases-title">
      <div class="container">
        <h2 id="cases-title" class="section__title"></h2>
        <div class="grid cards">
         
          <article class="card">
            <img src="assets/ulotka2.png" alt="Projekt ulotki " loading="lazy" decoding="async" />
            <h3>Projekt ulotki </h3>
            <p>Ulotka agencji ubezpieczeniowej.</p>
          </article>
          <article class="card">
            <img src="assets/ulotka1.png" alt="Projekt ulotki " loading="lazy" decoding="async" />
            <h3>Projekt ulotki </h3>
            <p>Ulotka agencji ubezpieczeniowej.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--cta reveal">
      <div class="container center">
        <h2>Chcesz podobny efekt?</h2>
        <a class="btn btn--primary" href="kontakt.php">Porozmawiajmy</a>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <button id="backToTop" class="back-to-top" aria-label="Wróć na górę">↑</button>
  <script src="scripts.js" defer></script>
</body>
</html>
