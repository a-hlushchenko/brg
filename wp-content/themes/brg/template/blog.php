<?php
/*Template Name: блог*/
get_header(); 
$custom_fields = get_post_custom(get_the_ID()); 

$news = get_posts([
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
]);

$url = $_SERVER['REQUEST_URI'];

$events = get_posts([
    'post_type' => 'events',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
]);

$adverts = get_posts([
    'post_type' => 'adverts',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
]);

// echo "<pre>";
// print_r(get_field('about_top_image'));
// echo "</pre>";
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/blog.css" rel="stylesheet"/>

<section class="container else wow fadeInUpBig">
    <h2 class="h2"><?= strpos($url, '/en') !== false ? 'Blog' : 'Блог'; ?></h2>
    <div class="else-content">
        <div class="else-tab-list">
            <button class="else-tab else-tab-active" data-tab="news"><?= strpos($url, '/en') !== false ? 'news' : 'Новини'; ?></button>
            <button class="else-tab" data-tab="events"><?= strpos($url, '/en') !== false ? 'Events' : 'Події'; ?></button>
            <button class="else-tab" data-tab="adverts"><?= strpos($url, '/en') !== false ? 'Adverts' : 'Оголошення'; ?></button>
        </div>
        <div class="else-list news else-active" id="news">   
        <?php
          foreach ($news as $item){ ?>
          <a href="<?= strpos($url, '/en') !== false ? '/news-en' : '/news'; ?>" class="else-item wow fadeInUp">
                <div class="else-img-wrapper">
                    <img src="<?=get_field('image', $item->ID); ?>" alt="photo">
                    <span></span>
                </div>
                <div class="else-item-content">
                    <span class="else-type"><?= strpos($url, '/en') !== false ? 'New' : 'Новина'; ?></span>
                    <strong class="else-title"><?=$item->title;?></strong>
                    <span class="else-date"><?=$item->date;?></span>
                </div>
            </a>
          <? } ?>
            
        </div>

        <div class="else-list events" id="events">
        <?php
          foreach ($events as $item){ ?>
          <a href="<?= strpos($url, '/en') !== false ? '/events-en' : '/events'; ?>" class="else-item wow fadeInUp">
                <div class="else-img-wrapper">
                    <img src="<?=get_field('image', $item->ID); ?>" alt="photo">
                    <span></span>
                </div>
                <div class="else-item-content">
                    <span class="else-type"><?= strpos($url, '/en') !== false ? 'Event' : 'Подія'; ?></span>
                    <strong class="else-title"><?=$item->title;?></strong>
                    <span class="else-date"><?=$item->date;?></span>
                </div>
            </a>
          <? } ?>
        </div>

        <div class="else-list adverts" id="adverts">
        <?php
          foreach ($adverts as $item){ ?>
          <a href="<?= strpos($url, '/en') !== false ? '/adverts-en' : '/adverts'; ?>" class="else-item wow fadeInUp">
                <div class="else-img-wrapper">
                    <img src="<?=get_field('image', $item->ID); ?>" alt="photo">
                    <span></span>
                </div>
                <div class="else-item-content">
                    <span class="else-type"><?= strpos($url, '/en') !== false ? 'Advert' : 'Оголошення'; ?></span>
                    <strong class="else-title"><?=$item->title;?></strong>
                    <span class="else-date"><?=$item->date;?></span>
                </div>
            </a>
          <? } ?>
        </div>
    </div>
    
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php
get_footer();
