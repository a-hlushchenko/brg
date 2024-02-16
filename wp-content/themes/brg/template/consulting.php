<?php
/*Template Name: консалтинг*/
get_header(); 

$url = $_SERVER['REQUEST_URI'];

$custom = get_post_custom(get_the_ID()); 

?>

<link href="<?php echo get_template_directory_uri(); ?>/css/consulting.css" rel="stylesheet"/>
<img src="/wp-content/themes/brg/svg/main-pattern.svg" alt="" class="main-pattern">
<div class="consulting-bg">
    <section class="container consulting">
        <h1 class="h2 wow fadeInDown"><?=$custom['consulting_title'][0]?></h1>
        <div class="consulting-content">
                <img src="<?php echo get_field('consulting_image')?>" alt="photo" class="img wow slideInLeft">
            <p class="text  wow slideInRight"><?=$custom['consulting_text'][0]?></p>
        </div>
    </section>

    <section class="container offer">
        <h1 class="h2 wow fadeInDown" data-wow-delay="0.5s"><?php echo $custom['offer_title'][0]?></h1>
        <div class="offer-list wow fadeInUp slider-offer" data-wow-delay="0.5s">
                    <?php $offers = get_field('offer'); ?>
                        <?php if($offers){ ?> 
                            <?php foreach($offers as $offer){ ?>
                                        <div class="offer-item slide-offer">
                                            <strong class="offer-title"><?php echo $offer['title']?></strong>
                                            <div class="offer-text-wrapper">
                                                <p class="offer-text"><?php echo $offer['text']?></p>
                                            </div>
                                        </div>
                            <?php } ?>       
                        <?php } ?>
    </section>
</div>

<div class="help-bg">
<img src="/wp-content/themes/brg/svg/consulting3-pattern.svg" alt="" class="consulting3-pattern">
    <section class="container consulting">
        <h1 class="h2 wow fadeInDown"><?=$custom['help_title'][0]?></h1>
        <div class="consulting-content">
            <div class="help-text wow slideInLeft">
                <p class="text"><?=$custom['help_text'][0]?></p>
                <p class="text"><?=$custom['help_text2'][0]?></p>
            </div>
                <img src="<?php echo get_field('help_image')?>" alt="photo" class="img wow slideInRight">
        </div>
    </section>
    <section class="container accompany wow fadeInUpBig">
        <h2 class="h2"><?php echo $custom['accomp_title'][0]?></h2>
        <div class="accompany-list">
            <?php $accomps = get_field('accomp'); ?>
                <?php if($accomps){ ?> 
                    <?php foreach($accomps as $accomp){ ?>
                    <div class="accompany-item">
                        <div class="accompany-item-top">
                        <img src="<?=$accomp['image']?>" alt="picture">
                        <strong class="accompany-item-title"><?php echo $accomp['title']?></strong>
                        </div>
                        <span class="accompany-stick"></span>
                        <?php $accomps_elements = $accomp['group']; ?>
                            <?php if($accomps_elements){ ?> 
                                <ul class="accompany-item-list">
                                    <?php foreach($accomps_elements as $el){?>
                                        <li class="accompany-item-element"><?=$el;?></li>
                                    <?php } ?>
                                
                                </ul>
                                <span class="accompany-open-button"><span></span><span></span></span>
                            <?php } ?>
                    </div>
                    <?php } ?>       
                <?php } ?>
        </div>
    </section>
</div>
<div class="consulting4-bg">
    <img src="/wp-content/themes/brg/svg/consulting4-pattern.svg" alt="" class="consulting4-pattern">
    <section class="container consulting">
        
        <div class="consulting-content">
                <img src="<?php echo get_field('give_image')?>" alt="photo" class="provide-img">
            
            <div class="help-text">
            <h1 class="h2"><?=$custom['give_title'][0]?></h1>
                <p class="text"><?=$custom['give_text'][0]?></p>
                <p class="text"><?=$custom['give_text2'][0]?></p>
            </div>
            </div>
      <div class="action-button open-feedback" style="margin: 0 auto"><?= strpos($url, '/en') !== false ? 'Order a service' : "Замовити послугу"; ?></div>
    </section>

</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/consulting.js"></script>

<?php
get_footer();
