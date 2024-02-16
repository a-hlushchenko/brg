<?php
/*Template Name: оголошення*/
get_header(); 

$url = $_SERVER['REQUEST_URI'];

$adverts = get_posts([
    'post_type' => 'adverts',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
]);
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/events.css" rel="stylesheet"/>
<img src="/wp-content/themes/brg/svg/main-pattern.svg" alt="" class="main-pattern">
<div class="events-bg">
    <div class="container events">
        <h1 class="h2 wow slideInDown"><?= strpos($url, '/en') !== false ? 'Adverts' : 'Оголошення'; ?></h1>
        <div class="events-list">
        <?php
          foreach ($adverts  as $item){ ?>
            <div class="events-item-wrapper wow slideInLeft">
            <div class="events-item">
                <img src="<?=get_field('image', $item->ID); ?>" alt="photo" class="events-img">
                <div class="events-content">
                    <span class="events-date"><?=$item->date;?></span>
                    <h2 class="events-title main"><?=$item->title;?></h2>
                    <p class="events-text"><?=$item->text;?></p>
                    <h3 class="events-title second"><?=$item->title2;?></h3>

                </div>
            </div>
            <div class="event-details">
            <p class="events-text"><?=$item->text2;?></p>
            <h4 class="events-title"><?=$item->title3;?></h4>
                    <p class="events-text"><?=$item->text3;?></p>
            </div>
            <button class="event-details-button"><span></span><span></span></button>
            </div>
          <? } ?>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/events.js"></script>

<?php
get_footer();
