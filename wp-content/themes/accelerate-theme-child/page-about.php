<?php
/*
 * The template for displaying the About page
 * Template Name: Full-width layout
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

<!-- hero section -->

<div id="primary" class="about-page hero-content">
	<div class="header-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<h3 >Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customer's smile.</h3>
		<?php endwhile; // end of the loop. ?>

	</div><!-- .main-content -->
</div><!-- #primary -->

<!-- our services heading section -->
<section class="about-services">
		<div class="our-services">
			<div class="services-header">
				<h4>OUR SERVICES</h4>
				<p>We take pride in our clients and the content we create for them. Here is a brief overview of our offered services.</p>
			</div>
			<ul class="about-page-services">
						<?php query_posts('post_type=services'); ?>
						<?php while (have_posts())  : the_post();
							$service_description = get_field('service_description');
							$service_image = get_field('service_image');
							$size = "medium";
						?>
						<li class="individual-service">
							<div class="service-container">
								<div class="service-image"><?php echo wp_get_attachment_image($service_image, $size); ?></div>
								<div class="about-content">
									<h2><?php the_title(); ?></h2>
									<p><?php echo $service_description; ?></p>
								</div>
							</div>
						</li>
					<?php endwhile; //end of loop.  ?>
					<?php wp_reset_query(); // resets the altered query back to the original?>
			</ul>
		</div><!-- our-services -->
</section>

<!-- our contact section -->

	<section class="about-contact">
			<div class="about-contact-container">
				<h3>Interested in working with us?</h3>
				<a class="button" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
			</div>
		</section>

<!-- our footer section -->
</div>

<?php get_footer(); ?>
