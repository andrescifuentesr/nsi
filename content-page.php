<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package nsi
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<h1 class="page-title"><?php the_title();?></h1>
		<img src="<?php bloginfo('template_directory'); ?>/img/bandeau-gris.svg" alt="bandeau gris" class="page-title-background">
	</header><!-- .page-header -->		

	<div class="entry-content">

		<div class="block-images">
			<?php
				$args = array(
					'post_parent'    => $post->ID,		// For the current post
					'post_type'      => 'attachment',	// Get all post attachments
					'post_mime_type' => 'image',		// Only grab images
					'order'			 => 'ASC',			// List in ascending order
					'orderby'        => 'rand',			// List them in their menu order
					'numberposts'    => -1, 			// Show all attachments
					'post_status'    => null,			// For any post status
				);
			 
				// Retrieve the items that match our query; in this case, images attached to the current post.
				$attachments = get_posts($args); 
			?>
			<?php foreach ($attachments as $attachment) { ?>
				<?php echo wp_get_attachment_image($attachment->ID, 'full', false, $default_attr); ?>
			<?php } // End of foreach Loop?>	
		</div><!--
		
	--><div class="block-content">
			<?php the_content(); ?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
