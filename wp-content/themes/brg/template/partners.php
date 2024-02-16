<?php
/*Template Name: для парнерів*/
get_header(); 

$url = $_SERVER['REQUEST_URI'];

$custom_fields = get_post_custom(get_the_ID());

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/partners.css" rel="stylesheet"/>
<img src="/wp-content/themes/brg/svg/main-pattern.svg" alt="" class="main-pattern">
<main class="main container">
    <section class='partners'>
        <img src="<?php echo get_field('group_img1')?>" alt="img" class="wow slideInLeft">
        <div class="partners-content wow fadeInUp">
            <h1 class="h2"><?=$custom_fields['group_title'][0]?></h1>
            <p class="text"><?=$custom_fields['group_text1'][0]?></p>
        </div>
    </section>

    <section class='propose'>
        <p class="text wow fadeInUp"><?=$custom_fields['group_text2'][0]?></p>
        <img src="<?php echo get_field('group_img2')?>" alt="img" class="wow slideInRight">
    </section>

    <button class="action-button first open-request"><?= strpos($url, '/en') !== false ? 'Send your offer' : 'Надіслати свою пропозицію'; ?></button>

    <section class='bussiness'>
        <img src="<?php echo get_field('group_img3')?>" alt="img" class="wow slideInLeft">
        <p class="text wow fadeInUp"><?=$custom_fields['group_text3'][0]?></p>
    </section>

    <button class="action-button open-partner"><?= strpos($url, '/en') !== false ? 'Become a partner' : 'Стати партнером'; ?></button>
</main>

<img src="/wp-content/themes/brg/svg/franchising-page-bg.svg" alt="|" class="partners-bg">
    
<script src="<?php echo get_template_directory_uri(); ?>/js/partners.js"></script>

<?php
get_footer();
