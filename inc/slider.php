<?php
	$argsSlider = array(
		'post_type' 		=> 'home-slider', 	//Costum type Proyectos			
		'order'				=> 'DESC',			// List in ascending order
		'orderby'      		=> 'menu_order',	// List them in their menu order
		'posts_per_page'	=>   -1, 			// Show all
	);

	$sliderHome = new WP_Query($argsSlider);
?>


<div class="flexslider-wrapper loading">

	<div class="spinner">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
	
	<div class="flexslider">
		<ul class="slides">
			<?php /* Start the Loop */ ?>
			<?php while ($sliderHome->have_posts()) : $sliderHome->the_post(); ?>
				<?php $image_slider = get_field('home_slider_image'); ?>
				<li>
					<a href="<?php the_field('home_slider_link'); ?>">
						<img src="<?php echo $image_slider['url']; ?>" alt="<?php echo $image_slider['alt']; ?>" >
						<div class="slider-caption" <?php if( get_field('color_slider') ) { ?>style="background-color:<?php the_field('color_slider'); ?>"<?php } ?> >
							<div class="vertical-center">
								<h2><?php the_title(); ?></h2>
								<p>
									<?php the_field('home_slider_legend'); ?>
								</p>
							</div>
						</div>
					</a>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<?php wp_reset_postdata(); ?>