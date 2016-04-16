<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blog
 */

?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<div id="col-1">
							<div>
								<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<img src="<?php echo get_template_directory_uri(); ?>/images/businessplus_logo.svg" alt="Logo" />
								</a>
								<p  class="left">2015 &copy; lawyer</p>
						</div>
						<div class="icon">
							<ul>
								<li><a href="<?php echo get_theme_mod('social_links_facebook'); ?>">
										<span class="fa fa-facebook"></span>
									</a>
								</li>
								<li><a href="<?php echo get_theme_mod('social_links_google'); ?>">
										<span class="fa fa-google-plus"></span></a>
								</li>
								<li><a href="<?php echo get_theme_mod('social_links_twitter'); ?>">
										<span class="fa fa-twitter"></span>
									</a>
								</li>
								<li><a href="<?php echo get_theme_mod('social_links_linkedin'); ?>">
										<span class="fa fa-linkedin"></span></a>
								</li>
							</ul>
						</div>
					</div>
					<div id="col-2">
						<p class="navigation">Navigation</p>
						<nav class="main-navigation" id="site-navigation"  role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
						</nav>
					</div>
					<div id="col-3">
							<div class="row">
								<?php if (is_active_sidebar('footer-a')) : ?>
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
										<div class="widgets"
											<?php dynamic_sidebar('footer-a'); ?>
										</div>
									</div>
								<?php else : ?>
								<?php endif; ?> <!-- /footer-a -->
								<div class="clear"></div>
							</div> <!-- /footer-inner -->
					</div>


				</nav>


			</div><!-- .site-info -->
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
