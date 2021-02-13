<!--Template Name: Actions Page-->
<?php get_header(); ?>
<section class="actions-page">
    <div class="container">
        <div class="row">
            <div class="">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent pl-0">
                        <li class="breadcrumb-item"><a href="/">Головна</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Акції</li>
                    </ol>
                </nav>
                <h1 class="actions-page__title">
                    <?php the_field('actions-title') ?>
                </h1>
            </div>
             <?php
                    $type = 'actions';
                    $count_posts = wp_count_posts($type);
                    $published_posts = $count_posts->publish;
                    echo '<div id="actions-posts-count" class="d-none">' .$published_posts . '</div>';
             ?>
            
            <?php wp_reset_query() ?>
            <div class="action-item__wrapper">
                <?php
                $args = array(
                    'post_type' => 'actions',
                    'posts_per_page' => 2,
//                    'paged' => $current_page,

                );
                $default_attr = array(
                    'class' => "action-image",
                );
                $query = new WP_Query;
                $my_posts = $query->query($args);
                $max_num_pages = $query->max_num_pages;
	 
                 while ($query->have_posts()) {
                    $query->the_post();
                    echo '<div class="container">';
                    echo '<div class="row">';
                    echo '<div class="wrapper rounded-right d-flex  mt-2 mb-2 bg-white">';
                    echo '<div class="action-image-wrapper col-md-4 col-lg-4 col-sm-12 col-xs-12">';
                    the_post_thumbnail('', $default_attr);
                    echo '</div>';
                    echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 p-4">';
                    echo '<div class="extra-bold action-item__title ">' . get_the_title() . '</div>';
                    echo '<div class="small-text midle pb-3">' . get_the_content() . '</div>';
                    echo '<div class="small-text light d-flex justify-content-between action__button-wrapper">';
                    echo '<div class="action-date">';
                    echo   the_field('preview-date');
                    echo '</div>';
                    echo '<div class="action__get-details">';
                    ?>
                    <a href="<?php the_permalink()?>" class="text-black"><span class="yellow-black">Детальніше</span></a>
                    <?php
                    echo '</div>';
//                                    Если акция завершилась,то взять кнопку снизу

//                                    echo '<div class="action-date_over">';
//                                     echo 'Акція завершена';
//                                    echo '</div>';


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
        <div class="pagination custom-pagination align-items-center justify-content-center mb-4">
            <nav aria-label="Page navigation example">
                <ul class="pagination align-items-center">
                    <li class="page-numbers prev">
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
                    <li class="pagination-page ">
                            <?php // пагинация для произвольного запроса
                                 $big = 999999999; // уникальное число

                                 echo paginate_links( array(
                                         'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                         'current' => 0 ,
                                         'total'   => $max_num_pages,
                                         'show_all'           => true,
                                         'prev_next'          => false,
                                 ) );
                            ?>
                        
                    </li>
                    <li class="page-numbers next">
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
<!--        <div class="custom-pagination">-->
<!--            <a class="prev page-numbers" href="#">--><?php //_e( '<' )?><!--</a>-->
<!--					--><?php //// пагинация для произвольного запроса
//						 $big = 999999999; // уникальное число
//
//						 echo paginate_links( array(
//								 'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
//								 'current' => 0 ,
//								 'total'   => $max_num_pages,
//								 'show_all'           => true,
//								 'prev_next'          => false,
//						 ) );
//					?>
<!---->
<!--            <a class="next page-numbers" href="#">--><?php //_e( '>' )?><!--</a>-->
<!--        </div>-->
			 <?php if (  $max_num_pages > 1 ) : ?>
           <script>
               var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
               var true_posts = '<?php echo serialize($query->query_vars); ?>';
               var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
               var max_pages = '<?php echo $max_num_pages ?>';

           </script>
	 
			 <?php endif; ?>

        
    
    </div>
</section>

<?php get_footer(); ?>

