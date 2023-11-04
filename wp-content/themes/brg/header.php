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

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header-wrapper">
  <div class="header">
    <button class="button-wrapper header-contact-button">
      <div class="action-button open-feedback">Зворотній зв’язок</div>
    </button>
    <a href="/">
      <img class="header-logo" src="/wp-content/themes/brg/img/logo.png" alt="brg">
    </a>
    <div class="header-actions">
      <div class="header-lang-list">
        <a href="/home-en" class="header-lang header-lang-en">ENG</a>
        <span class="header-lang-stick"></span>
        <a href="/" class="header-lang header-lang-ua header-lang-active">UKR</a>
      </div>
      <button class="button-wrapper header-menu-button-wrapper">
        <div class="header-menu-button">
          <span></span>
          <span></span>
        </div>
      </button>
    </div>
  </div>
</header>

<div class="menu menu-lang">
  <ul class="menu-list">
    <li class="menu-item">
      <strong class="menu-title">Компанія</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="#">Про нас</a>
        <a class="menu-link" href="/team">Команда</a>
        <a class="menu-link" href="/blog">Блог</a>
        <a class="menu-link" href="/vacancies">Вакансії</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Наші послуги</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="#">Franchising</a>
        <a class="menu-link" href="/consulting">Consulting</a>
        <a class="menu-link" href="#">Партнерам</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Наші проекти</strong>
      <div class="menu-link-list">
        <a class="menu-link" target="_blank" href="https://beefandcake.brg.restaurant">Beef&cake</a>
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
</div>

<div class="menu menu-en">
  <ul class="menu-list">
    <li class="menu-item">
      <strong class="menu-title">Company</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="#">About us</a>
        <a class="menu-link" href="/en/team-en">Team</a>
        <a class="menu-link" href="/en/blog-en">Blog</a>
        <a class="menu-link" href="/en/vacancies-en">Vacancies</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Our services</strong>
      <div class="menu-link-list">
        <a class="menu-link" href="#">Franchising</a>
        <a class="menu-link" href="/en/consulting-en">Consulting</a>
        <a class="menu-link" href="#">For partners</a>
      </div>
    </li>
    <li class="menu-item">
      <strong class="menu-title">Our projects</strong>
      <div class="menu-link-list">
        <a class="menu-link" target="_blank" href="https://beefandcake.brg.restaurant">Beef&cake</a>
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
</div>