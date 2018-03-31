<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container   = get_theme_mod( 'understrap_container_fluid_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<footer class="footer-style">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
			<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						
					<?php else : ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					
					<?php endif; ?>
					
				
				<?php } else {
					the_custom_logo();
				} ?><!-- end custom logo -->
			</div>
			<div class="col-md-5">
				<nav class="hidden-sm-down navbar navbar-expand-md navbar-toggleable-md nav-style">
				<button class="navbar-toggler navbar-toggler-right nav-button-style" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown2" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		
				<?php wp_nav_menu(
				array(
					'theme_location'  => 'primary',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarNavDropdown2',
					'menu_class'      => 'navbar-nav ml-auto',
					'fallback_cb'     => '',
					'menu_id'         => 'main-menu',
					'walker'          => new understrap_WP_Bootstrap_Navwalker(),
				)
				); ?>
				</nav>
			</div>
			<div class="col-md-4"><?php dynamic_sidebar( 'footer-right-sone' ); ?>
			</div>
		</div>
	</div>
	<div class="footer-buttom-style">
		<div class="container">
			<span class="d-inline-block"><?php echo get_theme_mod( 'copyright_text' ); ?></span>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>

</html>



