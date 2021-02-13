<?php
/**
 * Created by PhpStorm.
 * User: Maks
 * Date: 22.07.2020
 * Time: 13:29
 */

$default_attr = array(
  'class'=> 'posts-image',
);

add_action('wp_enqueue_scripts','main_styles');
add_action('wp_footer','scripts_theme');
//add_action('after_setup_theme','register_menu');

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );

// если надо подкоючить еще какой-то файл стилей,скопируй wp_enqueue_style и прошипи путь к стилю

function main_styles(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('text',get_template_directory_uri().'/assets/css/main_styles.css');
    wp_enqueue_style('variables',get_template_directory_uri().'/assets/css/variables.css');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap/bootstrap.min.css');
    wp_enqueue_style('slick',get_template_directory_uri().'/assets/slick/slick.css');
    wp_enqueue_style('font1',get_template_directory_uri().'/fonts/Gilroy-ExtraBold.ttf');
    wp_enqueue_style('font2',get_template_directory_uri().'/fonts/Gilroy-Light.ttf');
    wp_enqueue_style('about-us-page',get_template_directory_uri().'/assets/css/inner-pages/about_us_page.css');
    wp_enqueue_style('all-action-page',get_template_directory_uri().'/assets/css/inner-pages/actions.css');
    wp_enqueue_style('action-item-page',get_template_directory_uri().'/assets/css/inner-pages/action-item.css');
    wp_enqueue_style('news-page',get_template_directory_uri().'/assets/css/inner-pages/all-new-page.css');
    wp_enqueue_style('single-news',get_template_directory_uri().'/assets/css/inner-pages/news-item.css');
    wp_enqueue_style('vacancies',get_template_directory_uri().'/assets/css/inner-pages/vacancies.css');
    wp_enqueue_style('documents',get_template_directory_uri().'/assets/css/inner-pages/documents.css');
    wp_enqueue_style('contacts',get_template_directory_uri().'/assets/css/inner-pages/contacts.css');
    wp_enqueue_style('photogallery',get_template_directory_uri().'/assets/css/inner-pages/photogallery.css');
    wp_enqueue_style('service',get_template_directory_uri().'/assets/css/inner-pages/single-service.css');

}
function scripts_theme(){
    wp_enqueue_script('jquery',get_template_directory_uri().'/assets/js/jquery.js');
    wp_enqueue_script('bootstrap_script',get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('slick_scripts',get_template_directory_uri().'/assets/slick/slick.min.js');
    wp_enqueue_script('script',get_template_directory_uri().'/assets/js/script.js');

}
//function register_menu(){
//    register_nav_menu( 'top', 'header-menu');
//}
add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'top-left' => 'Меню слева',
        'top-right' => 'Меню справа'
    ] );
} );
//add_theme_support('post-thumbnails');
add_action('init', 'my_custom_init');

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'secondary') {
        $classes[] = 'list-inline-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

require_once('wp_bootstrap_navwalker.php');

function my_custom_init(){
    register_post_type('services', array(
        'labels'             => array(
            'name'               => 'Услуги', // Основное название типа записи
            'singular_name'      => 'Услуга', // отдельное название записи типа Book
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новую услугу',
            'edit_item'          => 'Редактировать услугу',
            'new_item'           => 'Новая услуга',
            'view_item'          => 'Посмотреть услугу',
            'search_items'       => 'Найти услугу',
            'not_found'          =>  'Услуг не найдено',
            'not_found_in_trash' => 'В корзине услуг не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Услуги'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
    register_post_type('photogallery', array(
        'labels'             => array(
            'name'               => 'Фотография', // Основное название типа записи
            'singular_name'      => 'Фотография', // отдельное название записи типа Book
            'add_new'            => 'Добавить новую фотографию',
            'add_new_item'       => 'Добавить новую фотографию',
            'edit_item'          => 'Редактировать фотографию',
            'new_item'           => 'Новая фотография',
            'view_item'          => 'Посмотреть фотографию',
            'search_items'       => 'Найти фотографию',
            'not_found'          =>  'Фотографий не найдено',
            'not_found_in_trash' => 'В корзине фотографий не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Фотографии'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
    register_post_type('news', array(
        'labels'             => array(
            'name'               => 'Новости', // Основное название типа записи
            'singular_name'      => 'Новость', // отдельное название записи типа Book
            'add_new'            => 'Добавить новость',
            'add_new_item'       => 'Добавить новую новость',
            'edit_item'          => 'Редактировать новость',
            'new_item'           => 'Новость',
            'view_item'          => 'Посмотреть новость',
            'search_items'       => 'Найти новость',
            'not_found'          => 'Новость не найдено',
            'not_found_in_trash' => 'В корзине новостей не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Новости'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
    register_post_type('actions', array(
        'labels'             => array(
            'name'               => 'Акции', // Основное название типа записи
            'singular_name'      => 'Акция', // отдельное название записи типа Book
            'add_new'            => 'Добавить акцию',
            'add_new_item'       => 'Добавить акцию',
            'edit_item'          => 'Редактировать акцию',
            'new_item'           => 'Акция',
            'view_item'          => 'Посмотреть акцию',
            'search_items'       => 'Найти акцию',
            'not_found'          => 'Акции не найдено',
            'not_found_in_trash' => 'В корзине акций не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Акции'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
    ) );
	 register_post_type('vacancies', array(
			 'labels'             => array(
					 'name'               => 'Вакансии', // Основное название типа записи
					 'singular_name'      => 'Вакансия', // отдельное название записи типа Book
					 'add_new'            => 'Добавить вакансию',
					 'add_new_item'       => 'Добавить вакансию',
					 'edit_item'          => 'Редактировать вакансию',
					 'new_item'           => 'Вакансии',
					 'view_item'          => 'Посмотреть вакансии',
					 'search_items'       => 'Найти вакансию',
					 'not_found'          => 'Вакансий не найдено',
					 'not_found_in_trash' => 'В корзине вакансий не найдено',
					 'parent_item_colon'  => '',
					 'menu_name'          => 'Вакансии'
			 
			 ),
			 'public'             => true,
			 'publicly_queryable' => true,
			 'show_ui'            => true,
			 'show_in_menu'       => true,
			 'query_var'          => true,
			 'rewrite'            => true,
			 'capability_type'    => 'post',
			 'has_archive'        => false,
			 'hierarchical'       => false,
			 'menu_position'      => null,
			 'supports'           => array('title','editor','author','thumbnail','excerpt','comments'),
				 'taxonomies' => array('post_tag')
	 ) );
}

//  ============================= ACTIONS PAGE PAGINATION ==========================//
  

	 function misha_my_load_more_scripts()
	 {
			global $wp_query;

//			wp_enqueue_script('jquery');

			wp_register_script('my_loadmore', get_stylesheet_directory_uri() . '/assets/js/pagination.js', array('jquery'));

			wp_localize_script('my_loadmore', 'misha_loadmore_params', array(
					'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
					'posts' => 'actions', // everything about your loop is here
					'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
					'max_page' => $wp_query->max_num_pages,
			));

			wp_enqueue_script('my_loadmore');
	 }

	 add_action('wp_enqueue_scripts', 'misha_my_load_more_scripts');

	 function misha_loadmore_ajax_handler()
	 {
			$args = unserialize(stripslashes($_POST['query']));
			$args['paged'] = $_POST['page'];
            $default_attr = array(
             'class' => "action-image w-100 h-100",
         );
            $attr_for_gallery = array(
                    'class' => 'photo-gallery__img'
            );
            
            query_posts($args);
			// it is always better to use WP_Query but not here

			if ( have_posts()):
             global $wp_query;
             if ($wp_query->post->post_type == 'actions') {
                while (have_posts()):
                     the_post();
                     echo '<div class="container">';
                     echo '<div class="row">';
                     echo '<div class="wrapper rounded-right d-flex mt-2 mb-2 bg-white">';
                     echo '<div class="action-image-wrapper col-md-4 col-lg-4 col-sm-12 col-xs-12  pl-0">';
                     echo '<span class="action-alert">';
                     echo 'АКЦІЯ';
                     echo '</span>';
                     the_post_thumbnail('', $default_attr);
                     echo '</div>';
                     echo '<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 p-4">';
                     echo '<div class="extra-bold action-item__title ">' . get_the_title() . '</div>';
                     echo '<div class="small-text midle pb-3">' . get_the_content() . '</div>';
                     echo '<div class="small-text light d-flex justify-content-between action__button-wrapper">';
                     echo '<div class="action-date">';
                     echo the_field('preview-date');
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
                endwhile;
                die; // here we exit the script and even no wp_reset_query() required!
             } endif;
				global $wp_query;
             if ($wp_query->post->post_type == 'news') {
                    while (have_posts()):
                    the_post();
    
                    echo '<div class="container">';
                    echo '<div class="row">';
                    echo '<div class="wrapper rounded-right d-flex mt-2 mb-2 bg-white">';
                    echo '<div class="col-md-4 action-image-wrapper pl-0">';
                    the_post_thumbnail('', $default_attr);
                    echo '</div>';
                    echo '<div class="col-md-7 p-4">';
                    echo '<div class="extra-bold action-item__title ">' . get_the_title() . '</div>';
                    echo '<div class="small-text midle">' . get_the_content() . '</div>';
                    echo '<div class="small-text light d-flex justify-content-between action__button-wrapper">';
                    echo '<p class="antares-get-getails">';
    //                    echo '<a href="'. the_permalink().'" class="yellow-text"><span class="yellow-text">Детальніше</span></a>';
                    ?>
                    <a href="<?php the_permalink()?>" class="yellow-text"><span class="yellow-text">Детальніше</span></a>
                                 <?php echo '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    endwhile;
                    die;
                     }
             if($wp_query->post->post_type == 'photogallery') {
                 while (have_posts()):
                     the_post();
                    echo ' <div id="modal01" class="w3-modal" onclick="this.style.display=\'none\'">';
                    echo '<div class="w3-modal-content w3-animate-zoom m-auto">';
                    echo '<img id="img01" src="">';
                     echo ' </div>';
                     echo ' </div>';
                     echo ' </div>';
                     echo '<div id="gallery-1" class="col-md-4 px-0" >';
                     echo '<div class="gallery-item">';
                     echo '<div class="gallery-icon">';
                     the_post_thumbnail('', $attr_for_gallery);
                     echo ' </div>';
                     echo ' </div>';
                     echo ' </div>';
                 endwhile;
                 die;
             }

	 }
	 add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
	 add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}
//    ==============================================================================================


