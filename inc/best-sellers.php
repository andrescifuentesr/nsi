<?php
	$argsBestSellers = array(
		'post_type' 		=> 'best-sellers', 	//Costum type Proyectos			
		'order'				=> 'ASC',			// List in ascending order
		'orderby'      		=> 'title',			// List them in their menu order
		'posts_per_page'	=>   12, 			// Show all
	);

	$BestSellers = new WP_Query($argsBestSellers);
?>

<div class="grid-best-seller">
	<?php /* Start the Loop */ ?>
	<?php while ($BestSellers->have_posts()) : $BestSellers->the_post(); ?><!--
		--><?php $image_bestSeller = get_field('best_seller_image'); ?><!-- 
		--><a href="<?php the_field('best_seller_link'); ?>" class="grid-best-seller-item">
			<h3><?php the_field('best_seller'); ?></h3>
			<img src="<?php echo $image_bestSeller['url']; ?>" alt="<?php echo $image_bestSeller['alt']; ?>" >
		</a><!-- 
	--><?php endwhile; ?>
</div>
<?php wp_reset_postdata(); ?>