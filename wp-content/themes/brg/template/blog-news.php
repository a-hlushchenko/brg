<?php
/*Template Name: блог новини*/
get_header(); 
$custom_fields = get_post_custom(get_the_ID()); 

// $news = get_posts([
//     'post_type' => 'news',
//     'post_status' => 'publish',
//     'posts_per_page' => 1000,
// ]);

$news = get_posts(array(
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 9, // Кількість постів на сторінку
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
));

$news_query = new WP_Query(array(
    'post_type'      => 'news',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
));

$url = $_SERVER['REQUEST_URI'];

$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$post_type_base = strpos($url, '/en') !== false ? '/blog-en' : '/blog';

$pagination = paginate_links( array(
    'base' => $post_type_base . '/%_%',
    'format' => '?paged=%#%',
    'current' => $current_page,
    'total' =>  $news_query->max_num_pages,
    'show_all' => false,
    'end_size' => 3,
    'mid_size' => 1,
) );

// echo "<pre>";
// print_r($news);
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
            <div class="else-tab else-tab-active" data-tab="news"><?= strpos($url, '/en') !== false ? 'news' : 'Новини'; ?></div>
            <a href="<?= strpos($url, '/en') !== false ? '/blog-events-en' : '/blog-events'; ?>" class="else-tab"><?= strpos($url, '/en') !== false ? 'Events' : 'Події'; ?></a>
            <?php if (!empty($adverts)) : ?><a href="<?= strpos($url, '/en') !== false ? '/blog-adverts-en' : '/blog-adverts'; ?>" class="else-tab"><?= strpos($url, '/en') !== false ? 'Adverts' : 'Оголошення'; ?></a><?php endif; ?>
        </div>
        <div class="else-list news else-active" id="news">   
        <?php
          foreach ($news as $item){ ?>
          <a href="<?= strpos($url, '/en') !== false ? '/news-en#' . $item->ID : '/news#' . $item->ID; ?>" class="else-item wow fadeInUp">
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
        <div class="pagination">
            <?php echo $pagination; ?>
        </div>
    </div>
    
</section>



<script>
     const url = window.location.href;
    const nextButton = document.querySelector('.next.page-numbers');

    if (nextButton) {
        nextButton.innerHTML = (url.includes('/en')) ? 'More news' : 'Більше новин';
    }
</script>

<?php
get_footer();
