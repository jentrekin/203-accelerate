<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

<div id="primary" class="site-content">
	<div class="content" role="main">

		<?php while ( have_posts() ) : the_post();
				$service_description = get_field('service_description');
				$service_image = get_field('service_image');
				$size = "medium";?>

			<article class="services">
				<aside class="service">
					<h2><?php the_title(); ?></h2>
					<p><?php echo $service_description; ?></p>

				<div class="service-image">
					<?php if($service_image) {
						echo wp_get_attachment_image( $service_image, $size );
					} ?>
			  </div>
			</article>

	 <?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>
