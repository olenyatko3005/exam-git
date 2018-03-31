<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_fluid_type' );
?>

<div class="wrapper" id="single-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="container">
			<?php the_breadcrumb(); ?>
			<article class="post-style">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				the_post_thumbnail(); ?>
				<h2><?php the_title(); ?></h2>			
				<div class="row">
					<div class="col-md-6">
						<?php the_field('project_video'); ?>
					</div>
					<div class="col-md-6">
						<?php the_content(); ?>
					</div>
				</div>	
				<?php endwhile; ?>
				<?php endif; ?>
			</article>
				
				<ul class="nav nav-tabs d-block">
					<li class="active"><a data-toggle="tab" href="#home">home</a></li>
					<li><a data-toggle="tab" href="#menu1"><?php the_field('tab2_name'); ?></a></li>
				</ul>
				<?php  
				while ( have_rows('tabs') ) : the_row();?>
			
				<div class="tab-content">
				  <div id="home" class="tab-pane in active">
					<p><?php the_field('tab1_description'); ?></p>
				  </div>
				  <div id="menu1" class="tab-pane fade">
					<h3>Menu 1</h3>
					<p><?php the_field('tab2_map'); ?></p>
				  </div>
				</div>
		<?php endwhile; ?>
		</div>
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
