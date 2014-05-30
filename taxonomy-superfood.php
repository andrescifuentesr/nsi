<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nsi
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="breadcrumb">
				<img src="<?php bloginfo('template_directory'); ?>/img/image-header-superfood.jpg" alt="flowers">

				<?php 
					//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)
					$args = array(
					'taxonomy'     => 'superfood',
					'orderby'      => 'name',
					'hierarchical' => 1, //1 for yes, 0 for no
					'title_li'     => '',
					'hide_empty'   => '0'
					);
				?>

				<ul>
					<?php wp_list_categories( $args ); ?>
				</ul>
			</div>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if( is_tax() ) :
							global $wp_query;
							$term = $wp_query->get_queried_object();
							$title = $term->name;
							printf( '%s', $title );

						else :
							_e( 'Archives', 'nsi' );

						endif;
					?>
				</h1>
				<img src="<?php bloginfo('template_directory'); ?>/img/bandeau-gris.svg" alt="bandeau gris" class="page-title-background">
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
