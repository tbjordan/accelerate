<?php
/**
 *Template Name: About
 *
 * The template for displaying the custom about page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>
 	<div id="primary" class="home-page about-page hero">
 		<div class="main-content" role="main">
 			<?php while ( have_posts() ) : the_post(); ?>
        <div class="hero-text">
          <?php the_content(); ?>
        </div>
 			<?php endwhile; // end of the loop. ?>
 		</div><!-- .main-content -->
 	</div><!-- #primary -->



  <section class="featured-services">
    <div class="site-content">
      <span style="text-align: center"><h6>Our Services</h6>
      <p>We take pride in our clients and the content we create for them. Here’s a brief overview of our offered services.</p></span>
      <ul class="services">
        <?php query_posts('post_type=services'); ?>
          <?php while ( have_posts() ) : the_post();
            $service_description = get_field("service_description");
            $service_icon = get_field("service_icon");
            $size = "full";
          ?>
        <li class="single-service">
          <div class="service-icon">
            <?php echo wp_get_attachment_image($service_icon, $size); ?>
          </div>
          <div class="service-text">
            <h3><?php the_title(); ?></h3>
            <?php echo $service_description; ?>
          </div>
        </li>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </ul>
    </div>
  </section>


    <div class="site-content about-footer">
      <h3>Interested in working with us?</h3>
      <a class="button contact-btn" href="<?php echo site_url('/contact/') ?>">Contact Us</a>
    </div>



  <?php get_footer(); ?>
