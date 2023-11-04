<?php
/*Template Name: Вакансії*/
get_header(); 

$custom_fields = get_post_custom(get_the_ID());

$url = $_SERVER['REQUEST_URI'];

$vacancies = get_posts([
    'post_type' => 'vacancy',
    'post_status' => 'publish',
    'posts_per_page' => 100,
]);
/*
echo "<pre>";
print_r($vacancies[0]);
echo "</pre>";
$res = get_field('require', 716);

echo "<pre>";
print_r($res);
echo "</pre>";
*/
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/vacancies.css" rel="stylesheet"/>

<div class="vacancies-bg">
    <main class="container vacancies">
        <section class="vacancies-top">
            <div class="img-wrapper wow slideInLeft">
                <img src="<?php echo get_field('vacancies_top_image')?>" alt="photo" class="img">
            </div>
            <div class="vacancies-top-content wow fadeInUpBig">
                <h1 class="h2"><?=$custom_fields['vacancies_top_title'][0]?></h1>
                <p class="text"><?=$custom_fields['vacancies_top_text'][0]?></p>
            </div>
        </section>
        <section class="vacancies-bottom wow fadeInUpBig" data-wow-delay="0.5s">
            <div class="vacancies-heading">
                <p class="vacancies-subtitile"><?=$custom_fields['vacancies_bottom_subtitle'][0]?></p>
                <h2 class="h2"><?=$custom_fields['vacancies_bottom_title'][0]?></h2>
            </div>
            <div class="vacancies-list">
            <?php
          foreach ($vacancies as $vac){ ?> 
                <div class="vacancies-item-wrapper">
                    <div class="vacancies-item">
                        <span class="vacancies-item-date"><?=$vac->date;?></span>
                        <div class="vacancies-item-heading">
                            <strong class="vacancies-item-title"><?=$vac->title;?></strong>
                            <span class="vacancies-item-subtitle"><?=$vac->subtitle;?></span>
                        </div>
                        <p class="vacancies-item-text"><?=$vac->text;?></p>
                        <div class="vacancies-details-wrapper">
                            <button class="vacancies-details-button"><?= strpos($url, '/en') !== false ? 'Show more' : 'показати більше'; ?></button>
                            <div class="vacancies-details">
                                <strong class="details-title"><?= strpos($url, '/en') !== false ? 'description' : 'ОПИС ВАКАНСІЇ'; ?>:</strong>
                                <div class="details-item">
                                    <span class="details-item-title"><?= strpos($url, '/en') !== false ? 'REQUIREMENTS' : 'ВИМОГИ ДО КАНДИДАТА'; ?>:</span>

                                    <?php $requires = get_field('require', $vac->ID); ?>
                                    <?php if($requires){ ?> 
                                    <ul class="details-list">
                                        <?php foreach($requires as $el){ if(!$el)continue;?>
                                        <li class="details-element"><?=$el;?></li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                </div>
                                <div class="details-item">
                                    <span class="details-item-title"><?= strpos($url, '/en') !== false ? 'duties' : "Обов'язки"; ?>:</span>
                                    <ul class="details-list">
                                    <?php $duties = get_field('duties', $vac->ID); ?>
                                    <?php if($duties){ ?> 
                                    <ul class="details-list">
                                        <?php foreach($duties as $el){ if(!$el)continue;?>
                                        <li class="details-element"><?=$el;?></li>
                                        <?php } ?>
                                    </ul>
                                    <?php } ?>
                                    </ul>
                                </div>
                                <button class="button-wrapper header-contact-button open-request">
                                    <div class="action-button"><?= strpos($url, '/en') !== false ? 'Send a request' : 'Надіслати запит'; ?></div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
          <? } ?>
                
            </div>
        </section>
    </main>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/vacancies.js"></script>

<?php
get_footer();
