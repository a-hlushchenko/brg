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
    'posts_per_page' => 3,
]);

$events = get_posts([
    'post_type' => 'events',
    'post_status' => 'publish',
    'posts_per_page' => 3,
]);

$adverts = get_posts([
    'post_type' => 'adverts',
    'post_status' => 'publish',
    'posts_per_page' => 3,
]);

// echo "<pre>";
// print_r($news);
// echo "</pre>";
?>

<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet"/>

<main class="main">
<img class="main-img" src="/wp-content/themes/brg/svg/bg.svg" alt="|" style="position: absolute; z-index:10">
<div class="block_video_bg for_desc_only"
			style="height: 100vh;overflow: hidden; margin-bottom:-20px;position: relative;">
	

			<div class="full-video visible">
				<svg class="mySvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1600 900" width="1600px" height="900px"
					preserveAspectRatio="xMidYMid slice">
					<defs>
						<mask id="mask" x="0" y="0" width="100%" height="100%">
							<rect x="0" y="0" width="100%" height="100%"></rect>


							<svg version="1.1" class="letter" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
								viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">

								<!-- <path id="b1" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10" d="M 663,802 L 663,102"></path>
                                        <path id="b2" fill="none" stroke="#000000" stroke-width="100" stroke-miterlimit="10" d="M0,127h878.035 c86.565,0,156.742,70.291,156.742,157s-70.177,157-156.742,160H0"></path>
                                        <path id="b3" fill="none" stroke="#000000" stroke-width="100" stroke-miterlimit="10" d="M0,444h878.035 c186.565,10,256.742,0.191,256.742,157s-70.177,157-156.742,157H0"></path> -->

								<!-- <path id="b1" d="M663,802v-700" fill="none" stroke="#000" stroke-width="140" stroke-miterlimit="10"/>
                                        <path id="b2" d="M0,127h878.035c86.565,0,156.742,70.291,156.742,157s-70.177,157-156.742,160L0,444" fill="none" stroke="#000" stroke-width="140" stroke-miterlimit="10"/>
                                        <path id="b3" d="M0,444h878.035c86.565,0,156.742,70.291,156.742,157s-70.177,157-156.742,157L0,758" transform="translate(500.001511 0)" fill="none" stroke="#000" stroke-width="140" stroke-miterlimit="10"/> -->

								<path id="b1" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10"
									d="M663,802V102" />
								<path id="b2" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10"
									d="M0,127h878c86.6,0,156.7,70.3,156.7,157 S964.6,441,878,444H0" />
								<path id="b3" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10"
									d="M592.6,476.6h509.1c50.2,0,90.9,63,90.9,140.7 S1151.9,758,1101.7,758H592.6" />

							</svg>

							<svg version="1.1" class="letter" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
								viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">
								<path id="r1" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10"
									d="M 663,802 L 663,102"
									style="stroke-dashoffset: 1400; stroke-dasharray: 700, 630, 0, 700, 0, 700;"></path>
								<path id="r2" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10" d="M0,172h878.035
                                              c86.565,0,156.742,70.291,156.742,157s-70.177,157-156.742,157H0"
									style="stroke-dashoffset: 4497.93; stroke-dasharray: 2248.96, 3904.2, 0;"></path>
								<g id="alr3">
									<g>
										<defs>
											<polygon id="SVGID_1_"
												points="1152.994,802 952.994,802 787.979,520.986 987.979,520.986"></polygon>
										</defs>
										<clipPath id="SVGID_2_">
											<use xlink:href="#SVGID_1_" overflow="visible"></use>
										</clipPath>
										<path id="r3" clip-path="url(#SVGID_2_)" fill="none" stroke="#000000" stroke-width="140"
											stroke-miterlimit="10" d="M 1079.5,846.501 L 867.501,488.501"
											style="stroke-dashoffset: 832.124; stroke-dasharray: 416.062, 798.839, 0;"></path>
									</g>
								</g>
							</svg>

							<svg version="1.1" class="letter" xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
								viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">
								<path id="g1" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10"
									d="M 1600,450 L 0,450"
									style="stroke-dashoffset: 3200; stroke-dasharray: 1600, 2040.8, 785.707;"></path>
								<path id="g2" fill="none" stroke="#000000" stroke-width="140" stroke-miterlimit="10"
									d="M801,155.811
                                        c163.191,0,295.484,132.293,295.484,295.485c0,163.191-132.292,295.485-295.484,295.485S505.516,614.488,505.516,451.296
                                        c0-78.164,30.351-149.239,79.907-202.085C639.333,191.725,715.974,155.811,801,155.811z"
									style="stroke-dashoffset: 3713.69; stroke-dasharray: 1856.85, 406.649, 828.896, 1027.95, 828.896, 1856.85;">
								</path>
							</svg>

						</mask>
					</defs>
					<rect x="0" y="0" width="1920" height="1080"></rect>
				</svg>
				<video id="video" autoplay="autoplay" muted="muted" preload="auto" loop="loop">
					<source src="/wp-content/themes/brg/video/main3.mp4" type="video/mp4">
				</video>
			</div>

			<div class="thin-letters">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
					viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">
					<path id="thin-f1" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M 155.931,930.003 L 155.931,106.502"
						style="stroke-dashoffset: 1647; stroke-dasharray: 823.501, 823.501, 0;"></path>
					<path id="thin-f2" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M -542.861,106.502 L 1339.427,106.502"
						style="stroke-dashoffset: 3764.58; stroke-dasharray: 1882.29, 1882.29, 0;"></path>
					<path id="thin-f3" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M -542.861,537.075 L 1339.427,537.075"
						style="stroke-dashoffset: 3764.58; stroke-dasharray: 1882.29, 1882.29, 0;"></path>
				</svg>
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
					viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">
					<path id="thin-i" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M 524.001,-4 L 524.001,908" style="stroke-dashoffset: 1824; stroke-dasharray: 912, 912, 0;"></path>
				</svg>
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
					viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">
					<path id="thin-g1" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M 1634.006,450.984 L -969.994,450.984"
						style="stroke-dashoffset: 5208; stroke-dasharray: 2604, 2604, 0;"></path>
					<path id="thin-g2" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10" d="M444.314-29.607
        c265.594,0,480.901,215.307,480.901,480.902c0,265.594-215.306,480.902-480.901,480.902S-36.586,716.891-36.586,451.295
        c0-127.212,49.397-242.886,130.049-328.894C181.201,28.843,305.934-29.607,444.314-29.607z"
						style="stroke-dashoffset: 6044.04; stroke-dasharray: 3022.02, 3022.02, 0;"></path>
				</svg>
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
					viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">
					<path id="thin-a3" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M -445.376,464.809 L 1600,464.809"
						style="stroke-dashoffset: 4090.75; stroke-dasharray: 2045.38, 2045.38, 0;"></path>
					<path id="thin-a2" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M 572.213,-120.691 L 1006.898,902.01"
						style="stroke-dashoffset: 2222.49; stroke-dasharray: 1111.25, 1111.25, 0;"></path>
					<path id="thin-a1" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M 136.251,902.01 L 570.937,120.691"
						style="stroke-dashoffset: 1788.2; stroke-dasharray: 894.098, 894.098, 0;"></path>
				</svg>
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1600px" height="900px"
					viewBox="0 0 1600 900" enable-background="new 0 0 1600 900" xml:space="preserve">
					<path id="thin-r1" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10"
						d="M 139.727,910.067 L 139.727,-6.068"
						style="stroke-dashoffset: 1832.27; stroke-dasharray: 916.135, 916.135, 0;"></path>
					<path id="thin-r2" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10" d="M-1036.305-5.542H506.098
            c152.062,0,275.341,123.477,275.341,275.794S658.16,546.047,506.098,546.047h-1542.402"
						style="stroke-dashoffset: 7901.29; stroke-dasharray: 3950.65, 3950.65, 0;"></path>
					<g id="alr3">
						<g>
							<g>
								<defs>
									<polygon id="SVGID_1_"
										points="870.022,913.067 608.27,913.067 392.303,545.287 654.056,545.287">
									</polygon>
								</defs>
								<clipPath id="SVGID_2_">
									<use xlink:href="#SVGID_1_" overflow="visible"></use>
								</clipPath>

								<path id="thin-r3" clip-path="url(#SVGID_2_)" fill="none" stroke="#D29966" stroke-width="2"
									stroke-miterlimit="10" d="M 773.836,971.31 L 496.379,502.771"
									style="stroke-dashoffset: 1089.06; stroke-dasharray: 544.528, 544.528, 0;"></path>
							</g>
						</g>
					</g>
				</svg>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
					y="0px" width="1600px" height="900px" viewBox="0 0 1600 900" enable-background="new 0 0 1600 900"
					xml:space="preserve">
					<path id="thin-o" fill="none" stroke="#D29966" stroke-width="2" stroke-miterlimit="10" d="M455.018,937.272
        c-268.396,0-485.974-217.579-485.974-485.977c0-268.396,217.577-485.976,485.974-485.976c268.398,0,485.976,217.578,485.976,485.977
        c0,128.553-49.917,245.448-131.421,332.362C720.907,878.205,594.858,937.272,455.018,937.272z"
						style="stroke-dashoffset: 6107.81; stroke-dasharray: 3053.9, 3053.9, 0;"></path>
				</svg>
			</div>
		</div>

<div class="main__block-new container">
<!-- <img src="/wp-content/themes/brg/img/main-letter.png" alt="" class="main-img"> -->
    <div class="main-text wow bounceInUp"><img class="pc-img" src="/wp-content/themes/brg/img/main-stick.png" alt="|"><img class="mobile-img" src="/wp-content/themes/brg/img/main-stick-mob.png" alt="|"><p><?php echo $custom_fields['main_text'][0]?></p></div>
</div>
    
</main>

<section class="about-bg">
    <div class="container about">
        <div class="about-top">
                <img src="<?php echo get_field('about_top_image')?>" alt="photo" class="img wow slideInLeft">
            <div class="about-top-content wow fadeInUp">
                <strong class="about-top-subtitle">Best  restaurant  Group</strong>
                <h2 class="h2"><?php echo $custom_fields['about_top_title'][0]?></h2>
                <div class="about-text-wrapper">
                <p class="text"><?php echo $custom_fields['about_top_text_1'][0]?></p>
                <p class="text"><?php echo $custom_fields['about_top_text_2'][0]?></p>
                </div>
                
                    <a class="action-button" href="<?= strpos($url, '/en') !== false ? '/about-en' : '/about'; ?>"><?php echo $custom_fields['about_top_button'][0]?></a>
            </div>
        </div>
        <div class="about-bottom about-list slider-about">
            <!-- <div id="about" class="swiper swiper-container about-swiper" style="position: unset">
                <div class="swiper-wrapper" style="position: unset">

                    <div class="swiper-slide">
                        <div class="about-bottom-item wow fadeInUp">
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item1_title'][0]?></strong>
                            
                            <span class="about-bottom-subtitle"><span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item1_number'][0]?></span><?php echo $custom_fields['about_bottom_item1_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item1_text'][0]?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="about-bottom-item wow fadeInUp">
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item2_title'][0]?></strong>
                            
                            <span class="about-bottom-subtitle"><span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item2_number'][0]?></span><?php echo $custom_fields['about_bottom_item2_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item2_text'][0]?></p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="about-bottom-item wow fadeInUp">
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item3_title'][0]?></strong>
                            
                            <span class="about-bottom-subtitle"><span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item3_number'][0]?></span><?php echo $custom_fields['about_bottom_item3_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item3_text'][0]?></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="swiper-actions">
                <div class="swiper-pagination swiper-pagination-about" style="width: fit-content"></div>
            </div> -->

			<div class="about-bottom-item slide-about active-slide wow slideInLeft">
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item1_title'][0]?></strong>
                            
                            <span class="about-bottom-subtitle"><span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item1_number'][0]?></span><?php echo $custom_fields['about_bottom_item1_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item1_text'][0]?></p>
                        </div>
			<div class="about-bottom-item slide-about next-slide wow fadeInUpBig">
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item2_title'][0]?></strong>
                            
                            <span class="about-bottom-subtitle"><span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item2_number'][0]?></span><?php echo $custom_fields['about_bottom_item2_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item2_text'][0]?></p>
                        </div>
			<div class="about-bottom-item slide-about prev-slide wow slideInRight">
                            <strong class="about-bottom-title"><?php echo $custom_fields['about_bottom_item3_title'][0]?></strong>
                            
                            <span class="about-bottom-subtitle"><span class="about-bottom-number"><?php echo $custom_fields['about_bottom_item3_number'][0]?></span><?php echo $custom_fields['about_bottom_item3_subtitle'][0]?></span>
                            <p class="about-bottom-text"><?php echo $custom_fields['about_bottom_item3_text'][0]?></p>
                        </div>
        </div>
    </div>
</section>

<div class="restaurants-bg">
    <img src="/wp-content/themes/brg/svg/restaurants-bg.svg" alt="|" class="bg">
    <section class="container restaurants">
        <h2 class="h2"><?php echo $custom_fields['restaurant_title'][0]?></h2>
        <!-- <div class="restaurant-list slider-restaurant">
            <a href="https://beefandcake.brg.restaurant" target="_blank" class="slide-restaurant active-slide restaurant restaurant1 wow fadeInUp" data-wow-delay="0.2s">
                <img src="/wp-content/themes/brg/img/restaurant1.png" alt="beef & cake" class="restaurant-logo">
                <span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_1'][0]?></span>
                <div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
            </a>
            <a href="https://piccolino.brg.restaurant" target="_blank" class="slide-restaurant next-slide restaurant restaurant2 wow fadeInUp" data-wow-delay="0.2s">
                <img src="/wp-content/themes/brg/img/restaurant2.png" alt="piccolino" class="restaurant-logo">
                <span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_2'][0]?></span>
                <div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
            </a>
            <a href="https://catering.brg.restaurant" target="_blank" class="slide-restaurant prev-slide restaurant restaurant3 wow fadeInUp" data-wow-delay="0.2s">
                <img src="/wp-content/themes/brg/img/restaurant3.png" alt="brg" class="restaurant-logo">
                <span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_3'][0]?></span>
                <div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
            </a>
        </div> -->



		<div id="about" class="swiper swiper-container about-swiper" style="position: unset">
                <div class="swiper-wrapper" style="position: unset">

        <div class="swiper-slide">
			<a href="https://beefandcake.brg.restaurant" target="_blank" class="restaurant  wow fadeInLeftBig" data-wow-delay="0.2s">
                <div class="restaurant-img-wrapper restaurant1" style="background-image: url('<?php echo get_field('restaurant_img1')?>')">
					<div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
				</div>
				<div class="restaurant-content">
					<img src="/wp-content/themes/brg/img/restaurant1.png" alt="beef & cake" class="restaurant-logo">
					<span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_1'][0]?></span>
				</div>
            </a>
        </div>
        <div class="swiper-slide">
			<a href="https://piccolino.brg.restaurant" target="_blank" class="restaurant wow fadeInUpBig" data-wow-delay="0.2s">
				<div class="restaurant-img-wrapper restaurant2" style="background-image: url('<?php echo get_field('restaurant_img2')?>')">
					<div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
				</div>
				<div class="restaurant-content">
					<img src="/wp-content/themes/brg/img/restaurant2.png" alt="piccolino" class="restaurant-logo">
					<span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_2'][0]?></span>
				</div>
                
            </a>
        </div>
        <div class="swiper-slide">
			<a href="https://catering.brg.restaurant" target="_blank" class="restaurant wow fadeInRightBig" data-wow-delay="0.2s">
				<div class="restaurant-img-wrapper restaurant3" style="background-image: url('<?php echo get_field('restaurant_img3')?>')">
					<div class="restaurant-button"><img src="/wp-content/themes/brg/svg/arrow.svg" alt=">"></div>
				</div>
				<div class="restaurant-content">
					<img src="/wp-content/themes/brg/img/restaurant3.png" alt="brg" class="restaurant-logo">
					<span class="restaurant-title"><?php echo $custom_fields['restaurant_restaurant_3'][0]?></span>
				</div>
			</a>
		</div>

                </div>
            </div>
            <div class="swiper-actions">
                <div class="swiper-pagination swiper-pagination-about" style="width: fit-content"></div>
            </div>
    </section>
</div>

<!-- <div class="slider-container">
<div class="slider">
  <div class="slide active-slide">1</div>
  <div class="slide next-slide">2</div>
  <div class="slide prev-slide">3</div>
</div>
  </div> -->

<div class="consulting-bg">
    <img src="/wp-content/themes/brg/svg/consulting-bg.svg" alt="|" class="bg">
    <section class="container consulting">
            <div class="consulting-top-main">
                <div class="consalting-content wow slideInLeft">
				<h2 class="h2"><?php echo $custom_fields['consulting_top_title'][0]?></h2>

                    <h3 class="consulting-title"><?php echo $custom_fields['consulting_top_subtitle'][0]?></h3>
                    <p class="consulting-text"><?php echo $custom_fields['consulting_top_text'][0]?></p>
                        <a href="<?= strpos($url, '/en') !== false ? '/consulting-en' : '/consulting'; ?>" class="action-button"><?php echo $custom_fields['consulting_top_button'][0]?></a>
                </div>
				<img src="<?php echo get_field('consulting_top_image')?>" alt="photo" class="img wow slideInRight">

            </div>
    </section>
</div>

<section class="franchising-bg">
    <div class="container franchising wow fadeInUpBig">
        <div class="franchising-heading">
            <p class="franchising-subtitile"><?php echo get_field('franchising_subtitle')?></p>
            <h2 class="h2"><?php echo get_field('franchising_title')?></h2>
        </div>
        <div class="franchising-list">
            <div class="franchising-item">
            <div class="franchising-item-top">
                <img src="/wp-content/themes/brg/img/franchising1.png" alt="picture">
                <strong class="franchising-item-title"><?php echo get_field('franchising_item1_title')?></strong>
            </div>
                <span class="franchising-stick"></span>
                <div class="franchising-item-right">
                <strong class="franchising-item-title franchising-item-title-mob"><?php echo get_field('franchising_item1_title')?></strong>
                    <ul class="franchising-item-list">
                        <li class="franchising-item-element"><?php echo get_field('franchising_item1_element1')?></li>
                        <li class="franchising-item-element"><?php echo get_field('franchising_item1_element2')?></li>
                    </ul>
                </div>
                <span class="franchising-open-button"><span></span><span></span></span>
            </div>
            <div class="franchising-item">
            <div class="franchising-item-top">
                <img src="/wp-content/themes/brg/img/franchising2.png" alt="picture">
                <strong class="franchising-item-title"><?php echo get_field('franchising_item2_title')?></strong>
</div>
<span class="franchising-stick"></span>
                <div class="franchising-item-right">
                <strong class="franchising-item-title franchising-item-title-mob"><?php echo get_field('franchising_item2_title')?></strong>
                <ul class="franchising-item-list">
                    <li class="franchising-item-element"><?php echo get_field('franchising_item2_element1')?></li>
                    <li class="franchising-item-element"><?php echo get_field('franchising_item2_element2')?></li>
                </ul>
                </div>
                <span class="franchising-open-button"><span></span><span></span></span>
                </div>
                <div class="franchising-item">
                <div class="franchising-item-top">
                <img src="/wp-content/themes/brg/img/franchising3.png" alt="picture">
                <strong class="franchising-item-title"><?php echo get_field('franchising_item3_title')?></strong>
</div>
<span class="franchising-stick"></span>
                <div class="franchising-item-right">
                <strong class="franchising-item-title franchising-item-title-mob"><?php echo get_field('franchising_item3_title')?></strong>
                <ul class="franchising-item-list">
                    <li class="franchising-item-element"><?php echo get_field('franchising_item3_element1')?></li>
                    <li class="franchising-item-element"><?php echo get_field('franchising_item3_element2')?></li>
                    <li class="franchising-item-element"><?php echo get_field('franchising_item3_element3')?></li>
                </ul>
                </div>
                <span class="franchising-open-button"><span></span><span></span></span>
            </div>
        </div>
        <a class="action-button" href="<?= strpos($url, '/en') !== false ? '/franchising-en' : '/franchising'; ?>"><?php echo get_field('franchising_button')?></a>
    </div>
</section>

<div class="partners1-bg">
    <img src="/wp-content/themes/brg/svg/partners1-bg.svg" alt="|" class="bg">
    <div class="consulting-buttom-wrapper">
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
</div>

<div class="partners2-bg">
    <img src="/wp-content/themes/brg/svg/partners2-bg.svg" alt="|" class="bg">
    <section class="container partners-wrapper">
        <div class="partners">
            <img src="<?php echo get_field('partners_image')?>" alt="photo" class="img wow slideInLeft">
            <div class="partners-content wow slideInRight">
                <h2 class="h2"><?php echo $custom_fields['partners_title'][0]?></h2>
                <p class="partners-text"><?php echo $custom_fields['partners_text'][0]?></p>
                <a href="<?= strpos($url, '/en') !== false ? '/partners-en' : 'partners'; ?>" class="action-button"><?= strpos($url, '/en') !== false ? 'Become a partner' : 'Стати партнером'; ?></a>
            </div>
        </div>
    </section>
</div>

<div class=" team wow fadeInUpBig">
    <img src="/wp-content/themes/brg/svg/main-team-pattern.svg" alt="" class="team-pattern">
    <h2 class="h2"><?php echo $custom_fields['team_title'][0]?></h2>
    <div class="team-wrapper container">
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

        <div class="swiper-button-prev swiper-button-prev-team1"><img src="/wp-content/themes/brg/svg/prev.svg" alt=">"></div>
        <div class="swiper-button-next swiper-button-next-team1"><img src="/wp-content/themes/brg/svg/next.svg" alt="<"></div>
    </div>
    </div>
            <a href="<?= strpos($url, '/en') !== false ? '/team-en' : '/team'; ?>" class="action-button"><?= strpos($url, '/en') !== false ? 'Show more' : 'Показати більше'; ?></a>
</div>
<div style="position: relative">
<img src="/wp-content/themes/brg/svg/main-news-pattern.svg" alt="" class="news-pattern">
<section class="container else wow fadeInUpBig">
    <h2 class="h2"><?php echo $custom_fields['events_title'][0]?></h2>
    <div class="else-content">
        <div class="else-tab-list">
            <button class="else-tab else-tab-active" data-tab="news"><?= strpos($url, '/en') !== false ? 'News' : 'Новини'; ?></button>
            <button class="else-tab" data-tab="events"><?= strpos($url, '/en') !== false ? 'Events' : 'Події'; ?></button>
            <?php if (!empty($adverts)) : ?>
                <button class="else-tab" data-tab="adverts"><?= strpos($url, '/en') !== false ? 'Adverts' : 'Оголошення'; ?></button>
            <?php endif; ?>
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
        </div>
      <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="action-button"><?= strpos($url, '/en') !== false ? 'All news' : 'Всі новини'; ?></a>
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
        </div>
        <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="action-button"><?= strpos($url, '/en') !== false ? 'All news' : 'Всі новини'; ?></a>
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
        </div>
        <a href="<?= strpos($url, '/en') !== false ? '/blog-en' : '/blog'; ?>" class="action-button"><?= strpos($url, '/en') !== false ? 'All news' : 'Всі новини'; ?></a>
        </div>
    </div>
    
</section>
          </div>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php
get_footer();
