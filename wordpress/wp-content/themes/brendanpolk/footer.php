<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer"><!-- BEGIN COPIED FOOTER -->
	            <div class="footer-right">
	    		  <p>&copy Brendan Polk. 2014. All Rights Reserved</p>
	            </div>
	            <div class="footer-left">
	                <a href="http://dribbble.com/brendanpolk"><img src="/img/social/dribbble.png"></a>
	                <a href="http://twitter.com/brendanpolk"><img src="/img/social/twitter.png"></a>
	                <a href="http://www.linkedin.com/in/brendanpolk"><img src="/img/social/linkedin.png"></a>
	                 <a href="https://github.com/brendanpolk"><img src="/img/social/github.png"></a>
	            </div>
	    	</div><!-- END FOOTER -->

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>