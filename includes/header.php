<?php
  $current = basename($_SERVER['SCRIPT_NAME'] ?? '');
  function currentAttr($file) {
    global $current;
    return $current === $file ? ' aria-current="page"' : '';
  }
?>
<header class="site-header" role="banner">
  <div class="container header__inner">
    <a class="brand" href="index.php" aria-label="Strona główna">
      <img src="assets/logo.svg" alt="" width="54" height="54" class="brand__logo" />
      <span class="brand__text">MZ Studio</span>
    </a>
    <button class="hamburger js-menu-toggle" aria-expanded="false" aria-controls="primary-nav">
      <span class="hamburger__bar"></span><span class="hamburger__bar"></span><span class="hamburger__bar"></span>
    </button>
    <nav id="primary-nav" class="nav js-nav" role="navigation" aria-label="Główne">
      <ul class="nav__list">
        <li><a class="nav__link" href="index.php"<?php echo currentAttr('index.php'); ?>>Start</a></li>
        <li><a class="nav__link" href="strony-www.php"<?php echo currentAttr('strony-www.php'); ?>>Strony WWW</a></li>
        <li><a class="nav__link" href="ulotki.php"<?php echo currentAttr('ulotki.php'); ?>>Ulotki</a></li>
        <li><a class="nav__link" href="social-media.php"<?php echo currentAttr('social-media.php'); ?>>Social media</a></li>
        <li><a class="nav__link" href="portfolio.php"<?php echo currentAttr('portfolio.php'); ?>>Portfolio</a></li>
        <li><a class="nav__link" href="o-mnie.php"<?php echo currentAttr('o-mnie.php'); ?>>O mnie</a></li>
        <li><a class="btn btn--primary nav__cta" href="kontakt.php"<?php echo currentAttr('kontakt.php'); ?>>Kontakt</a></li>
      </ul>
    </nav>
  </div>
</header>
