<!--Template Name: About Us Page-->
<?php get_header(); ?>
<section class="about-page">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb ">
                <ol class="breadcrumb bg-transparent pl-0">
                    <li class="breadcrumb-item"><a href="/">Головна</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Про нас </li>
                </ol>
            </nav>

           <div class="col-md-12 col-sm-12 col-xs-12 about-page__preview" style="background: url('<?php the_field('preview_photo')?>')">
                <h1 class="col-md-12 col-sm-6 col-xs-3 about-page__title">
                    <?php the_field('about_us_title')?>
                </h1>
           </div>
            <div class="col-md-12 col-sm-12 col-xs-12 bg-white description-wrapper">
                <div class="">
                    <?php the_field('about_us_title_after')?>
                </div>
                <div class="about-page__main-content">
                    <?php the_field('about_us_text')?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>

