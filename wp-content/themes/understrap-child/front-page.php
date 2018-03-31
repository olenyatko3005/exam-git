<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */
 
get_header();

$container   = get_theme_mod( 'understrap_container_fluid_type' );

?>

<div class="wrapper" id="front-page-wrapper">
	<div class="index-style">
		<div class="understrap_container_fluid_type">
			<?php  
			while ( have_rows('modules') ) : the_row(); 
				switch ( get_row_layout() ) {
					case 'story': 
						get_template_part('/page-templates/modules/story');
						break;
					case 'process': 
						get_template_part('/page-templates/modules/process');
						break;
					case 'about': 
						get_template_part('/page-templates/modules/about');
						break;
					case 'family': 
						get_template_part('/page-templates/modules/family');
						break;
					case 'testimonials': 
						get_template_part('/page-templates/modules/testimonials');
						break;
					case 'build': 
						get_template_part('/page-templates/modules/build');
						break;
					default: 
						break;
				}
			endwhile;
			?>
		</div>
	</div>
</div><!-- Wrapper end -->

<?php get_footer(); ?>

