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
					case 'test1': 
						get_template_part('/page-templates/modules/test1');
						break;
					case 'test2': 
						get_template_part('/page-templates/modules/test2');
						break;
					case 'test3': 
						get_template_part('/page-templates/modules/test3');
						break;
					case 'test4': 
						get_template_part('/page-templates/modules/test4');
						break;
					case 'slider': 
						get_template_part('/page-templates/modules/slider');
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

