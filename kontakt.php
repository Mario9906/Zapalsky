<!DOCTYPE html>
<html lang="pl" dir="ltr">
   <link rel="icon" type="image/png" href="assets/logo.svg">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Kontakt – wycena i współpraca</title>
  <meta name="description" content="Skontaktuj się, aby otrzymać wycenę projektu strony, ulotki lub prowadzenia social mediów. Formularz z walidacją." />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="assets/favicon.png" />
  <link rel="canonical" href="kontakt.php" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Kontakt – wycena i współpraca" />
  <meta property="og:description" content="Napisz wiadomość i uzyskaj darmową wycenę." />
  <meta property="og:url" content="kontakt.php" />
  <meta property="og:image" content="assets/og-image.png" />
</head>
<body>
  <a class="skip-link" href="#content">Przejdź do treści</a>

  <?php include __DIR__ . '/includes/header.php'; ?>

  <main id="content">
    <section class="section hero hero--sub reveal">
      <div class="container">
        <h1>Kontakt</h1>
        <p>Napisz kilka słów o projekcie. Odpowiem z propozycją i przybliżoną wyceną.</p>
      </div>
    </section>

    <section class="section reveal" aria-labelledby="form-title">
      <div class="container grid grid--two">
        <div>
          <h2 id="form-title" class="section__title">Formularz kontaktowy</h2>
          <form id="contactForm" class="form" action="sendmail.php" method="post" novalidate>
  <!-- HONEYPOT (ukryte pole) -->
  <input type="text" name="website" tabindex="-1" autocomplete="off"
         style="position:absolute;left:-9999px;opacity:0;" aria-hidden="true" />

  <label for="name">Imię i nazwisko</label>
  <input type="text" id="name" name="name" required>
  <small id="err-name" class="error"></small>

  <label for="email">E-mail</label>
  <input type="email" id="email" name="email" required>
  <small id="err-email" class="error"></small>

  <label for="phone">Telefon (opcjonalnie)</label>
  <input type="text" id="phone" name="phone">
  <small id="err-phone" class="error"></small>

  <label for="subject">Temat</label>
  <input type="text" id="subject" name="subject" required>
  <small id="err-subject" class="error"></small>

  <label for="message">Wiadomość</label>
  <textarea id="message" name="message" required></textarea>
  <small id="err-message" class="error"></small>

  <label>
    <input type="checkbox" id="consent" name="consent" required>
    Wyrażam zgodę na kontakt i przetwarzanie danych.
  </label>
  <small id="err-consent" class="error"></small>

  <button class="btn btn--primary" type="submit">Wyślij</button>

  <!-- komunikaty -->
  <p id="formSuccess" class="success" role="status" hidden>
    Twoja wiadomość została wysłana. Dziękuję!
  </p>
  <p id="formError" class="error" role="alert" hidden></p>
</form>

        </div>
        
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/includes/footer.php'; ?>

  <button id="backToTop" class="back-to-top" aria-label="Wróć na górę">↑</button>

  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ContactPage",
    "name":"Kontakt – MZ Studio",
    "url":"kontakt.php",
    "inLanguage":"pl-PL"
  }
  </script>
  <script src="scripts.js" defer></script>
</body>
</html>
