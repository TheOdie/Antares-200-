<!--Template Name: Documents-->
<?php get_header(); ?>
<section class="documents">
		<div class="container">
				<nav aria-label="breadcrumb ">
						<ol class="breadcrumb bg-transparent pl-0">
								<li class="breadcrumb-item"><a href="/">Головна</a></li>
								<li class="breadcrumb-item active" aria-current="page">Документи</li>
						</ol>
				</nav>
				<h1 class="actions-page__title">
						<?php the_field('documents-title') ?>
				</h1>
				<ul class="document-nav nav nav-pills mb-5" id="pills-tab" role="tablist">
						<li class="document-nav-item nav-item change-tab" role="presentation">
								<a class="documents-navigation mr-3 active text-dark" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab"
									 aria-controls="pills-all-docs" aria-selected="true">Всі документи</a>
						</li>
						<li class="document-nav-item nav-item change-tab" role="presentation">
								<a class="documents-navigation mr-3 text-dark" id="pills-registration-tab" data-toggle="pill" href="#pills-registration" role="tab"
									 aria-controls="pills-registration" aria-selected="false">Свідоцтва про реєстрацію</a>
						</li>
						<li class="document-nav-item nav-item change-tab" role="presentation">
								<a class="documents-navigation mr-3 text-dark" id="pills-licenses-tab" data-toggle="pill" href="#pills-licenses" role="tab"
									 aria-controls="pills-licenses" aria-selected="false">Ліцензії</a>
						</li>
						<li class="document-nav-item nav-item change-tab" role="presentation">
								<a class="documents-navigation mr-3 text-dark" id="pills-permissions-tab" data-toggle="pill" href="#pills-permissions" role="tab"
									 aria-controls="pills-permissions" aria-selected="false">Дозволи</a>
						</li>
						<li class="document-nav-item nav-item change-tab" role="presentation">
								<a class="documents-navigation mr-3 text-dark" id="pills-certificates-tab" data-toggle="pill" href="#pills-certificates" role="tab"
									 aria-controls="pills-certificates" aria-selected="false">Посвідчення та довідки</a>
						</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
								<div class="row mb-5">
									 <?php
											$id = 0;
											$args = array(
													'post_type' => 'post',
													'posts_per_page' => 99999,
													'include' => 16,
													'exclude' => 1,
													'taxonomy' => 'category',
													'category_name' => 'douments-all'
											);
											$query = new WP_Query($args);
											$categories = get_categories($args);
											if ($categories) {
												 foreach ($categories as $cat) {
                          if ($cat->name != 'Документи(Ліцензії)') {
                            echo $cat->name;
                          }
												 }
											}
									 ?>
									 <?php if ($query->have_posts()) ?>
									 <?php while ($query->have_posts()):$query->the_post(); ?>
											 <div class="document-item col-md-3 mb-4">
													<?php the_post_thumbnail(''); ?>
											 </div>
									 <?php endwhile;
											wp_reset_postdata() ?>
								</div>
						</div>
						<div class="tab-pane fade" id="pills-registration" role="tabpanel" aria-labelledby="pills-registration-tab">
								<?php
											$id = 0;
											$args = array(
													'post_type' => 'post',
													'posts_per_page' => 99999,
													'include' => 16,
													'exclude' => 1,
													'taxonomy' => 'category',
													'category_name' => 'documents-registration'
											);
											$query = new WP_Query($args);
											$categories = get_categories($args);
											if ($categories) {
												 foreach ($categories as $cat) {
                          if ($cat->name != 'Документи(Ліцензії)') {
                            echo $cat->name;
                          }
												 }
											}
									 ?>
									 <?php if ($query->have_posts()) ?>
									 <?php while ($query->have_posts()):$query->the_post(); ?>
											 <div class="document-item col-md-3 mb-4">
													<?php the_post_thumbnail(''); ?>
											 </div>
									 <?php endwhile;
											wp_reset_postdata() ?>
						</div>
						<div class="tab-pane fade" id="pills-licenses" role="tabpanel" aria-labelledby="pills-licenses-tab">
								<div class="row mb-5">
										<?php
										$id = 0;
										$args = array(
												'post_type' => 'post',
												'posts_per_page' => 99999,
												'include' => 16,
												'exclude' => 1,
												'taxonomy' => 'category',
												'category_name' => 'douments-licenses'
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
												<div class="document-item col-md-3 mb-4">
														<?php the_post_thumbnail(''); ?>
												</div>
										<?php endwhile;
										wp_reset_postdata() ?>
								</div>
						</div>
						<div class="tab-pane fade" id="pills-permissions" role="tabpanel" aria-labelledby="pills-permissions-tab">
																<div class="row mb-5">
										<?php
										$id = 0;
										$args = array(
												'post_type' => 'post',
												'posts_per_page' => 99999,
												'include' => 16,
												'exclude' => 1,
												'taxonomy' => 'category',
												'category_name' => 'douments-permissions'
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
												<div class="document-item col-md-3 mb-4">
														<?php the_post_thumbnail(''); ?>
												</div>
										<?php endwhile;
										wp_reset_postdata() ?>
								</div>
						</div>
						<div class="tab-pane fade" id="pills-certificates" role="tabpanel" aria-labelledby="pills-certificates-tab">
																								<div class="row mb-5">
										<?php
										$id = 0;
										$args = array(
												'post_type' => 'post',
												'posts_per_page' => 99999,
												'include' => 16,
												'exclude' => 1,
												'taxonomy' => 'category',
												'category_name' => 'douments-certificates'
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
												<div class="document-item col-md-3 mb-4">
														<?php the_post_thumbnail(''); ?>
												</div>
										<?php endwhile;
										wp_reset_postdata() ?>
								</div>
						</div>
						</div>
				</div>
		</div>
</section>
<?php get_footer() ?>
