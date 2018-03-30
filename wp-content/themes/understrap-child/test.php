<?php

/**
 * Template Name: Test
 *
 * @package understrap
 */
 
get_header();

$container   = get_theme_mod( 'understrap_container_fluid_type' );
?>

<?php  
	$args = array(
		'post_type' => 'test',
	);
	$queryStories = new WP_Query($args);
?>


<div class="wrapper" id="home-wrapper">
	<section class="blog-home-style">
		<div class="container">
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="main-style">
			<div class="container">
				<div class="row">
					<div class="article-style col-md-8">
						<?php the_breadcrumb(); ?>	
						<?php if ( $queryStories-> have_posts() ) : while ( $queryStories-> have_posts() ) : $queryStories-> the_post(); ?>				
						<article class="">
							<a href="<?php echo get_permalink(); ?>" class="arrow-style"><i class="fa fa-share fa-3x" aria-hidden="true"></i></a>
							 
							<div class="article-block-style">
								<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail();?></a>
								<div class="article-text-style">
									<h2><a href="<?php echo get_permalink(); ?>">
										<?php the_title(); ?>
									</a></h2>
									<?php the_excerpt(); ?>
								</div>
								<div class="article-info">
									<span class="clock"><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></span>
									<time class="datetime"><?php echo get_the_date('d-M-Y'); ?></time>
								</div>
							</div>
						</article>
						
						<?php endwhile; ?>
						<?php endif; ?>
						<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
					</div> <!-- col-md-8 end -->
					<div class="aside-style col-md-4">
						<?php dynamic_sidebar( 'sidebar-sone' ); ?>
						<?php dynamic_sidebar( 'sidebar-email' ); ?>
					</div>	

				</div><!-- .row -->
			</div>
		</div>
	</div><!-- Container end -->
</div><!-- Wrapper end -->
<?php wp_reset_postdata();?>
<?php get_footer(); ?>
