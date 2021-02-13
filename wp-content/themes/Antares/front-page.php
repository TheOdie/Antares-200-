
<section class="first-screen" style="background: url('<?php the_field('background_img') ?>')">
	 <?php get_header(); ?>
    <div class="first-screen__inner">
        <div class="header-slogan">
            <h1 class="text-white big-text">
                <?php the_field('slogan') ?>
            </h1>
            <div class="text-white  midle header_subslogan">
                <?php the_field('slogan_small') ?>
            </div>
<!--            <button type="button" class="btn btn-warning midle header-consultation-btn">Безкоштовна консультація</button>-->
        </div>
        <div class="scroll-ico">
            <i class="scroll-ico__mouse"></i>
            <i class="scroll-ico__arrow"></i>
        </div>
    </div>
</section>

<section class="second-screen ">
    <div class="body-header text-center mb-5 extra-bold">
        НАШІ ПОСЛУГИ
    </div>
    <div class="container services">
        <div class="row m-0">
					 <?php
							$id = 0;
							$args = array(
								'post_type' => 'services',
								'posts_per_page' => 99999,
							);
							$ids = [1439, 1438, 1437];
							$query = new WP_Query;
							$my_posts = $query->query($args);
							while ($query->have_posts()) {
								 $query->the_post();
								 if(!in_array(get_the_ID(), $ids)) :
								 echo '<div class="col-md-4 col-sm-6 service-item">';
								 echo '<div class="card">';
								 echo "<div class='card-body d-flex flex-column justify-content-between align-items-center'>";
								 the_post_thumbnail('', $default_attr);
//                echo '<h5 class="card-title light">' . get_the_title() . '</h5>';
								 echo '<p class="light">' . the_content() . '</p>';
								 ?>
                  <a href="<?php the_permalink() ?>"
                     class="order-btn midle text-dark d-flex justify-content-center align-items-center">Детальніше</a>
								 <?php
								 echo '</div>';
								 echo '</div>';
								 echo '</div>';
								 endif;
							}
							wp_reset_query()
					 ?>
            <div class="col-md-8">
                <div class="consultation-card">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6 col-sm-5 col-xs-6 consultation-card__description">
                                <h4 class="text-white extra-bold pb-4"><?php the_field('free_consultation_title') ?></h4>
<!--                                <button class="consultation_btn midle ">Отримати консультацію</button>-->
                            </div>
                            <div class="col-md-6 col-sm-7 col-xs-6 text-center">
                                <img src="<?php the_field('free_consultation_img') ?>" alt="" class="pt-2">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="actions ">
    <div class="container-fluid actions-bg"
         style="background: url('<?php the_field('bgc-image') ?>');background-size: cover">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-12 col-sm-8">
                <h1 class="our_actions text-center extra-bold">
									 <?php the_field('our_actions'); ?>
                </h1>
							 <?php
									echo do_shortcode('[smartslider3 slider="3"]');
							 ?>
                <div class="d-flex justify-content-center">
                    <a class="get-details-btn actions text-white" href="https://antares-2000.com.ua/action/">Переглянути
                        всі акції</a>
                </div>

            </div>

        </div>
    </div>
</section>
<section class="about-antares ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 d-flex justify-content-center position-relative about-antares__block-img">
                <img src="<?php the_field('antares_img'); ?>" alt="">
            </div>
            <div class="col-md-6">
                <div class="body-header about-antares__subtitle text-left mb-3">
									 <?php the_field('antares_header'); ?>
                </div>
                <div class="midle">
									 <?php the_field('antares_content'); ?>
                </div>
            </div>
        </div>
        <div class="about-antares__footer bg-white rounded">
            <div class="px-4 py-2">
                <div class="row  about-antares__content-wrapper m-0">
									 <?php wp_reset_query() ?>
									 <?php
											$id = 0;
											$args = array(
												'post_type' => 'post',
												'posts_per_page' => 4,
												'include' => 8,
												'exclude' => '',
												'taxonomy' => 'category',
												'category_name' => 'antares_about'
											);
											$query = new WP_Query;
											$my_posts = $query->query($args);
											while ($query->have_posts()) {
												 $query->the_post();
												 echo '<div class="col-md-3 col-sm-6 text-center py-5 px-2">';
												 echo '<h5 class="about-antares__title yellow-text extra-bold ">' . get_the_title() . '</h5>';
												 echo '<div class="about-antares__content small-text midle">' . get_the_content() . '</div>';
												 echo '</div>';
											}
											wp_reset_query()
									 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container documents-block">
        <div class="body-header text-center mb-5">
					 <?php the_field('antares_documents'); ?>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 d-flex flex-column">
                <button onclick="openCity(event, 'svidotstva')"
                        class="btn tablinks active antares__documents_btn mb-3 midle text-dark">Свідотства
                </button>
                <button onclick="openCity(event, 'licence')"
                        class="btn tablinks antares__documents_btn mb-3 midle text-dark">Ліцензії
                </button>
                <button onclick="openCity(event, 'dozvoli')"
                        class="btn tablinks antares__documents_btn mb-3 midle text-dark">Дозволи
                </button>
                <button onclick="openCity(event, 'posvidchennya')"
                        class="btn tablinks antares__documents_btn mb-3 midle text-dark">Посвідчення
                </button>
            </div>
            <div class="col-md-9 col-sm-6">
                <div class=" tabcontent position-relative" id="svidotstva" style="opacity: 1">
                    <div class="position-absolute my-position">
                        <div class="first">
                            <div>
                                <img class="document" src="<?php the_field('fisrst_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('third_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('fisrst_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('fisrst_img'); ?>" alt="1">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tabcontent position-relative" id="licence">
                    <div class="position-absolute my-position">
                        <div class="second">

                            <div>
                                <img class="document" src="<?php the_field('second_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('second_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('second_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('second_img'); ?>" alt="1">
                            </div>

                        </div>

                    </div>
                </div>
                <div class=" tabcontent position-relative" id="dozvoli">
                    <div class="position-absolute my-position">
                        <div class="third">

                            <div>
                                <img class="document" src="<?php the_field('third_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('third_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('third_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('third_img'); ?>" alt="1">
                            </div>

                        </div>
                    </div>
                </div class="position-absolute">
                <div class="tabcontent position-relative" id="posvidchennya">
                    <div class="position-absolute my-position">
                        <div class="fourth">

                            <div>
                                <img class="document" src="<?php the_field('fisrst_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('fisrst_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('fisrst_img'); ?>" alt="1">
                            </div>
                            <div>
                                <img class="document" src="<?php the_field('fisrst_img'); ?>" alt="1">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center documents-block">
        <a class="get-details-btn documents-details text-dark" style="margin-top: 140px;"
           href="https://antares-2000.com.ua/documents/">Всі
            документи
        </a>
    </div>
</section>
<section class="news-and-posts bg-white pb-5">
	 <?php
			$id = 0;
			$args = array(
				'post_type' => 'news',
				'posts_per_page' => 3,
			);
			$query = new WP_Query($args);
			$categories = get_categories($args);
			if ($categories) {
				 foreach ($categories as $cat) {
//            echo $cat->name;
				 }
			}
	 ?>
	 <?php if ($query->have_posts()) ?>
    <div class="body-header text-center mb-5 pt-5">НОВИНИ ТА СТАТТІ</div>
    <div class="container">
        <div class="row ">
					 <?php while ($query->have_posts()):$query->the_post(); ?>
               <div class="col-md-4 col-sm-4 text-left">
                   <a href="#" class="text-center front-page-news">
											<?php the_post_thumbnail('widgetfull'); ?>
                   </a>
                   <a href="<?php the_permalink() ?>"
                      class="news-item__title middle-text text-left d-block my-3 pr-3 extra-bold"><?php the_title(); ?></a>
                   <div class="about-antares__content small-text text-left midle "><?php the_content() ?></div>
               </div>
					 <?php endwhile;
							wp_reset_postdata() ?>
        </div>

    </div>
    <div class="d-flex justify-content-center">
        <a class="get-details-btn news-details text-dark"
           href="https://antares-2000.com.ua/%d0%b3%d0%bb%d0%b0%d0%b2%d0%bd%d0%b0%d1%8f/news/">Всі статті</a>
    </div>
</section>
<section class="partners">
	 <?php
			$id = 0;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 99999,
				'include' => '',
				'exclude' => 1,
				'taxonomy' => 'category',
				'category_name' => 'partners'
			);
			$query = new WP_Query($args);
			$categories = get_categories($args);
			if ($categories) {
				 foreach ($categories as $cat) {
//            echo $cat->name;
				 }
			}

	 ?>
	 <?php wp_reset_postdata() ?>
    <div class="body-header text-center mb-3">
        ВІДЕО ПРО НАС
    </div>
    <div class="video-preview d-flex justify-content-center mw-100 d-sm-w-100 d-sm-mw-100"
         style="background: url('<?php the_field('video_preview') ?>')">
        <button type="button" class="video-preview__btn" data-toggle="modal" data-target="#exampleModal">
            <svg class="video-preview__btn-play" version="1.1" id="Capa_1" xmlns="https://www.w3.org/2000/svg" x="0px"
                 y="0px"
                 viewBox="0 0 477.886 477.886" style="enable-background:new 0 0 477.886 477.886;"
                 xml:space="preserve">
												<g>
                                                    <g>
                                                        <path d="M476.091,231.332c-1.654-3.318-4.343-6.008-7.662-7.662L24.695,1.804C16.264-2.41,6.013,1.01,1.8,9.442
																		c-1.185,2.371-1.801,4.986-1.8,7.637v443.733c-0.004,9.426,7.633,17.07,17.059,17.075c2.651,0.001,5.266-0.615,7.637-1.8
																		L468.429,254.22C476.865,250.015,480.295,239.768,476.091,231.332z"/>
                                                    </g>
                                                </g>
								</svg>
        </button>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
							 <?php
									echo wp_video_shortcode([
										'src' => 'https://antares-2000.com.ua/wp-content/uploads/2020/09/video-about.mp4',
										'poster' => '',
										'loop' => '',
										'autoplay' => 'false',
										'preload' => 'metadata',
										'height' => 550,
										'width' => empty($content_width) ? 930 : $content_width,
										'class' => 'video-about', // Атрибут 'class' для элемента `<video>`. По умолчанию 'wp-video-shortcode'
										'id' => '', // Атрибут 'id' для элемента `<video>`. По умолчанию 'video-{$post_id}-{$instances}'.
									]);
							 ?>
            </div>
        </div>
    </div>

    <div class="body-header text-center mb-3">
        НАШІ ПАРТНЕРИ
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="partners__image text-center" >
                <a href=" https://antares-2000.com.ua/main-partner-page/">
                    <img src="<?php the_field('main-partner')?>" alt="" style="max-height: 50px;max-width: 75px">
                </a>
            </div>
           <?php if ($query->have_posts()) ?>
            <?php while ($query->have_posts()):$query->the_post(); ?>
               <div class="partners__image text-center ">
                  <?php the_post_thumbnail('widgetfull'); ?>
               </div>
           <?php endwhile;
           wp_reset_postdata() ?>
        </div>
    </div>
</section>
<section class="contacts  bg-white" style="background:url(<?php the_field('map_contacts'); ?>) ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col">
                <div class="contacts-form">
                    <div class="contacts-form__title extra-bold">
											 <?php the_field('contacts-form__title'); ?>
                    </div>
                    <div class="contacts-form__inner">
                        <div class="contacts-form__main-office">
													 <?php the_field('contacts-form__main-office'); ?>
                        </div>
                        <div class="contacts-form__sales">
													 <?php the_field('contacts-form__sales'); ?>
                        </div>
                        <div class="contacts-form__security">
													 <?php the_field('contacts-form__security'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	 <?php
			$type = 'actions';
			$count_posts = wp_count_posts($type);
			$published_posts = $count_posts->publish;
			echo '<div id="actions-posts-count" class="d-none">' . $published_posts . '</div>';
	 ?>
</section>
<?php get_footer(); ?>

