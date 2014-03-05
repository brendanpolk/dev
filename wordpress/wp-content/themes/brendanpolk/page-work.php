<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<p>Test Bp</p>
			<?php
				$type = 'work_item';
				$args=array(
				  'post_type' => $type,
				  'post_status' => 'publish',
				);
				$my_query = null;
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				  while ($my_query->have_posts()) : $my_query->the_post(); ?>
				

				    <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
				
				    <?php $img_path =get_custom_field( get_the_ID(), 'work_thumb' );
					$custom_fields = get_post_custom();
					print_r($custom_fields);
					
				    ?>

				    <div class="grid-item-container">
                		<a href="<?php the_permalink() ?>"></a>
                		<div class="grid-item">
                    		<img src="<?php echo $img_path;?>">
                    		<div class="item-title">
                        		<a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
                    		</div>
                		</div>
            		</div>



				    <?php
				  endwhile;
				}
				wp_reset_query();  // Restore global post data stomped by the_post().
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
