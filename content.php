<?php
/**
 * @package nsi
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="module-product-tab">
		<!-- Tabs -->
		<section class="module-product-action">
			<div class="entry-header">
				<div class="module-title-header clearfix">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div><!--
			--><div class="module-image-header">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div><!-- .entry-header --><!--

		--><div class="entry-content">
				<h2 class="entry-title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div><!-- .entry-content -->
		</section>

		<!-- Tabs Content -->
		<section class="module-tab clearfix">
			<ul class="module-tab--list">
				<li class="module-tab--item">
					<input type="radio" id="tab-one-<?php the_ID(); ?>" name="tab-set-<?php the_ID(); ?>" class="tab-one">
					<label for="tab-one-<?php the_ID(); ?>"><?php _e( 'Overview', 'nsi' ); ?></label>
					<?php get_template_part( 'inc/template-accordeon-overview' );  ?>
				</li>
				<li class="module-tab--item">
					<input type="radio" id="tab-two-<?php the_ID(); ?>" name="tab-set-<?php the_ID(); ?>" class="tab-two">
					<label for="tab-two-<?php the_ID(); ?>"><?php _e( 'Packaging', 'nsi' ); ?></label>
					<?php get_template_part( 'inc/template-accordeon-packaging' );  ?>
				</li>
				<li class="module-tab--item">
					<input type="radio" id="tab-three-<?php the_ID(); ?>" name="tab-set-<?php the_ID(); ?>" class="tab-three">
					<label for="tab-three-<?php the_ID(); ?>"><?php _e( 'Nutrition', 'nsi' ); ?></label>
					<?php get_template_part( 'inc/template-accordeon-nutrition' );  ?>
				</li>
				<li class="module-tab--item">
					<input type="radio" id="tab-four-<?php the_ID(); ?>" name="tab-set-<?php the_ID(); ?>" class="tab-four">
					<label for="tab-four-<?php the_ID(); ?>"><?php _e( 'Recipes', 'nsi' ); ?></label>
					<?php get_template_part( 'inc/template-accordeon-recipes' );  ?>
				</li>
				<li class="module-tab--item--close">
					<input type="radio" id="tab-close-<?php the_ID(); ?>" name="tab-set-<?php the_ID(); ?>" class="button-tab-close">
					<label for="tab-close-<?php the_ID(); ?>" class="tab-close"><?php _e( 'X', 'nsi' ); ?></label>
				</li>
			</ul>
		</section>
	</div>

</article><!-- #post-## -->