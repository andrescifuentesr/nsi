<?php
/*
Template Name: Four steps
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

				<article id="post-<?php the_ID(); ?>" <?php post_class('steps'); ?>>
				
					<header class="page-header">
						<h1 class="page-title"><?php the_title();?></h1>
						<img src="<?php bloginfo('template_directory'); ?>/img/bandeau-gris.svg" alt="bandeau gris" class="page-title-background">
					</header><!-- .page-header -->		

					<div class="entry-content">
						<?php the_content(); ?>

						<div class="block-step block-first-step">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-select-product.svg" alt="icon shopping car"><!--
						--><div class="block-step-content">
								<h2><?php _e( '1 - Select Product', 'nsi' ); ?></h2>
								<p><?php the_field('select_product'); ?></p>
							</div>
						</div>

						<div class="block-step">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-select-packaging.svg" alt="icon NSI"><!--
						--><div class="block-step-content">
								<h2><?php _e( '2 - Select Packaging', 'nsi' ); ?></h2>
								<p><?php the_field('select_packaging'); ?></p>
							</div>
						</div>

						<div class="block-step">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-design.svg" alt="icon Design"><!--
						--><div class="block-step-content">
								<h2><?php _e( '3 - Design your Artwork', 'nsi' ); ?></h2>
								<p><?php the_field('design_artwork'); ?></p>
							</div>
						</div>

						<div class="block-step">
							<img src="<?php bloginfo('template_directory'); ?>/img/icon-pack-ship.svg" alt="icon Pack and Ship"><!--
						--><div class="block-step-content">
								<h2><?php _e( '4 - Pack and Ship', 'nsi' ); ?></h2>
								<p><?php the_field('pack_and_ship'); ?></p>
							</div>
						</div>

					</div><!-- .entry-content -->

				</article>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
