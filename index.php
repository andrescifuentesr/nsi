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
					<h3>Chia Seeds</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Chia.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Goji Berries</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Goji_Berries.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Cacao Beans</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Cacao.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Coconut</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Coconut.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Freezed Dried Apple</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Apple.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Freezed Dried BlueBerries</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/BlueBeries.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Freezed Dried Corn</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Corn.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Freezed Dried Bananas</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Banana.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Freezed Dried Strawberries</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Strawberries.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Freezed Dried Peas</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Peas.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Hemp Seeds</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Hemp_Seeds.jpg" alt="">
				</div><!--
			--><div class="grid-best-seller-item">
					<h3>Freezed Dried Raspberries</h3>
					<img src="<?php bloginfo('template_directory'); ?>/img/grid-best-sellers/Raspberries.jpg" alt="">
				</div>
			</div>

			<?php endwhile; ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
