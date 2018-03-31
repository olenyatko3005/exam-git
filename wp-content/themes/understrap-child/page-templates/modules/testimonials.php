<section class="testimonials-style">
	<div class="container">
		<h2 class="section-title-style"><?= get_sub_field('family_title'); ?></h2>

								
			<?php  
			$ids = get_sub_field('selected_posts', false, false);

			$query = new WP_Query(array(
				'post_type'      	=> array('testimonials'),
				'post__in'			=> $ids,
				'post_status'		=> 'any',
				'orderby'        	=> 'post__in',
			));
			
			?>
			
			 <?php if ( $query->have_posts() ) : ?>
				<ul class="row">
				<?php /* Start the Loop */
				while ($query-> have_posts() ) : $query->the_post();?>
					<li class="testimonials-info col-md-6">
						<div class="row">
							<a class="col-3" href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail();?></a>								
							<div class="col-9 testimonials-info-block">
								<?php the_excerpt(); ?>
								<span class="testimonials-name testimonials-bottom"><?php the_title(); ?></span>
								<span class="testimonials-bottom">- <?php the_field('testimonial_profession'); ?></span>
							</div>
						</div>
					</li>
				<?php endwhile; ?>
				</ul>
				<a class="testimonials-link" href="<?php echo get_post_type_archive_link( 'testimonials' ); ?>">See more</a>
			<?php wp_reset_postdata();?>
			<?php  endif; ?>

	</div>
</section>