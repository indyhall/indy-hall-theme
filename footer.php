<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indy
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="footer-widgets">
			<?php dynamic_sidebar( 'footer_1' ); ?>
			<?php dynamic_sidebar( 'footer_2' ); ?>
		</div>

		<div class="site-info">
			<?php indy_display_copyright_text(); ?>
			<?php indy_display_social_network_links(); ?>
			<hr/>
			<p>
				<small>site design by <a href="https://amethyst.design/">Amethyst Design</a>
				<span class="sep"> | </span>
					&copy; <?php echo date("Y"); ?> Indy Hall
					<br/>
					photo credits <a href="http://www.cjdawsonphoto.com/" target="_none">CJDawson Photo</a>, <a href="https://www.samabramsphotography.com/" target="_none">Sam Abrams Photography</a>. instagram photos owned by the respective posters
					<br/>thanks for making us look so good, y'all</small>
			</p>
		</div><!-- .site-info -->
	</footer><!-- .site-footer container-->
</div><!-- #page -->

<?php wp_footer(); ?>

<nav class="off-canvas-container" aria-hidden="true">
	<button type="button" class="off-canvas-close" aria-label="<?php esc_html_e( 'Close Menu', 'indy' ); ?>">
		<span class="close"></span>
	</button>
	<?php
		// Mobile menu args.
		$mobile_args = array(
			'theme_location'  => 'mobile',
			'container'       => 'div',
			'container_class' => 'off-canvas-content',
			'container_id'    => '',
			'menu_id'         => 'mobile-menu',
			'menu_class'      => 'mobile-menu',
		);

		// Display the mobile menu.
		wp_nav_menu( $mobile_args );
	?>
</nav>
<div class="off-canvas-screen"></div>
<script>(function(d,a){function c(){var b=d.createElement("script");b.async=!0;b.type="text/javascript";b.src=a._settings.messengerUrl;b.crossOrigin="anonymous";var c=d.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}window.kayako=a;a.readyQueue=[];a.newEmbedCode=!0;a.ready=function(b){a.readyQueue.push(b)};a._settings={apiUrl:"https://indyhall.kayako.com/api/v1",teamName:"Indy Hall",homeTitles:[{"locale":"en-us","translation":"Hello! 👋"}],homeSubtitles:[{"locale":"en-us","translation":"Welcome to Indy Hall. Have any questions? "}],messengerUrl:"https://indyhall.kayakocdn.com/messenger",realtimeUrl:"wss://kre.kayako.net/socket",widgets:{presence:{enabled:true},twitter:{enabled:false,twitterHandle:"null"},articles:{enabled:false,sectionId:null}},styles:{primaryColor:"#F1703F",homeBackground:"-192deg, #40364D 37%, #9B4779 100%",homePattern:"https://assets.kayako.com/messenger/pattern-1--dark.svg",homeTextColor:"#FFFFFF"}};window.attachEvent?window.attachEvent("onload",c):window.addEventListener("load",c,!1)})(document,window.kayako||{});</script>
</body>
</html>

