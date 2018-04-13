<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
		?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- .primary -->

<?php get_footer(); ?>
