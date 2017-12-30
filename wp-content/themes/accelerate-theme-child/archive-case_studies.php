<?php
/**
 * The template for displaying the case study archive page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $size = "full";
        $services = get_field('services');
        $image_1 = get_field('image_1'); ?>

        <article class="case-study-archive">
          <aside class="case-study-sidebar">
            <h2><?php the_title(); ?></h2>
            <h5><?php echo $services ?></h5>
            <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
          </aside>
          <div class="case-study-images">
          <?php echo wp_get_attachment_image($image_1, $size); ?>
        </div>
        </article>
			<?php endwhile; // end of the loop. ?>
      <?php wp_reset_query(); ?>

		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
