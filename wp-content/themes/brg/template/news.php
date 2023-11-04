<?php
/*Template Name: Новини*/
get_header(); 

$url = $_SERVER['REQUEST_URI'];

$news = get_posts([
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
]);
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/events.css" rel="stylesheet"/>

<div class="events-bg">
    <div class="container events">
        <div class="events-tab wow slideInDown"><?= strpos($url, '/en') !== false ? 'News' : 'Новини'; ?></div>
        <div class="events-list">
        <?php
          foreach ($news as $item){ ?>
            <div class="events-item wow slideInLeft">
                <img src="<?=get_field('image', $item->ID); ?>" alt="photo" class="events-img">
                <div class="events-content">
                    <span class="events-date"><?=$item->date;?></span>
                    <h1 class="events-title"><?=$item->title;?></h1>
                    <pre class="events-text"><?=$item->text;?></pre>
                </div>
            </div>
          <? } ?>
        </div>
    </div>
</div>
    

<script src="<?php echo get_template_directory_uri(); ?>/js/events.js"></script>

<?php
get_footer();
