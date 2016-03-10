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
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>


					<div class="center">
						<ul class="block">
							<li><a href="<?php echo get_theme_mod('social_links_facebook'); ?>">
								<span class="fa fa-facebook"></span>
							</a>
							</li>
							<li><a href="<?php echo get_theme_mod('social_links_twitter'); ?>">
								<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li><a href="<?php echo get_theme_mod('social_links_pinterest'); ?>">
								<span class="fa fa-pinterest"></span></a>
							</li>
							<li><a href="<?php echo get_theme_mod('social_links_google_plus'); ?>">								<span class="fa-google"></span></a> 
							</li>
						</ul>
					</div>

					<p  class="right">&copy; <?php echo date('Y')." "; ?>Copyright<a href="http://designerFirst.com">DesignerFirst.com</a></p>
				</nav>


			</div><!-- .site-info -->
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
