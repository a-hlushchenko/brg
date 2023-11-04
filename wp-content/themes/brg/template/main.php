<?php
/*Template Name: Головна*/
get_header(); 
$custom_fields = get_post_custom(get_the_ID()); 

$url = $_SERVER['REQUEST_URI'];

$team = get_posts([
    'post_type' => 'peoplenew',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
]);

$news = get_posts([
    'post_type' => 'news',
    'post_status' => 'publish',
    'posts_per_page' => 1000,
]);

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

<main class="main">
    <img src="/wp-content/themes/brg/img/main-letter.png" alt="" class="main-img">
    <p class="main-text wow bounceInUp"><?php echo $custom_fields['main_text'][0]?></p>
</main>

<section class="about-bg">
    <div class="container about">
        <div class="about-top">
            <div class="img-wrapper wow fadeInLeftBig">
                <img src="<?php echo get_field('about_top_image')?>" alt="photo" class="img">
            </div>
            <div class="about-top-content wow fadeInUp">
                <h2 class="h2"><?php echo $custom_fields['about_top_title'][0]?></h2>
                <strong class="about-top-subtitle">Best  restaurant  Group</strong>
                <p class="text"><?php echo $custom_fields['about_top_text_1'][0]?></p>
                <p class="text"><?php echo $custom_fields['about_top_text_2'][0]?></p>
                <a href="#" class="button-wrapper">
                    <div class="action-button"><?php echo $custom_fields['about_top_button'][0]?></div>
                </a>
            </div>
        </div>
        <div class="about-bottom">
            <div id="about" class="swiper swiper-container about-swiper" style="position: unset">
                <div class="swiper-wrapper" style="position: unset">

                    <div class="swiper-slide">
                        <div class="about-bottom-item wow fadeInUp">
                            <span class="about-bottom-item-number">№ 01</span>
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item1_title'][0]?></strong>
                            <span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item1_number'][0]?></span>
                            <span class="about-bottom-subtitle"><?php echo $custom_fields['about_bottom_item1_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item1_text'][0]?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="about-bottom-item wow fadeInUp">
                            <span class="about-bottom-item-number">№ 02</span>
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item2_title'][0]?></strong>
                            <span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item2_number'][0]?></span>
                            <span class="about-bottom-subtitle"><?php echo $custom_fields['about_bottom_item2_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item2_text'][0]?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="about-bottom-item wow fadeInUp">
                            <span class="about-bottom-item-number">№ 03</span>
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item3_title'][0]?></strong>
                            <span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item3_number'][0]?></span>
                            <span class="about-bottom-subtitle"><?php echo $custom_fields['about_bottom_item3_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item3_text'][0]?></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-actions">
                <div class="swiper-button-prev swiper-button-prev-about"></div>
                <div class="swiper-pagination swiper-pagination-about" style="width: fit-content"></div>
                <div class="swiper-button-next swiper-button-next-about"></div>
            </div>
        </div>
    </div>
</section>


<section class="container restaurants">
    <h2 class="h2"><?php echo $custom_fields['restaurant_title'][0]?></h2>
    <div class="restaurant-list">
        <div id="restaurant" class="swiper swiper-container restaurant-swiper" style="position: unset">
            <div class="swiper-wrapper" style="position: unset">
                <div class="swiper-slide">
                    <a href="https://beefandcake.brg.restaurant" target="_blank" class="restaurant restaurant1 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="restaurant-content">
                            <img src="/wp-content/themes/brg/img/restaurant1.png" alt="beef & cake" class="restaurant-logo">
                            <span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_1'][0]?></span>
                            <div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
                            <span class="restaurant-number">№ 01</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://piccolino.brg.restaurant" target="_blank" class="restaurant restaurant2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="restaurant-content">
                            <img src="/wp-content/themes/brg/img/restaurant2.png" alt="piccolino" class="restaurant-logo">
                            <span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_2'][0]?></span>
                            <div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
                            <span class="restaurant-number">№ 02</span>
                        </div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="https://catering.brg.restaurant" target="_blank" class="restaurant restaurant3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="restaurant-content">
                            <img src="/wp-content/themes/brg/img/restaurant3.png" alt="brg" class="restaurant-logo">
                            <span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_3'][0]?></span>
                            <div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
                            <span class="restaurant-number">№ 03</span>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="swiper-actions">
                <div class="swiper-button-prev swiper-button-prev-restaurant"></div>
                <div class="swiper-pagination swiper-pagination-restaurant" style="width: fit-content"></div>
                <div class="swiper-button-next swiper-button-next-restaurant"></div>
            </div>
        </div>
    </div>
</section>

<section class="franchising-bg">
    <div class="container franchising wow fadeInUpBig">
        <div class="franchising-heading">
            <p class="franchising-subtitile"><?php echo get_field('franchising_subtitle')?></p>
            <h2 class="h2"><?php echo get_field('franchising_title')?></h2>
        </div>
        <div class="franchising-list">
        <div id="franchising" class="swiper swiper-container franchising-swiper" style="position: unset">
            <div class="swiper-wrapper" style="position: unset">
                <div class="swiper-slide">
                <div class="franchising-item">
                <img src="/wp-content/themes/brg/img/franchising1.png" alt="picture">
                <strong class="franchising-item-title"><?php echo get_field('franchising_item1_title')?></strong>
                <span class="franchising-stick"></span>
                <ul class="franchising-item-list">
                    <li class="franchising-item-element"><?php echo get_field('franchising_item1_element1')?></li>
                    <li class="franchising-item-element"><?php echo get_field('franchising_item1_element2')?></li>
                </ul>
            </div>
                </div>
                <div class="swiper-slide">
                <div class="franchising-item">
                <img src="/wp-content/themes/brg/img/franchising2.png" alt="picture">
                <strong class="franchising-item-title"><?php echo get_field('franchising_item2_title')?></strong>
                <span class="franchising-stick"></span>
                <ul class="franchising-item-list">
                    <li class="franchising-item-element"><?php echo get_field('franchising_item2_element1')?></li>
                    <li class="franchising-item-element"><?php echo get_field('franchising_item2_element2')?></li>
                </ul>
            </div>
                </div>
                <div class="swiper-slide">
                <div class="franchising-item">
                <img src="/wp-content/themes/brg/img/franchising3.png" alt="picture">
                <strong class="franchising-item-title"><?php echo get_field('franchising_item3_title')?></strong>
                <span class="franchising-stick"></span>
                <ul class="franchising-item-list">
                    <li class="franchising-item-element"><?php echo get_field('franchising_item3_element1')?></li>
                    <li class="franchising-item-element"><?php echo get_field('franchising_item3_element2')?></li>
                    <li class="franchising-item-element"><?php echo get_field('franchising_item3_element3')?></li>
                </ul>
            </div>
                </div>
            </div>
            
            <div class="swiper-actions">
                <div class="swiper-button-prev swiper-button-prev-franchising"></div>
                <div class="swiper-pagination swiper-pagination-franchising" style="width: fit-content"></div>
                <div class="swiper-button-next swiper-button-next-franchising"></div>
            </div>
        </div>
        </div>
        <a href="#" class="button-wrapper">
            <div class="action-button"><?php echo get_field('franchising_button')?></div>
        </a>
    </div>
</section>

<div class="consulting-bg">
    <section class="container consulting">
            <h2 class="h2"><?php echo $custom_fields['consulting_top_title'][0]?></h2>
            <div class="consulting-top-main">
                <img src="<?php echo get_field('consulting_top_image')?>" alt="photo" class="img wow fadeInLeft">
                <div class="consalting-content wow fadeInRight">
                    <h3 class="consulting-title"><?php echo $custom_fields['consulting_top_subtitle'][0]?></h3>
                    <p class="consulting-text"><?php echo $custom_fields['consulting_top_text'][0]?></p>
                    <a  href="<?= strpos($url, '/en') !== false ? '/consulting-en' : '/consulting'; ?>" class="button-wrapper">
                        <div class="action-button"><?php echo $custom_fields['consulting_top_button'][0]?></div>
                    </a>
                </div>
            </div>
    </section>
    <div class="consulting-buttom">
        <h3 class="consulting-bottom-title"><?php echo $custom_fields['consulting_title2'][0]?></h3>
        <div id="companies" class="swiper swiper-container companies-swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/hennesy-logo.png" alt="kennessy">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/vitis-logo.png" alt="vitis">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/centrospice-logo.png" alt="centrospice">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/globino-logo.png" alt="глобино">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/cocacola-logo.png" alt="coca cola">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/kura-logo.png" alt="волочиська кура">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/myasoid-logo.png" alt="myaso">
                </div> 
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/hennesy-logo.png" alt="kennessy">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/vitis-logo.png" alt="vitis">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/centrospice-logo.png" alt="centrospice">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/globino-logo.png" alt="глобино">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/cocacola-logo.png" alt="coca cola">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/kura-logo.png" alt="волочиська кура">
                </div>   
                <div class="swiper-slide">
                    <img src="/wp-content/themes/brg/img/myasoid-logo.png" alt="myaso">
                </div> 

            </div>
        </div>
    </div>
</div>

<div class="container team wow fadeInUpBig">
    <h2 class="h2"><?php echo $custom_fields['team_title'][0]?></h2>
    <div id="team" class="swiper swiper-container team-swiper" style="position: unset">
        <div class="swiper-wrapper" style="position: unset">
        <?php
          foreach ($team as $people){ ?> 
            <div class="swiper-slide">
                <div class="team-item">
                    <img src="<?=get_field('image', $people->ID); ?>" alt="employee">
                    <strong class="team-item-title"><?=$people->title;?></strong>
                    <p class="team-item-text"><?=$people->text;?></p>
                </div>
            </div>
          <? } ?>

        </div>

        <div class="swiper-actions">
                <div class="swiper-button-prev swiper-button-prev-team2"></div>
                <div class="swiper-pagination swiper-pagination-team" style="width: fit-content"></div>
                <div class="swiper-button-next swiper-button-next-team2"></div>
            </div>

        <div class="swiper-button-prev swiper-button-prev-team1"><img src="/wp-content/themes/brg/svg/prev.svg" alt=">"></div>
        <div class="swiper-button-next swiper-button-next-team1"><img src="/wp-content/themes/brg/svg/next.svg" alt="<"></div>
    </div>
    <div class="team-button-wrapper">
        <a href="<?= strpos($url, '/en') !== false ? '/team-en' : '/team'; ?>" class="button-wrapper">
            <div class="action-button"><?= strpos($url, '/en') !== false ? 'Show more' : 'Показати більше'; ?></div>
        </a>
    </div>
</div>

<section class="container else wow fadeInUpBig">
    <h2 class="h2"><?php echo $custom_fields['events_title'][0]?></h2>
    <div class="else-content">
        <div class="else-tab-list">
            <button class="else-tab else-tab-active" data-tab="news"><?= strpos($url, '/en') !== false ? 'News' : 'Новини'; ?></button>
            <button class="else-tab" data-tab="events"><?= strpos($url, '/en') !== false ? 'Events' : 'Події'; ?></button>
            <button class="else-tab" data-tab="adverts"><?= strpos($url, '/en') !== false ? 'Adverts' : 'Оголошення'; ?></button>
        </div>
        <div class="else-list news else-active" id="news">
        <div id="news-swiper" class="swiper swiper-container news-swiper" style="position: unset">
            <div class="swiper-wrapper" style="position: unset">

            <?php
          foreach ($news as $item){ ?>
          <div class="swiper-slide">
                    <a href="/blog" class="else-item">
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
                </div>
          <? } ?>

                
                  
            </div>
            
            <div class="swiper-actions">
                <div class="swiper-button-prev swiper-button-prev-news"></div>
                <div class="swiper-pagination swiper-pagination-news" style="width: fit-content"></div>
                <div class="swiper-button-next swiper-button-next-news"></div>
            </div>
        </div>
        <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="button-wrapper">
      <div class="action-button"><?= strpos($url, '/en') !== false ? 'Blog' : 'Блог'; ?></div>
          </a>
        </div>
        <div class="else-list events" id="events">
        <div id="events-swiper" class="swiper swiper-container events-swiper" style="position: unset">
            <div class="swiper-wrapper" style="position: unset">
                
            <?php
          foreach ($events as $item){ ?>
          <div class="swiper-slide">
                    <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="else-item">
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
                </div>
          <? } ?>
                
            </div>
            
            <div class="swiper-actions">
                <div class="swiper-button-prev swiper-button-prev-events"></div>
                <div class="swiper-pagination swiper-pagination-events" style="width: fit-content"></div>
                <div class="swiper-button-next swiper-button-next-events"></div>
            </div>
        </div>
        <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="button-wrapper">
      <div class="action-button"><?= strpos($url, '/en') !== false ? 'Blog' : 'Блог'; ?></div>
          </a>
        </div>
        <div class="else-list adverts" id="adverts">
        <div id="adverts-swiper" class="swiper swiper-container adverts-swiper" style="position: unset">
            <div class="swiper-wrapper" style="position: unset">
            <?php
          foreach ($adverts as $item){ ?>
          <div class="swiper-slide">
                    <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="else-item">
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
                </div>
          <? } ?>
                
            </div>
            
            <div class="swiper-actions">
                <div class="swiper-button-prev swiper-button-prev-adverts"></div>
                <div class="swiper-pagination swiper-pagination-adverts" style="width: fit-content"></div>
                <div class="swiper-button-next swiper-button-next-adverts"></div>
            </div>
        </div>
        <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="button-wrapper">
      <div class="action-button"><?= strpos($url, '/en') !== false ? 'Blog' : 'Блог'; ?></div>
          </a>
        </div>
    </div>
    
</section>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php
get_footer();
