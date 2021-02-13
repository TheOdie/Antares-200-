<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 mt-5">
                <?php
                $id = 0;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 99999,
                    'include' => 9,
                    'exclude' => 1,
                    'taxonomy' => 'category',
                    'category_name' => 'footer_left'
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
                        <p class="extra-bold middle-text mt-3 text-white text-left"><?php the_title(); ?></p>
                        <div class="footer-services small-text light"><?php the_content() ?></div>
                <?php endwhile;
                wp_reset_postdata() ?>
            </div>
            <div class="col-md-6 col-sm-4 d-flex flex-column align-items-center mt-5">
                <div class="footer-logo mt-5 mb-4">
                    <?php the_custom_logo($blog_id); ?>
                </div>
<!--                <img class="mt-5 mb-4" src="--><?php //the_field('footer_logo'); ?><!--" alt="">-->
                <p class="text-white extra-bold mb-5">Працюємо для вас з <span class="yellow-text">1999</span> року</p>
                <div class="log-in-footer-wrapper">
                    <a href="#" class="log-in-link">
                        <div class="log-in-footer text-white d-flex justify-content-between">
                            <span class="light">Мій кабінет</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 mt-5">
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
                    <p class="extra-bold middle-text mt-3 text-white text-left"><?php the_title(); ?></p>
                    <div class="footer-services small-text light"><?php the_content() ?></div>
                <?php endwhile;
                wp_reset_postdata() ?>
            </div>
        </div>
    </div>
    <section class="copy">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 text-left light">
                    Copyright © 2020. ТОВ «Антарес-2000» — Всі права захищені
                </div>
                <div class="col-md-6 col-sm-6 text-right light" style="padding-right: 2.3rem ">
                    Розробка сайту — React Logic
                </div>
            </div>
        </div>
    </section>
    <?php wp_footer(); ?>

</footer>
</html>