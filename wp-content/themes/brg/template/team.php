<?php
/*Template Name: команда*/
get_header(); 

$url = $_SERVER['REQUEST_URI'];

$team = get_posts([
    'post_type' => 'peoplenew',
    'post_status' => 'publish',
    'posts_per_page' => 100,
]);
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/team.css" rel="stylesheet"/>
<img src="/wp-content/themes/brg/svg/main-pattern.svg" alt="" class="main-pattern">
<div class="team-bg">
    <main class="container team">
        <h1 class="h2 wow fadeInDown"><?= strpos($url, '/en') !== false ? 'Our team' : 'Наша команда'; ?></h1>
        <div class="team-list">
        <?php
          foreach ($team as $people){ ?> 
                <div class="team-item wow fadeInUp">
                    <img src="<?=get_field('image', $people->ID); ?>" alt="employee">
                    <strong class="team-item-title"><?=$people->title;?></strong>
                    <p class="team-item-text"><?=$people->text;?></p>
                </div>
          <? } ?>
        </div>
    </main>
</div>
    
<script src="<?php echo get_template_directory_uri(); ?>/js/team.js"></script>

<?php
get_footer();
