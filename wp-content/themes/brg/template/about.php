<?php
/*Template Name: про компанію*/
get_header(); 

$url = $_SERVER['REQUEST_URI'];
$custom_fields = get_post_custom(get_the_ID());
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/about.css" rel="stylesheet"/>
<img src="/wp-content/themes/brg/svg/main-pattern.svg" alt="" class="main-pattern">
<main class="main">
    <div class="container">
    <section class='main-section wow fadeInUp'>
        <img src="<?php echo get_field('group_img1')?>" alt="img">
        <div class="about-content">
            <strong class="about-subtitle">Best  restaurant  Group</strong>
            <h1 class="h2"><?=$custom_fields['group_title'][0]?></h1>
            <p class="text"><?=$custom_fields['group_text1'][0]?></p>
        </div>
    </section>
    </div>
    <div class="container">
    <section class='second-section wow fadeInUp'>
        <p class="text"><?=$custom_fields['group_text2'][0]?></p>
        <img src="<?php echo get_field('group_img2')?>" alt="img">
    </section>
    </div>

    <section class="logos">
        <div id="logos" class="swiper swiper-container logos-swiper" style="position: unset">
            <div class="swiper-wrapper" style="position: unset">
                <div class='swiper-slide'><img src="/wp-content/themes/brg/img/tsipa.png" alt="ЦІПА"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/planet.png" alt="Дитяча Планета"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/pastry.png" alt="Кондитерська лавка"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/italiano.png" alt="Italiano vero cafe"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/piccolino.png" alt="Piccolino"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/brgcatering.png" alt="BRG catering"></div>
                <div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/barkas.png" alt="Баркас"></div>
                <div class='swiper-slide'><img src="/wp-content/themes/brg/img/tsipa.png" alt="ЦІПА"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/planet.png" alt="Дитяча Планета"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/pastry.png" alt="Кондитерська лавка"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/italiano.png" alt="Italiano vero cafe"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/piccolino.png" alt="Piccolino"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/brgcatering.png" alt="BRG catering"></div>
                <div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/barkas.png" alt="Баркас"></div>
                <div class='swiper-slide'><img src="/wp-content/themes/brg/img/tsipa.png" alt="ЦІПА"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/planet.png" alt="Дитяча Планета"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/pastry.png" alt="Кондитерська лавка"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/italiano.png" alt="Italiano vero cafe"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/piccolino.png" alt="Piccolino"></div><div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/brgcatering.png" alt="BRG catering"></div>
                <div class='swiper-slide'>
                <img src="/wp-content/themes/brg/img/barkas.png" alt="Баркас"></div>
                
                
            </div>
        </div>
    </section>
    <div class="container">
    <section class='first-section wow fadeInUp'>
        <img src="<?php echo get_field('group_img3')?>" alt="img">
        <p class="text"><?=$custom_fields['group_text3'][0]?></p>
    </section>
    </div>
    <div class="container">
    <section class='second-section wow fadeInUp'>
        <p class="text"><?=$custom_fields['group_text4'][0]?></p>
        <img src="<?php echo get_field('group_img4')?>" alt="img">
    </section>
</div>
</main>

<img src="/wp-content/themes/brg/svg/franchising-page-bg.svg" alt="|" class="about-bg">
<img src="/wp-content/themes/brg/svg/about2-page-bg.svg" alt="|" class="about2-bg">
    
<script src="<?php echo get_template_directory_uri(); ?>/js/about.js"></script>

<?php
get_footer();
