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

?>

	<div class="primary content-area">
		<main id="main" class="site-main">
			<section class="hero" style="background-image:url('<?php echo $image['url']; ?>'); background-position: 0 <?php echo $hero_offset; ?>%">
	      <h1 class="hero-title"><?php the_field('hero_title'); ?></h1>
				<span class="hero-description"><?php the_field('hero_description'); ?></span>
	  	</section>

		  <section class="upcoming-event">
				<span class="upcoming-event-content"><?php the_field('upcoming_events', 'option'); ?></span>
		  </section>


			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- .primary -->

<?php get_footer(); ?>
