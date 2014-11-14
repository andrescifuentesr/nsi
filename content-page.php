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
			<?php the_post_thumbnail('full'); ?>
		</div><!--
		
	--><div class="block-content">
			<?php the_content(); ?>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
