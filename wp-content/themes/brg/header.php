<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

 $url = $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

	<title>BRG: ресторан</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alumni+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet"> -->
    <link
      href="<?php echo get_template_directory_uri(); ?>/css/normalize.css"
      rel="stylesheet"
    />
    <link href="/wp-content/themes/brg/css/normalize.css" rel="stylesheet" />
    <!-- <link href="/wp-content/themes/nasoloda/css/index.css" rel="stylesheet" /> -->

    <link
      href="<?php echo get_template_directory_uri(); ?>/css/index.css"
      rel="stylesheet"
    />

    <link
      href="<?php echo get_template_directory_uri(); ?>/css/wow.css"
      rel="stylesheet"
    />
    <link
      href="<?php echo get_template_directory_uri(); ?>/css/letters.css"
      rel="stylesheet"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header-wrapper">
  <div class="header">
    <div class="header-left">
    <a href="/">
      <img class="header-logo" src="/wp-content/themes/brg/svg/logo.svg" alt="brg">
    </a>
    <div class="header-lang-list">
        <a href="<?php echo esc_url(pll_the_languages(['raw'=>1, 'echo'=>0])['en']['url']); ?>" class="header-lang header-lang-en">ENG</a>
        <span class="header-lang-stick"></span>
        <a href="<?php echo esc_url(pll_the_languages(['raw'=>1, 'echo'=>0])['uk']['url']); ?>" class="header-lang header-lang-ua header-lang-active">UKR</a>
      </div>
    
    </div>
  
    <div class="header-actions">
      <button class="action-button open-feedback header-contact-button"><?= strpos($url, '/en') !== false ? 'Contact us' : "Зв'язатись з нами"; ?></button>
        <button class="action-button header-menu-button">
          <span></span>
          <span></span>
</button>
    </div>
  </div>
</header>

<div class="menu menu-lang">
  <ul class="menu-list">
    <li class="menu-item">
      <strong class="menu-title">Компанія</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="/about">Про нас</a>
        <a class="menu-link" href="/team">Команда</a>
        <a class="menu-link" href="/blog">Всі новини</a>
        <a class="menu-link" href="/vacancies">Вакансії</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Наші послуги</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="/franchising">Franchising</a>
        <a class="menu-link" href="/consulting">Consulting</a>
        <a class="menu-link" href="/partners">Партнерам</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Наші проекти</strong>
      <div class="menu-link-list">
        <a class="menu-link" target="_blank" href="https://beefandcake.brg.restaurant">Beef&Cake</a>
        <a class="menu-link" target="_blank" href="https://piccolino.brg.restaurant">Piccolino</a>
        <a class="menu-link" target="_blank" href="https://catering.brg.restaurant">Catering</a>
      </div>
    </li>
  </ul>
  <div class="network-list">
    <a class="network" href="https://www.facebook.com/bestrestaurantgroup1" target="_blank"><img width="40" height="40" src="/wp-content/themes/brg/svg/facebook.svg" alt="facebook"></a>
    <a class="network" href="https://www.instagram.com/brg_best.restaurant.group/" target="_blank"><img width="40" height="40" src="/wp-content/themes/brg/svg/instagram.svg" alt="instagram"></a>
    <a class="network" href="#" target="_blank"><img width="40" height="40" src="/wp-content/themes/brg/svg/telegram.svg" alt="telegram"></a>
  </div>
  <button class="action-button open-feedback header-contact-button mobile-open-feedback-button"><?= strpos($url, '/en') !== false ? 'Contact us' : "Зв'язатись з нами"; ?></button>
</div>

<div class="menu menu-en">
  <ul class="menu-list">
    <li class="menu-item">
      <strong class="menu-title">Company</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="/en/about-en">About us</a>
        <a class="menu-link" href="/en/team-en">Team</a>
        <a class="menu-link" href="/en/blog-en">All news</a>
        <a class="menu-link" href="/en/vacancies-en">Vacancies</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Our services</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="/en/franchising-en">Franchising</a>
        <a class="menu-link" href="/en/consulting-en">Consulting</a>
        <a class="menu-link" href="/en/partners-en">For partners</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Our projects</strong>
      <div class="menu-link-list">
        <a class="menu-link" target="_blank" href="https://beefandcake.brg.restaurant">Beef&Cake</a>
        <a class="menu-link" target="_blank" href="https://piccolino.brg.restaurant">Piccolino</a>
        <a class="menu-link" target="_blank" href="https://catering.brg.restaurant">Catering</a>
      </div>
    </li>
  </ul>
  <div class="network-list">
    <a class="network" href="https://www.facebook.com/bestrestaurantgroup1" target="_blank"><img width="40" height="40" src="/wp-content/themes/brg/svg/facebook.svg" alt="facebook"></a>
    <a class="network" href="https://www.instagram.com/brg_best.restaurant.group/" target="_blank"><img width="40" height="40" src="/wp-content/themes/brg/svg/instagram.svg" alt="instagram"></a>
    <a class="network" href="#" target="_blank"><img width="40" height="40" src="/wp-content/themes/brg/svg/telegram.svg" alt="telegram"></a>
  </div>
  <button class="action-button open-feedback header-contact-button mobile-open-feedback-button"><?= strpos($url, '/en') !== false ? 'Contact us' : "Зв'язатись з нами"; ?></button>
</div>