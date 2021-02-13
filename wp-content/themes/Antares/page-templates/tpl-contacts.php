<!--Template Name: Contacts-->
<?php get_header(); ?>
<section class="contacts">
    <div class="container pb-5">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-transparent pl-0">
                <li class="breadcrumb-item"><a href="/">Головна</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакти</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between contacts-page__title_wrapper">
            <h1 class="actions-page__title">
                <?php the_field('contacts-title')?>
            </h1>
            <a href="#write-us" class="contacts__contact-us_btn text-dark midle">
                Напишіть нам
            </a>
        </div>
        <div class="row">
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
                <div class="col-md-5 mt-4">
                    <p class="contacts-page__office-title extra-bold mt-3 text-left"><?php the_title(); ?></p>
                    <div class="office-details small-text midle"><?php the_content() ?></div>
                </div>
                <div class="col-md-7 mb-5 contacts-page__map">
                    <?php the_post_thumbnail('');?>
                </div>
            <?php endwhile;
            wp_reset_postdata() ?>
        </div>
    </div>
    <div class="container-fluid bg-white text-center p-0">
        <div class="container text-center">
            <h1 class="contacts-page__title pt-4">
                <?php the_field('contacts-field-title')?>
            </h1>
<!--            <form class="contacts__contacts-form" id="write-us">-->
<!--                <div class="d-flex justify-content-center">-->
<!--                    <input class="contacts__contacts_input mr-2" type="text" placeholder="Ваше ім'я">-->
<!--                    <input class="contacts__contacts_input" type="text" placeholder="Номер телефону">-->
<!--                </div>-->
<!--                <textarea class="contacts__contacts_text" placeholder="Текст повідомлення" name="" id=""></textarea>-->
<!--                <div class="d-flex justify-content-center">-->
<!--                    <div class="d-flex align-items-center">-->
<!--                        <button class="contacts__contacts_button mt-3" type="submit">Відправити</button>-->
<!--                        <small class="contacts__personal-data mt-2">Натискаючи кнопку, я даю згоду на-->
<!--                            обробку <a href="#" class="text-grey">Персональних данних</a></small>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </form>-->
            <?php echo do_shortcode('[contact-form-7 id="692" title="contacts-page"]')?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
