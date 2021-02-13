<?php get_header()?>
    <section class="about-page">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb ">
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="/">Головна</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="https://antares-2000.com.ua/news/">Новини</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php the_title()?></li>
                    </ol>
                </nav>
                <div class="about-page__preview" style="background: url('<?php the_field('news-item-background')?>')">
                    <h1 class="news-page-item__title">
                        <?php the_field('news-item-title')?>
                    </h1>
                    <div class="article__wrapper">
                    <span class="article-alert article-item__alert">
                    СТАТТІ
                </span>
                        <span class="midle">
                        <?php the_field('news-item-date') ?>
                    </span>
                    </div>
                    <div class="d-flex position-relative">
                        <div class="image-owerlay">

                        </div>
                    </div>
                </div>
                <div class="bg-white description-wrapper">
                    <div class="midle" style="font-size: 22px;">
                        <?php the_field('news-item-description-title')?>
                    </div>
                    <div class="about-page__main-content midle">
                        <?php the_field('news-item-description')?>
                        <div class="news-author light text-grey mt-5">
                             <?php the_field('news-author')?>
                        </div>
                    </div>
              
                </div>

            </div>
        </div>
    </section>
<?php get_footer()?>