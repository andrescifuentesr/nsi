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