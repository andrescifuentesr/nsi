<?php
/**
 * @package nsi
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="button-module-tab">
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
	</div>

	<div class="module-tab hide-module-tab clearfix">
		<ul>
			<li>
				<input type="radio" id="tab-one-<?php the_ID(); ?>" name="tab-set">
				<label for="tab-one-<?php the_ID(); ?>"><?php _e( 'Overview', 'nsi' ); ?></label>
				<div class="tab-content tab-content-1">
					<div class="product-half-content">
						<h2 class="entry-title"><?php the_title(); ?></h2>
						<p><?php the_field('overview'); ?></p>
					</div><!--
				--><div class="product-half-image">
						<?php the_post_thumbnail('full'); ?>
					</div>
				</div><!-- tab-content -->
			</li>
			<li>
				<input type="radio" id="tab-two-<?php the_ID(); ?>" name="tab-set">
				<label for="tab-two-<?php the_ID(); ?>"><?php _e( 'Packaging', 'nsi' ); ?></label>
				<div class="tab-content tab-content-2">
					<div class="product-full-content">
						<!-- <h2 class="entry-title"><?php _e( 'Packaging', 'nsi' ); ?></h2> -->
						<?php
							$image_packaging = get_field('packaging');
							if( !empty($image_packaging) ): ?>
								<img src="<?php echo $image_packaging['url']; ?>" alt="<?php echo $image_packaging['alt']; ?>" />
						<?php endif; ?>
					</div>
				</div><!-- tab-content -->
			</li>
			<li>
				<input type="radio" id="tab-three-<?php the_ID(); ?>" name="tab-set">
				<label for="tab-three-<?php the_ID(); ?>"><?php _e( 'Nutrition', 'nsi' ); ?></label>
				<div class="tab-content tab-content-3">
					<div class="product-full-content">
						<h2 class="entry-title"><?php _e( 'Benefits', 'nsi' ); ?></h2>
						<div class="block-product-nutrition-benefit"><?php the_field('nutrition_benefits'); ?></div>
						<p><?php the_field('nutrition_content'); ?></p>
						
						<div class="icon-nutrition-top clearfix">
							<?php if( in_array( 'raw', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-raw.svg" alt="Raw" class="" >
								</div>
							<?php } ?>
							<?php if( in_array( 'vegan', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">	
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-vegan.svg" alt="vegan" class="" >
								</div>
							<?php } ?>
							<?php if( in_array( 'gluten', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-gluten.svg" alt="gluten free" class="" >
								</div>
							<?php } ?>
							<?php if( in_array( 'kosher', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-kosher.svg" alt="Kosher" class="" >
								</div>
							<?php } ?>
						</div>

						<div class="also-available"><?php _e( 'Also available', 'nsi' ); ?></div>
						
						<div class="icon-nutrition-bottom clearfix">
							<?php if( in_array( 'usda', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-usda.png" alt="usda" class="" >
								</div>
							<?php } ?>
							<?php if( in_array( 'fair_trade', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-fair_trade.png" alt="Fair trade" class="" >
								</div>
							<?php } ?>
							<?php if( in_array( 'gmo', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-gmo.png" alt="gmo" class="" >
								</div>
							<?php } ?>
							<?php if( in_array( 'fair_life', get_field('nutrition_qualifications') ) ) { ?>
								<div class="one-quarter">
									<img src="<?php bloginfo('template_directory'); ?>/img/icon-fair_life.png" alt="fair life" class="" >
								</div>
							<?php } ?>
						</div>
					</div>
				</div><!-- tab-content -->
			</li>
			<li>
				<input type="radio" id="tab-four-<?php the_ID(); ?>" name="tab-set">
				<label for="tab-four-<?php the_ID(); ?>"><?php _e( 'Recipes', 'nsi' ); ?></label>
				<div class="tab-content tab-content-4">
					<div class="product-full-content">
						<h2 class="entry-title"><?php the_field('recipe_title'); ?></h2>							
						<p class="recipe-subtitle"><?php the_field('recipe_sub_title'); ?></p>
						<div class="bloc-recipe-ingredients">
							<h3><?php _e( 'Ingredients', 'nsi' ); ?></h3>
							<div>
								<?php
									$image_recipe = get_field('recipe_image');
									if( !empty($image_recipe) ): ?>
										<img src="<?php echo $image_recipe['url']; ?>" alt="<?php echo $image_recipe['alt']; ?>" />
								<?php endif; ?>
								<?php the_field('recipe_ingredients'); ?>
							</div>
						</div>
						<div class="bloc-recipe-preparation">
							<h3><?php _e( 'Preparation', 'nsi' ); ?></h3>
							<p><?php the_field('recipe_preparation'); ?></p>
						</div>
					</div>
				</div><!-- tab-content -->
			</li>
			<li>
				<input type="radio" id="tab-close-<?php the_ID(); ?>" name="tab-set" class="button-tab-close">
				<label for="tab-close-<?php the_ID(); ?>" class="tab-close"><?php _e( 'X', 'nsi' ); ?></label>
			</li>
		</ul>
	</div>
</article><!-- #post-## -->
