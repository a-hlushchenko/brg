<?php
/*Template Name: консалтинг*/
get_header(); 

$custom = get_post_custom(get_the_ID()); 

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/consulting.css" rel="stylesheet"/>

<div class="consulting-bg">
    <section class="container consulting">
        <h1 class="h2 wow fadeInDown"><?=$custom['consulting_title'][0]?></h1>
        <div class="consulting-content">
            <div class="img-wrapper wow slideInLeft">
                <img src="<?php echo get_field('consulting_image')?>" alt="photo" class="img">
            </div>
            <p class="text  wow slideInRight"><?=$custom['consulting_text'][0]?></p>
        </div>
    </section>

    <section class="container offer">
        <h1 class="h2 wow fadeInDown" data-wow-delay="0.5s"><?php echo $custom['offer_title'][0]?></h1>
        <div class="offer-list wow fadeInUp" data-wow-delay="0.5s">
            <div id="offer" class="swiper swiper-container offer-swiper" style="position: unset">
                <div class="swiper-wrapper" style="position: unset">
                    <?php $offers = get_field('offer'); ?>
                        <?php if($offers){ ?> 
                            <?php foreach($offers as $offer){ ?>
                                    <div class="swiper-slide">
                                        <div class="offer-item">
                                            <strong class="offer-title"><?php echo $offer['title']?></strong>
                                            <div class="offer-text-wrapper">
                                                <p class="offer-text"><?php echo $offer['text']?></p>
                                            </div>
                                        </div>
                                    </div>
                            <?php } ?>       
                        <?php } ?>
                   
                    
                </div>
                
                <div class="swiper-actions">
                    <div class="swiper-button-prev swiper-button-prev-offer"></div>
                    <div class="swiper-pagination swiper-pagination-offer" style="width: fit-content"></div>
                    <div class="swiper-button-next swiper-button-next-offer"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="help-bg">
    <section class="container consulting">
        <h1 class="h2 wow fadeInDown"><?=$custom['help_title'][0]?></h1>
        <div class="consulting-content">
            <div class="help-text wow slideInLeft">
                <p class="text"><?=$custom['help_text'][0]?></p>
                <p class="text"><?=$custom['help_text2'][0]?></p>
            </div>
            <div class="img-wrapper help-img wow slideInRight">
                <img src="<?php echo get_field('help_image')?>" alt="photo" class="img">
            </div>
        </div>
    </section>
    <section class="container accompany wow fadeInUpBig">
            <h2 class="h2"><?php echo $custom['accomp_title'][0]?></h2>
        <div class="accompany-list">
            <div id="accompany" class="swiper swiper-container accompany-swiper" style="position: unset">
                <div class="swiper-wrapper" style="position: unset">
                <?php $accomps = get_field('accomp'); ?>
                        <?php if($accomps){ ?> 
                            <?php foreach($accomps as $accomp){ ?>
                                <div class="swiper-slide">
                        <div class="accompany-item">
                            <img src="<?=$accomp['image']?>" alt="picture">
                            <strong class="accompany-item-title"><?php echo $accomp['title']?></strong>
                            <span class="accompany-stick"></span>
                            <?php $accomps_elements = $accomp['group']; ?>
                                    <?php if($accomps_elements){ ?> 
                            <ul class="accompany-item-list">
                            <?php foreach($accomps_elements as $el){?>
                                <li class="accompany-item-element"><?=$el;?></li>
                                        <?php } ?>
                                
                            </ul>
                            <?php } ?>
                        </div>
                    </div>
                            <?php } ?>       
                        <?php } ?>
                    
                </div>
                
                <div class="swiper-actions">
                    <div class="swiper-button-prev swiper-button-prev-accompany"></div>
                    <div class="swiper-pagination swiper-pagination-accompany" style="width: fit-content"></div>
                    <div class="swiper-button-next swiper-button-next-accompany"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="container consulting">
        <h1 class="h2"><?=$custom['give_title'][0]?></h1>
        <div class="img-wrapper">
        <div class="consulting-content">
                <img src="<?php echo get_field('give_image')?>" alt="photo" class="provide-img">
            
            <div class="help-text">
                <p class="text"><?=$custom['give_text'][0]?></p>
                <p class="text"><?=$custom['give_text2'][0]?></p>
            </div>
            </div>
            
        </div>
        <button class="button-wrapper" style="margin: 0 auto">
      <div class="action-button open-feedback">Зворотній зв’язок</div>
    </button>
    </section>

    

<script src="<?php echo get_template_directory_uri(); ?>/js/consulting.js"></script>

<?php
get_footer();
