<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">


        <div id="hero"><!-- BEGIN COPIED BODY CONTENT -->
            <h1>Brendan Polk</h1><p>Web & Graphic Design</p>
        </div>

	   <div id="grid-container"><!-- BEGIN GRID SECTION -->

            <div class="grid-item-container">
                <a href="welcomewebstudios.html"></a>
                <div class="grid-item">
                    <img src="img/work/wws/welcome-thumb.png">
                    <div class="item-title">
                        <a href="welcomewebstudios.html"><h1>Welcome Web Studios</h1></a>
                    </div>
                </div>
            </div>

            <div class="grid-item-container">
                <a href="fixed-4-lyfe.html"></a>
                    <div class="grid-item">
                        <a href="fixed-4-lyfe.html">
                        <img src="img/work/fixed4lyfe/fixed4life.png"></a>
                    </div>
                <div class="item-title">
                    <a href="fixed-4-lyfe.html"><h1>Fixed 4 Lyfe</h1></a>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <a href="armadillo-ale.html">
                    <img src="img/work/armadillo/armadillo-ale-poster.png"></a>
                </div>
                <div class="item-title">
                    <a href="armadillo-ale.html"><h1>Armadillo Ale</h1></a>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/3.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/2.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/3.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/2.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/3.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/2.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/3.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/2.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/3.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/2.jpg"> 
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/3.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/2.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

            <div class="grid-item-container">
                <div class="grid-item">
                    <img src="img/3.jpg">
                </div>
                <div class="item-title">
                    <h1>Welcome Web Studios</h1>
                </div>
            </div>

        </div><!-- END GRID SECTION --><!--END BODY CONTENT SECTION -->


<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;
				// Previous/next post navigation.
				twentyfourteen_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
