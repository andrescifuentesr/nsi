<div class="tab-content tab-content-3">
	<div class="product-full-content">
		<h2 class="entry-title"><?php _e( 'Benefits', 'nsi' ); ?></h2>
		<div class="block-product-nutrition-benefit"><?php the_field('nutrition_benefits'); ?></div>
		<p><?php the_field('nutrition_content'); ?></p>
		
		<div class="icon-nutrition-top clearfix">
			<?php if( get_field('nutrition_qualifications') ) { ?>
				<?php if( in_array( 'usda', get_field('nutrition_qualifications') ) ) { ?>
					<div class="one-fifth">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-usda.svg" alt="usda" class="" >
					</div>
				<?php } ?>
				<?php if( in_array( 'kosher', get_field('nutrition_qualifications') ) ) { ?>
					<div class="one-fifth">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-kosher.svg" alt="Kosher" class="" >
					</div>
				<?php } ?>
				<?php if( in_array( 'gmo', get_field('nutrition_qualifications') ) ) { ?>
					<div class="one-fifth">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-gmo.png" alt="gmo" class="" >
					</div>
				<?php } ?>
				<?php if( in_array( 'raw', get_field('nutrition_qualifications') ) ) { ?>
					<div class="one-fifth">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-raw.svg" alt="Raw" class="" >
					</div>
				<?php } ?>
				<?php if( in_array( 'gfsi', get_field('nutrition_qualifications') ) ) { ?>
					<div class="one-fifth">
						<img src="<?php bloginfo('template_directory'); ?>/img/icon-gfsi.svg" alt="Fair trade" class="" >
					</div>
				<?php } ?>
			<?php } ?>	
		</div>
		<!-- </div> -->
	</div>
</div><!-- tab-content -->