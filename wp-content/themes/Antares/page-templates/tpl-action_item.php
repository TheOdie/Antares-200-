<!--Template Name: Action Item Pagew-->
<?php get_header(); ?>
<section class="about-page">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-transparent pl-0">
                    <li class="breadcrumb-item"><a href="/">Головна</a></li>
                    <li class="breadcrumb-item"><a href="/">Акції</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Літні знижки від приватної охорони
                        "Антарес-2000"
                    </li>
                </ol>
            </nav>

            <div class="about-page__preview" style="background: url('<?php the_field('preview_picture') ?>')">
                <h1 class="action-item-page__title position-relative">
                    <?php the_field('preview-header') ?>
                </h1>
                <div class="action-alert__wrapper">
                    <span class="action-alert action-item__alert">
                    АКЦІЯ
                </span>
                    <span>
                        <?php the_field('preview-date') ?>
                    </span>
                </div>
                <div class="d-flex position-relative">
                    <div class="image-owerlay">

                    </div>
                </div>
            </div>
            <div class="bg-white description-wrapper">
                <div class="action-item-page__description">
                    <?php the_field('action-item__description') ?>
                </div>
                <div class="action-item__contacts">
                    <div class="row">
                        <div class="col-md-7">
                            <?php the_field('action-item__contacts') ?>
                        </div>
                        <div class="col-md-5 text-center">
                            <input type="text" placeholder="Ваше ім'я" class="action-item__contacts_input">
                            <input type="text" placeholder="Номер телефону" class="action-item__contacts_input mb-3">
                            <button class="btn action-item__contacts_button">Залишити заявку</button>
                            <small class="personal-data text-grey">Натискаючи кнопку, я даю згоду на обробку
                                <a href="#" class="personal-data__link text-grey">Персональних данних</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>
