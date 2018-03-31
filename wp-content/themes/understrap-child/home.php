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
<div class="wrapper home-style" id="home-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="container">
			<?php the_breadcrumb(); ?>
			<?php dynamic_sidebar( 'blog-sone' ); ?>
			<div class="article-style">				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
				<article class="article-item">
					<div class="row">
						<a class="col-md-4" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail();?></a>
						<div class=" col-md-5">
							<h2><a class="article-title-style" href="<?php echo get_permalink(); ?>">
								<?php the_title(); ?>
							</a></h2>
							<div class="article-item-about">
								<span>By</span>
								<span class="autor-style"><?php echo get_the_author_meta('display_name'); ?></span>
								<time class="datetime"><?php echo get_the_date('d-M-Y'); ?></time>
							</div>
							<?php the_excerpt(); ?>
						</div>
					</div>
				</article>
				
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
		</div>
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>

