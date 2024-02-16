<?php
/*Template Name: блог оголошення*/
get_header(); 
$custom_fields = get_post_custom(get_the_ID()); 

$url = $_SERVER['REQUEST_URI'];

$adverts = get_posts(array(
    'post_type' => 'adverts',
    'post_status' => 'publish',
    'posts_per_page' => 9, // Кількість постів на сторінку
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
));

$adverts_query = new WP_Query(array(
    'post_type'      => 'adverts',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
));

$url = $_SERVER['REQUEST_URI'];

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$post_type_base = strpos($url, '/en') !== false ? '/blog-adverts-en' : '/blog-adverts';

$pagination = paginate_links( array(
    'base' => $post_type_base . '/%_%',
    'format' => '?paged=%#%',
    'current' => $current_page,
    'total' =>  $adverts_query->max_num_pages,
    'show_all' => false,
    'end_size' => 3,
    'mid_size' => 1,
) );

// echo "<pre>";
// print_r(get_field('about_top_image'));
// echo "</pre>";
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet"/>
<link href="<?php echo get_template_directory_uri(); ?>/css/blog.css" rel="stylesheet"/>

<img src="/wp-content/themes/brg/svg/main-pattern.svg" alt="" class="main-pattern">
<img src="/wp-content/themes/brg/svg/blog-pattern.svg" alt="" class="blog-pattern">
<section class="container else wow fadeInUpBig">
    <h2 class="h2"><?= strpos($url, '/en') !== false ? 'All news' : 'Всі новини'; ?></h2>
    <div class="else-content">
        <div class="else-tab-list">
            <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="else-tab" data-tab="news"><?= strpos($url, '/en') !== false ? 'news' : 'Новини'; ?></a>
            <a href="<?= strpos($url, '/en') !== false ? '/blog-adverts' : '/blog-events'; ?>" class="else-tab" data-tab="events"><?= strpos($url, '/en') !== false ? 'Events' : 'Події'; ?></a>
            <button class="else-tab else-tab-active" data-tab="adverts"><?= strpos($url, '/en') !== false ? 'Adverts' : 'Оголошення'; ?></button>
        </div>

        <div class="else-list adverts else-active" id="adverts">
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
        <div class="pagination">
            <?php echo $pagination; ?>
        </div>
    </div>
    
</section>

<script>
     const url = window.location.href;
    const nextButton = document.querySelector('.next.page-numbers');

    if (nextButton) {
        nextButton.innerHTML = (url.includes('/en')) ? 'More adverts' : 'Більше оголошень';
    }
</script>

<?php
get_footer();
