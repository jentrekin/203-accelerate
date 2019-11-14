<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<section class="home-page">
		<div class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
				 <div class='homepage-hero'>
					 <?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
         </div>
			    <?php endwhile; // end of the loop. ?>
		</div><!-- .site-content -->
	</section><!-- .home-page -->

  <section class="featured-work">
		 <div class="site-content">
			 <h4>Featured Work</h4>
			<ul class="homepage-featured-work">
			 <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			 <?php while ( have_posts() ) : the_post();
				  $image1 = get_field('image_1');
					$size = "medium";
			 ?>
			   <li class="individual-featured-work">
					 <figure>
						 <?php echo wp_get_attachment_image($image1, $size); ?>
					 </figure>
				   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			   </li>
		<?php endwhile; ?>
	<?php wp_reset_query(); ?>
      </ul>

		 </div>
	</section><!-- .featured-work -->

	<section class="recent-posts">
	 <div class="site-content">
		 <div class="blog-post">
      <h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
	        <?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="read-more-link"></a> <!-- get rid off? -->
  <?php endwhile; ?>
<?php wp_reset_query(); ?>
   </div>
	 </div>
	</section>

<?php get_footer(); ?>
