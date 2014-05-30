<?php
/*
Template Name: Contact
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
						<div class="bloc-contact-text">
							<?php the_content(); ?>
						</div><!--
					
						--><?php echo do_shortcode( '[contact-form-7 id="182" title="Contact form"]' ); ?>

					</div><!-- .entry-content -->

				</article>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
