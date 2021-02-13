<?php get_header(); ?>
<section class="about-page">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-transparent pl-0">
                    <li class="breadcrumb-item"><a href="/">Головна</a></li>
                    <li class="breadcrumb-item"><a href="https://antares-2000.com.ua/action/">Акції</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?php the_title()?>
                    </li>
                </ol>
            </nav>

            <div class="about-page__preview action" style="background: url('<?php the_field('preview_picture') ?>')">

            </div>
            <div class="bg-white description-wrapper w-100">
                <div class="action-item-page__description midle">
                    <?php the_field('action-item__description') ?>
                </div>
                <div class="action-item__contacts">
                    <div class="row">
                        <div class="col-md-7">
                            <?php the_field('action-item__contacts') ?>
                        </div>
                        <div class="col-md-5 text-center">
                             <?php echo do_shortcode('[contact-form-7 id="693" title="single-action-page"]')?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?>
