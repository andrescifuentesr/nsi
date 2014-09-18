<?php
/*
Template Name: Home
*/

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'inc/slider' );  ?>

		<div class="grid-feature">
			<div class="grid-feature-item grid-feature-item-gutter">
				<a href="<?php the_field('main_zone_left_link'); ?>">
					<img src="<?php the_field('main_zone_left_image'); ?>" alt="<?php the_field('main_zone_left_text'); ?>" class="icon-lupulo">
					<span class="grid-feature-title-content"><?php the_field('main_zone_left_text'); ?></span>
				</a>
			</div><!--
		--><div class="grid-feature-item grid-feature-item-gutter">
				<a href="<?php the_field('main_zone_center_link'); ?>">
					<img src="<?php the_field('main_zone_center_image'); ?>" alt="<?php the_field('main_zone_center_text'); ?>" class="icon-lupulo">
					<span class="grid-feature-title-content"><?php the_field('main_zone_center_text'); ?></span>
				</a>
			</div><!--
		--><div class="grid-feature-item">
				<a href="<?php the_field('main_zone_right_link'); ?>">
					<img src="<?php the_field('main_zone_right_image'); ?>" alt="<?php the_field('main_zone_right_text'); ?>" class="icon-lupulo">
					<span class="grid-feature-title-content"><?php the_field('main_zone_right_text'); ?></span>
				</a>
			</div>
		</div>

		<div class="page-header page-header-home">
			<h2 class="page-title"><?php _e( 'Best Sellers', 'nsi' ); ?></h2>
			<img src="<?php bloginfo('template_directory'); ?>/img/bandeau-gris.svg" alt="bandeau gris" class="page-title-background">
		</div><!-- .page-header -->

		<?php get_template_part( 'inc/best-sellers' );  ?>

		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
