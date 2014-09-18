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