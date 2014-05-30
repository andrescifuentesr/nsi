<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package nsi
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
				</div><!-- breadcrumb -->

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
