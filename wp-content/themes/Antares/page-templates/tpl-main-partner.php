<!--Template Name: Main Partner Page-->
<?php get_header(); ?>
<section class="services-page">
			<div class="container">
				 <div class="row">
						<div class="col-md-7 ">
							 <h1 class="services-page__title position-relative text-dark">
									<?php the_field('main-partner__title')?>
							 </h1>
							 <p class="services-page__subtitle text-dark light">
									<?php the_field('main-partner__subtitle')?>
							 </p>
						</div>
						<div class="col-md-5 d-flex justify-content-center align-items-center">
							 <img class="services-page__tematick-img" src="<?php the_field('main-partner__logo')?>" alt="">
						</div>
				 </div>
			</div>
</section>
<section>
	 <div class="container">
			<div class="row">
				 <div class="services-page__description-title text-center w-100">
						<?php the_field('main-partner__desc-title')?>
				 </div>
				 <div class="col-md-12 col-sm-12 col-xs-12">
						<div class=" midle">
							 <?php the_field('main-partner__description')?>
						</div>
				 </div>
			</div>
	 </div>
</section>
<?php get_footer(); ?>