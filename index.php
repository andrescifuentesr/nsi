<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nsi
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="flexslider-wrapper loading">

				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
				
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/image-slider-01.jpg" />
							<div class="slider-caption">
								<div class="vertical-center">
									<h2>CHIA SEEDS</h2>
									<p>
										Your direct source from South America
									</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/image-slider-02.jpg" />
							<div class="slider-caption">
								<div class="vertical-center">
									<h2>FREEZE DRIED FRUITS AND VEGGIES</h2>
									<p>
										Get your private brand quote today!
									</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/image-slider-03.jpg" />
							<div class="slider-caption">
								<div class="vertical-center">
									<h2>SUPERFOOD</h2>
									<p>
										The world most complete superfood
									</p>
								</div>
							</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/image-slider-00.jpg" />
							<div class="slider-caption">
								<div class="vertical-center">
									<h2>HIGHEST QUALITY STANDARDS</h2>
									<p>
										GFSI Certified Supply Chain
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="grid-feature">
				<div class="grid-feature-item grid-feature-item-gutter">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/image-grid-00.jpg" alt="" class="icon-lupulo">
						<span class="grid-feature-title-content">CHIA SEEDS</span>
						<span class="grid-feature-sub-title-content">Best seller</span>
					</a>
				</div><!--
			--><div class="grid-feature-item grid-feature-item-gutter">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/image-grid-00.jpg" alt="" class="icon-lupulo">
						<span class="grid-feature-title-content">SUSTAINABILITY</span>
						<span class="grid-feature-sub-title-content">Best seller</span>
					</a>
				</div><!--
			--><div class="grid-feature-item">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/img/image-grid-00.jpg" alt="" class="icon-lupulo">
						<span class="grid-feature-title-content">FOOD SAFETY</span>
						<span class="grid-feature-sub-title-content">Best seller</span>
					</a>
				</div>
			</div>

			<div class="page-header page-header-home">
				<h2 class="page-title"><?php _e( 'Best Sellers', 'nsi' ); ?></h2>
				<img src="<?php bloginfo('template_directory'); ?>/img/bandeau-gris.svg" alt="bandeau gris" class="page-title-background">
			</div><!-- .page-header -->

			<div class="grid-best-seller">
				<div class="grid-best-seller-item">
					<h3>Product 1</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-1.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 2</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-2.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 3</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-3.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 4</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-4.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 5</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-5.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 6</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-6.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 7</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-7.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 8</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-8.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 9</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-9.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 10</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-10.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 11</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-11.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Product 12</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/grid-item-12.jpg" alt="">
				</div>
			</div>

			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
