<!--Template Name: Vacancies-->
<?php get_header(); ?>
    <section class="vacancies">
        <div class="container">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-transparent pl-0">
                    <li class="breadcrumb-item"><a href="/">Головна</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Вакансії</li>
                </ol>
            </nav>
            <h1 class="actions-page__title">
                <?php the_field('vacancies-title') ?>
            </h1>
            <div class="row position-relative mb-5">
                <?php
                $id = 0;
                $args = array(
                    'post_type' => 'vacancies',
                    'posts_per_page' => 99999,
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
                <?php while ($query->have_posts()):$query->the_post(); ?>
                    <div class="col-md-12 mb-4">
                        <div class="vacantion-item">
                            <div class="vacancies-title extra-bold mb-3">
                                <?php the_title()?>
                            </div>
                            <div class="vacancies-description midle mb-4">
                                <?php the_excerpt(); ?>
                            </div>
<!--                            <div class="collapse vacancies-description mb-4" id="post---><?php //the_ID(); ?><!--">-->
<!--                                --><?php //the_content()?>
<!--                            </div>-->
                            <button class="vacancies-btn vacantion-details mr-2" data-toggle="collapse" data-target="#post-<?php the_ID(); ?>" aria-expanded="false" aria-controls="post-<?php the_ID(); ?>">Детальніше</button>
                            <a href="https://www.work.ua/jobs/2815562/" class="vacancies-btn send-cv">Відправити резюме</a>
                            <div class="collapse vacancies-description mb-4 mt-4" id="post-<?php the_ID(); ?>">
                                 <?php the_content()?>
                            </div>
                            <?php
                               echo '<span class="hot-vacantion light">';
                               echo get_the_post_thumbnail();
                               echo '</span>';
//                            $posttags = get_tags();
//                            if( $posttags){
//                                foreach( $posttags as $tag ){
//                                    echo '<div class="hot-vacantion">Гаряча вакансія</div>';
//                                }
//                            }
                            ?>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata() ?>
            </div>
        </div>
        <div class="container-fluid bg-white mt-5">
            <div class="container">
                <h1 class="vacancies-page__title mb-4 pt-5">
                    <?php the_field('vacancies-footer-title') ?>
                </h1>
                <div class="row pb-5">
                    <?php
                    $id = 0;
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 99999,
                        'include' => 10,
                        'exclude' => 1,
                        'taxonomy' => 'category',
                        'category_name' => 'footer_right'
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
                    <?php while ($query->have_posts()):$query->the_post(); ?>
                        <div class="col-md-4 mt-4">
                            <p class="vacantions__office-title mt-3text-left"><?php the_title(); ?></p>
                            <div class="vacantions__office-details small-text light"><?php the_content() ?></div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata() ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>