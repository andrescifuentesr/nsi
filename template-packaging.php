<?php
/*
Template Name: Packaging Capabilities
*/

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="breadcrumb">
					<img src="<?php bloginfo('template_directory'); ?>/img/image-header-privat-brand.jpg" alt="image header privat brand">
					
					<?php 

						$args = array(
						'child_of'     => $post->post_parent,
						'post_type'    => 'page',
						'title_li'     => __(''), 
					); ?>

					<ul>
						<?php wp_list_pages( $args ); ?>
					</ul>
				</div><!-- breadcrumb  -->

				<header class="page-header">
					<h1 class="page-title"><?php the_title();?></h1>
					<img src="<?php bloginfo('template_directory'); ?>/img/bandeau-gris.svg" alt="bandeau gris" class="page-title-background">
				</header><!-- .page-header -->

				<div class="module--packaging">
					<!-- packaging cap -->
					<section class="module-product-action">
						<div class="entry-header">
							<div class="module-title-header clearfix">
								<h1 class="entry-title"><?php _e( 'Stand Up Zipper Pouch – Clear', 'nsi' ); ?></h1>
							</div><!--
						--><div class="module-image-header">
								<?php $image__stand_up_zipper_pouch = get_field('image__stand_up_zipper_pouch'); ?>
								<img src="<?php echo $image__stand_up_zipper_pouch['url']; ?>" alt="<?php echo $image__stand_up_zipper_pouch['alt']; ?>" />
							</div>
						</div><!-- .entry-header --><!--

					--><div class="entry-content">
							<h2 class="entry-title"><?php _e( 'Stand Up Zipper Pouch – Clear', 'nsi' ); ?></h2>
							<p><?php the_field('stand_up_zipper_pouch'); ?></p>
						</div><!-- .entry-content -->
					</section>


					<!-- packaging cap -->
					<section class="module-product-action">
						<div class="entry-header">
							<div class="module-title-header clearfix">
								<h1 class="entry-title"><?php _e( 'Stand Up Pouch – Foil Layer', 'nsi' ); ?></h1>
							</div><!--
						--><div class="module-image-header">
								<?php $image__stand_up_pouch = get_field('image__stand_up_pouch'); ?>
								<img src="<?php echo $image__stand_up_pouch['url']; ?>" alt="<?php echo $image__stand_up_pouch['alt']; ?>" />
							</div>
						</div><!-- .entry-header --><!--

					--><div class="entry-content">
							<h2 class="entry-title"><?php _e( 'Stand Up Pouch – Foil Layer', 'nsi' ); ?></h2>
							<p><?php the_field('stand_up_pouch'); ?></p>
						</div><!-- .entry-content -->
					</section>

					<!-- packaging cap -->
					<section class="module-product-action">
						<div class="entry-header">
							<div class="module-title-header clearfix">
								<h1 class="entry-title"><?php _e( 'Clam Shell', 'nsi' ); ?></h1>
							</div><!--
						--><div class="module-image-header">
								<?php $image__clam_shell = get_field('image__clam_shell'); ?>
								<img src="<?php echo $image__clam_shell['url']; ?>" alt="<?php echo $image__clam_shell['alt']; ?>" />
							</div>
						</div><!-- .entry-header --><!--

					--><div class="entry-content">
							<h2 class="entry-title"><?php _e( 'Clam Shell', 'nsi' ); ?></h2>
							<p><?php the_field('clam_shell'); ?></p>
						</div><!-- .entry-content -->
					</section>

					<!-- packaging cap -->
					<section class="module-product-action">
						<div class="entry-header">
							<div class="module-title-header clearfix">
								<h1 class="entry-title"><?php _e( 'PET Canister', 'nsi' ); ?></h1>
							</div><!--
						--><div class="module-image-header">
								<?php $image__pet_canister = get_field('image__pet_canister'); ?>
								<img src="<?php echo $image__pet_canister['url']; ?>" alt="<?php echo $image__pet_canister['alt']; ?>" />
							</div>
						</div><!-- .entry-header --><!--

					--><div class="entry-content">
							<h2 class="entry-title"><?php _e( 'PET Canister', 'nsi' ); ?></h2>
							<p><?php the_field('pet_canister'); ?></p>
						</div><!-- .entry-content -->
					</section>						

					<!-- packaging cap -->
					<section class="module-product-action">
						<div class="entry-header">
							<div class="module-title-header clearfix">
								<h1 class="entry-title"><?php _e( 'Shaker', 'nsi' ); ?></h1>
							</div><!--
						--><div class="module-image-header">
								<?php $image__shaker = get_field('image__shaker'); ?>
								<img src="<?php echo $image__shaker['url']; ?>" alt="<?php echo $image__shaker['alt']; ?>" />
							</div>
						</div><!-- .entry-header --><!--

					--><div class="entry-content">
							<h2 class="entry-title"><?php _e( 'Shaker', 'nsi' ); ?></h2>
							<p><?php the_field('shaker'); ?></p>
						</div><!-- .entry-content -->
					</section>

				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
