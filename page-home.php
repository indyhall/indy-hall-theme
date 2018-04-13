<?php
/* Template Name: Home */
/*
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Indy
 */

get_header();

$image = get_field('hero_image');
$hero_offset = get_field('hero_offset');

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
    <section class="hero" style="background-image:url('<?php echo $image['url']; ?>'); background-position: 0 <?php echo $hero_offset; ?>%">
      <h1 class="hero-title"><?php the_field('hero_title'); ?></h1>
			<span class="hero-description"><?php the_field('hero_description'); ?></span>
  	</section>

	  <section class="upcoming-event">
			<span class="upcoming-event-content"><?php the_field('upcoming_events', 'option'); ?></span>
	  </section>

	  <section class="text-and-image" style="background: url('<?php the_field('image_1'); ?>');">
		  <h2><?php the_field('sub_heading_1'); ?></h2>
		  <hr>
		  <p><?php the_field('text_block_1'); ?></p>
	  </section>

	  <section class="image-and-text" style="background: url('<?php the_field('image_2'); ?>');">
		  <h2><?php the_field('sub_heading_2'); ?></h2>
		  <hr>
		  <p><?php the_field('text_block_2'); ?></p>
	  </section>

	  <section class="instagram">
	  	<div class="inner-wrap">
	  		<h2>What's Happening in our Community</h2>
	  		<hr>
				<div class="instagram-feed">
					<?php echo do_shortcode("[instagram-feed]"); ?>
				</div>
			</div>
	  </section>
	  <section class="pricing-packages">
		  <div class="inner-wrap">
				<h2><?php the_field('sub_heading_3'); ?></h2>
				<hr>
				<div class="packages">
					<?php

						// check if the repeater field has rows of data
						if( have_rows('pricing_package', 'option') ):

							// loop through the rows of data
							while ( have_rows('pricing_package', 'option') ) : the_row();

								// display a sub field value
								?>

								<div class="package">

									<span class="package-name"><?php the_sub_field('package_name'); ?></span>
									<span class="package-price" style="color: #<?php the_sub_field('color'); ?>"><?php the_sub_field('package_price'); ?></span>
									<span class="package-caption"><?php the_sub_field('price_caption'); ?></span>
									<span class="package-description"><?php the_sub_field('description'); ?></span>
									<a href="<?php the_sub_field('button_link'); ?>"><span class="button" style="background-color: #<?php the_sub_field('color'); ?>"><?php the_sub_field('button_text'); ?></span></a>

								</div>

								<?php

							endwhile;

						else :

							// no rows found

						endif;

					?>
				</div>

		  </div>
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
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
