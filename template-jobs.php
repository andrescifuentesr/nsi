<?php
/*
Template Name: Careers
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

				<article id="post-<?php the_ID(); ?>" <?php post_class('section-jobs'); ?>>
				
					<header class="page-header">
						<h1 class="page-title"><?php the_title();?></h1>
						<img src="<?php bloginfo('template_directory'); ?>/img/bandeau-gris.svg" alt="bandeau gris" class="page-title-background">
					</header><!-- .page-header -->		

					<div class="entry-content">

						<h2><?php _e( 'Job Postings', 'nsi' ); ?></h2>
						
						<?php
							$args2 = array(
								'post_type' 		=> 'job',			//Costum type Proyectos			
								'order'				=> 'DESC',			// List in ascending order
								'orderby'      		=> 'id',			// List them in their menu order
								'posts_per_page'	=>   -1, 			// Show the last one
							);

							$jobsQuery = new WP_Query($args2);
						?>


						<?php /* Start the Loop */ ?>
						<?php while ($jobsQuery->have_posts()) : $jobsQuery->the_post(); ?>

							<section>
								<p>
									<?php _e( 'Department', 'nsi' ); ?>: <?php the_field('department'); ?><br>
									<?php _e( 'Position', 'nsi' ); ?>: <?php the_title(); ?><br>
									<?php _e( 'Status', 'nsi' ); ?>: <?php the_field('status'); ?>
								</p>
								
								<h3><?php _e( 'Primary Function', 'nsi' ); ?></h3>
								<p><?php the_field('primary_function'); ?></p>

								<?php if( get_field('more_information') ) { ?>
									<a href="<?php the_field('more_information') ?>" target="_blank" class="bt-more">
										<?php _e( 'More informations', 'nsi' ); ?>
									</a>
								<?php } ?>
							</section>							

						<?php endwhile; ?>

					</div><!-- .entry-content -->

				</article>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
