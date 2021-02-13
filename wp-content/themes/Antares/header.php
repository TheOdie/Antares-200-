<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Antares-2000</title>
    <link href="./assets/images/cropped-logo.ico" rel="icon" type="image/x-icon" />
  </head>
<body>
<header class="h-auto" >
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <a href="https://antares-2000.com.ua/actions/832/" class="col-12 text-center mt-2 mb-2">
                   <span class="pr-2">Акція!</span> Комплект сигналізації + Монтаж у подарунок
                </a>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg w-100 pt-0 pb-0">
        <?php the_custom_logo($blog_id); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php wp_nav_menu(array(
            'theme_location' => 'top-left',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse navbar-left',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav  align-items-center',
            'menu_id' => 'header-menu-left',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker()
        )); ?>
        <?php wp_nav_menu(array(
            'theme_location' => 'telephones',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse navbar-left menu-phones ml-3',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav flex-wrap  align-items-center',
            'menu_id' => '',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker()
        )); ?>
        <div class="header-rigth-menu">
            <?php wp_nav_menu(array(
                'theme_location' => 'top-right',
                'menu' => 'test',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse header-right',
                'container_id' => 'navbarSupportedContent',
                'menu_class' => 'navbar-nav',
                'menu_id' => '',
                'echo' => true,
//                    'fallback_cb'     => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 0,
                'add_li_class' => 'your-class-name1 your-class-name-2',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker()
            )); ?>

        </div>
        <?php get_search_form(); ?>

                <li class="nav-item">
                    <a class="nav-link text-white small-text navbar-account" href="#" tabindex="-1" aria-disabled="true">
                        <span class="">
                            Мій кабінет
                        </span>
                    </a>
                </li>
    </nav>
    <?php wp_head(); ?>
</header>





