<?php
/**
 * The template used for displaying typography in the scaffolding library.
 *
 * @package Indy
 */

?>

<section class="section-scaffolding">

	<h2 class="scaffolding-heading"><?php esc_html_e( 'Typography', 'indy' ); ?></h2>

	<?php
	// H1.
	indy_display_scaffolding_section( array(
		'title'       => 'H1',
		'description' => 'Display an H1',
		'usage'       => '<h1>This is a headline</h1> or <div class="h1">This is a headline</div>',
		'output'      => '<h1>This is a headline one</h1>',
	) );

	// H2.
	indy_display_scaffolding_section( array(
		'title'       => 'H2',
		'description' => 'Display an H2',
		'usage'       => '<h2>This is a headline</h2> or <div class="h2">This is a headline</div>',
		'output'      => '<h2>This is a headline two</h2>',
	) );

	// H3.
	indy_display_scaffolding_section( array(
		'title'       => 'H3',
		'description' => 'Display an H3',
		'usage'       => '<h3>This is a headline</h3> or <div class="h3">This is a headline</div>',
		'output'      => '<h3>This is a headline three</h3>',
	) );

	// H4.
	indy_display_scaffolding_section( array(
		'title'       => 'H4',
		'description' => 'Display an H4',
		'usage'       => '<h4>This is a headline</h4> or <div class="h4">This is a headline</div>',
		'output'      => '<h4>This is a headline four</h4>',
	) );

	// H5.
	indy_display_scaffolding_section( array(
		'title'       => 'H5',
		'description' => 'Display an H5',
		'usage'       => '<h5>This is a headline</h5> or <div class="h5">This is a headline</div>',
		'output'      => '<h5>This is a headline five</h5>',
	) );

	// H6.
	indy_display_scaffolding_section( array(
		'title'       => 'H6',
		'description' => 'Display an H6',
		'usage'       => '<h6>This is a headline</h6> or <div class="h6">This is a headline</div>',
		'output'      => '<h6>This is a headline six</h6>',
	) );
	?>
</section>
