<div class="tab-content tab-content-1 tab-content--active">
	<div class="product-half-content">
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<p><?php the_field('overview'); ?></p>
		<a class="bt-bustom" href="<?php echo get_permalink('147') ?>"><?php _e( 'Request sample', 'nsi' ); ?></a>
	</div><!--
--><div class="product-half-image">
		<?php the_post_thumbnail('full'); ?>
	</div>
</div><!-- tab-content -->