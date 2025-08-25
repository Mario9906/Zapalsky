<?php
// --- USTAWIENIA ---
$TO_EMAIL   = "pizza99069@gmail.com";            // gdzie wysyłać
$SITE_NAME  = "MZ Studio";                       // nazwa strony w temacie
$FROM_EMAIL = "no-reply@twojadomena.pl";         // istniejąca skrzynka w Twojej domenie (ważne dla SPF)

// --- POMOCNICZE ---
function clean($v) {
  return trim(filter_var($v, FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
}
function valid_email($v) {
  return (bool)filter_var($v, FILTER_VALIDATE_EMAIL);
}

// Przyjmujemy tylko POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  http_response_code(405);
  exit("Method Not Allowed");
}

// HONEYPOT (ukryte pole): jeśli wypełnione -> bot
if (!empty($_POST['website'])) {
  http_response_code(400);
  exit("Bad Request");
}

// Pobranie i sanityzacja pól z formularza
$name    = clean($_POST['name'] ?? "");
$email   = clean($_POST['email'] ?? "");
$phone   = clean($_POST['phone'] ?? "");
$subject = clean($_POST['subject'] ?? "");
$message = trim($_POST['message'] ?? "");
$consent = isset($_POST['consent']);

// Walidacja
$errors = [];
if (mb_strlen($name) < 2)           { $errors[] = "Podaj imię i nazwisko."; }
if (!valid_email($email))           { $errors[] = "Podaj prawidłowy e-mail."; }
if (mb_strlen($subject) < 3)        { $errors[] = "Temat jest za krótki."; }
if (mb_strlen($message) < 10)       { $errors[] = "Wiadomość jest za krótka."; }
if (!$consent)                      { $errors[] = "Wymagana jest zgoda na kontakt."; }

if ($errors) {
  http_response_code(422);
  exit(implode(" ", $errors));
}

// Złożenie treści e-maila (UTF-8)
$mail_subject = "[$SITE_NAME] $subject";
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$ua = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

$body_lines = [
  "Imię i nazwisko: $name",
  "E-mail: $email",
  $phone ? "Telefon: $phone" : "Telefon: (brak)",
  "Zgoda RODO: " . ($consent ? "TAK" : "NIE"),
  "-------",
  "Wiadomość:",
  $message,
  "-------",
  "Metadane: IP=$ip, UA=$ua, Data=" . date("Y-m-d H:i:s")
];
$body = implode("\n", $body_lines);

// Nagłówki – ważne: From z domeny, Reply-To do nadawcy
$headers = [];
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-Type: text/plain; charset=UTF-8";
$headers[] = "From: $SITE_NAME <{$FROM_EMAIL}>";
$headers[] = "Reply-To: {$name} <{$email}>";
$headers[] = "X-Mailer: PHP/" . phpversion();
$headers_str = implode("\r\n", $headers);

// Wysyłka
$sent = @mail($TO_EMAIL, "=?UTF-8?B?".base64_encode($mail_subject)."?=", $body, $headers_str);

if ($sent) {
  // Możesz też zrobić redirect: header("Location: /dziekuje.html"); exit;
  http_response_code(200);
  exit("OK");
} else {
  http_response_code(500);
  exit("Nie udało się wysłać wiadomości. Skontaktuj się bezpośrednio: $TO_EMAIL");
}
