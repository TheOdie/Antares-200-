<!-- Template Name: Photogallery-->

<?php get_header() ?>
    <section class="photogallery">
        <div class="container photogallery-page">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent pl-0">
                    <li class="breadcrumb-item"><a href="/">Головна</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Фотогалерея</li>
                </ol>
            </nav>
            </br>
            <h1 class="photogallery-page__title">
                НАША ФОТОГАЛЕРЕЯ
            </h1>
            <div class="row justify-content-center action-item__wrapper m-0">
                    <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
                        <div class="w3-modal-content w3-animate-zoom m-auto">
                            <img id="img01" src="">
                        </div>
                    </div>
<!--                    <img src="/assets/images/zoom-in-1.png" alt="">-->

<!--                       --><?php //dynamic_sidebar('smartslider_area_1'); ?>
                        <?php
                        $args = array(
                            'post_type' => 'photogallery',
                            'posts_per_page' => 12,
                        );
                        $default_attr = array(
                            'class' => "photo-gallery__img",
                        );
                        $query = new WP_Query;
                        $my_posts = $query->query($args);
                        $max_num_pages = $query->max_num_pages;
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                        <div id="gallery-1" class="col-md-4 col-sm-6 col-xs-6 px-0" >
                            <div class="gallery-item">
                                <div class="gallery-icon">
                                  <?php the_post_thumbnail('', $default_attr); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        wp_reset_query()
                        ?>
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
            <!-- <pre><?php var_dump($query->query_vars); ?></pre> -->
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
<?php get_footer() ?>

<script>
    let galley = document.getElementById('gallery-1')
    document.addEventListener('click',function (e){
        if (e.target.className == 'photo-gallery__img wp-post-image') {
            let img = document.getElementById('img01')
            img.src = e.target.src;
            document.getElementById("modal01").style.display = "flex";
        }
    })
</script>