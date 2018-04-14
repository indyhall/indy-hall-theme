<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Indy
 */

get_header();

$image = get_field('hero_image');
$hero_offset = get_field('hero_offset');
$hero_description = get_field('hero_description');
?>
<section class="hero" style="background-image:url('<?php echo $image['url']; ?>'); background-position: 0 <?php echo $hero_offset; ?>%">
  <h1 class="hero-title"><?php echo get_the_title(); ?></h1>
  <?php if($hero_description) { ?>
	<span class="hero-description"><?php echo $hero_description ?></span>
	<?php } ?>
</section>
<section class="upcoming-event">
	<span class="upcoming-event-content"><?php the_field('upcoming_events', 'option'); ?></span>
</section>
<div class="primary content-area">
	<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>
		<section class="instagram-widget">
	  	<div class="inner-wrap">
	  		<h2>What's Happening in our Community</h2>
	  		<hr>
				<div class="instagram-feed">
					<?php echo do_shortcode("[instagram-feed]"); ?>
				</div>
			</div>
	  </section>

	</main><!-- #main -->
</div><!-- .primary -->

<?php get_footer(); ?>
