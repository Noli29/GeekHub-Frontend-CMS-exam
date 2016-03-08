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
								<li><a href="#"><img src="/wp-content/themes/blog/images/twitter.png"></a>
								</li>
								<li><a href="#"><img src="/wp-content/themes/blog/images/facebook.png"></a>
								</li>
								<li><a href="#"><img src="/wp-content/themes/blog/images/pin.png"></a>
								</li>
								<li><a href="#"><img src="/wp-content/themes/blog/images/google.png"></a></li>
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
