<?php
/*Template Name: франшиза*/
get_header(); 

$url = $_SERVER['REQUEST_URI'];

$custom_fields = get_post_custom(get_the_ID());
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/franchising.css" rel="stylesheet"/>
<img src="/wp-content/themes/brg/svg/main-pattern.svg" alt="" class="main-pattern">
<main class="main container">
    <section class='franchising'>
        <img src="<?php echo get_field('group_img1')?>" alt="img" class="wow slideInLeft">
        <div class="franchising-content wow fadeInUp">
            <h1 class="h2"><?=$custom_fields['group_title'][0]?></h1>
            <p class="text"><?=$custom_fields['group_text1'][0]?></p>
        </div>
    </section>
    <section class='provide'>
        <p class="text wow fadeInUp"><?=$custom_fields['group_text2'][0]?></p>
        <img src="<?php echo get_field('group_img2')?>" alt="img" class="wow slideInRight">
    </section>
    <section class='buy'>
        <img src="<?php echo get_field('group_img3')?>" alt="img" class="wow slideInLeft">
        <p class="text wow fadeInUp"><?=$custom_fields['group_text3'][0]?></p>
    </section>
    <button class="action-button open-feedback"><?= strpos($url, '/en') !== false ? 'Order a service' : 'Замовити послугу'; ?></button>
</main>

<img src="/wp-content/themes/brg/svg/franchising-page-bg.svg" alt="|" class="franchising-bg">
    
<script src="<?php echo get_template_directory_uri(); ?>/js/franchising.js"></script>

<?php
get_footer();
