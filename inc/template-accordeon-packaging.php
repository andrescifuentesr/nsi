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