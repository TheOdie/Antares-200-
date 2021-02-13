<!--Template Name: News  Page-->
<?php get_header(); ?>
<section class="actions-page">
    <div class="container">
       <div class="row">
            <div class="">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="/">Головна</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Новини</li>
                    </ol>
                </nav>
                </br>
                <h1 class="actions-page__title">
                    <?php the_field('news_title')?>
                </h1>
            </div>

            <?php wp_reset_query() ?>
            <div class="action-item__wrapper">
                <?php
                $id = 0;
                $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 4,
                );
                $default_attr = array(
                    'class' => "action-image w-100 h-100",
                );
                $query = new WP_Query;
                $my_posts = $query->query($args);
                while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="container">';
                        echo '<div class="row">';
                            echo '<div class="wrapper rounded-right d-flex mt-2 mb-2 bg-white">';
                                echo '<div class="col-md-4 pl-0">';
//                                the_post_thumbnail('', $default_attr);
                                echo '</div>';
                                echo '<div class="col-md-6 p-4">';
                                    echo '<div class="extra-bold action-item__title ">' . get_the_title() . '</div>';
                                        echo '<div class="small-text midle">' . the_content() . '</div>';
                                            echo '<div class="small-text midle d-flex justify-content-between action__button-wrapper">';
                                            echo '<p class="antares-get-getails">'
                                                . '<a href="'. the_permalink().'" class="yellow-text">
                                                    <span class="yellow-text">Дета___льніше</span>
                                                    </a>
                                                   </p>';
//                                            echo '<a href="'. the_permalink().'" class="yellow-text"><span class="yellow-text">Детальніше</span></a>';
/*                                            <a href="<?php the_permalink()?>" class="yellow-text-2"><span class="yellow-text extra-bold">Детальніше</span></a>*/
//                                <?php echo '</p>';
                                            echo '</div>';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
                wp_reset_query()
                ?>
            </div>

        </div>
        <div class="pagination align-items-center justify-content-center mb-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination align-items-center">
                    <li class="">
                        <a class="pagination-arrow mr-0 d-flex align-items-center justify-content-center" href="#" aria-label="Previous">
                            <svg class="arrow-left" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                                            c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                                            L143.492,221.863z"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="pagination-page "><a class="active" href="#">1</a></li>
                    <li class="pagination-page"><a class="" href="#">2</a></li>
                    <li class="pagination-page"><a class="" href="#">3</a></li>
                    <li class="">
                        <a class="pagination-arrow ml-0 d-flex align-items-center justify-content-center" href="#" aria-label="Next">
                            <svg class="arrow-right" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                                            c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                                            L143.492,221.863z"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>
<?php get_footer(); ?>
