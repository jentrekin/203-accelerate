<?php get_header(); ?>

	<section class="about-page">
		<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>
				 <div class='homepage-hero'>
					 <?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
         </div>
			    <?php endwhile; // end of the loop. ?>
		</div><!-- .site-content -->
	</section><!-- .home-page -->

<h2>Is this workig?</h2>
  <section class="services">
		 <div class="content">
			 <h4>Featured Work</h4>
			<ul class="about-services">
			 <?php query_posts('posts_per_page=3&post_type=services'); ?>
			 <?php while ( have_posts() ) : the_post();
				  $image = get_field('image');
					$size = "medium";
			 ?>
			   <li class="individual-featured-work">
					 <figure>
						 <?php echo wp_get_attachment_image($image, $size); ?>
					 </figure>
				   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			   </li>
		<?php endwhile; ?>
	<?php wp_reset_query(); ?>
      </ul>

		 </div>
	</section><!-- .featured-work -->

<?php get_footer(); ?>
