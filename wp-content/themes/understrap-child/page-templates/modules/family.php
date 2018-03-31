<section class="family-style">
	<div class="container">
		<h2 class="section-title-style"><?= get_sub_field('family_title'); ?></h2>

								
			<?php  
			// get only first 3 results
			$ids = get_sub_field('selected_posts', false, false);

			$query = new WP_Query(array(
				'post_type'      	=> array('family'),
				'post__in'			=> $ids,
				'post_status'		=> 'any',
				'orderby'        	=> 'post__in',
			));
			
			?>
			
			 <?php if ( $query->have_posts() ) : ?>
				<ul class="row">
				<?php /* Start the Loop */
				while ($query-> have_posts() ) : $query->the_post();?>
					<li class="family-info col-lg-4 col-sm-6">
						<div class="family-img">
							<?php the_post_thumbnail(); ?>
							<div class="overlay">
								<a href="<?php echo get_the_permalink(); ?>">Explore</a>
							</div>
						</div>
						
						<h2 class="family-info-title-style"><?php the_title(); ?></h2>
						<?php the_excerpt(); ?>
					</li>
				<?php endwhile; ?>
				</ul>
				<a class="family-link" href="<?php echo get_post_type_archive_link( 'family' ); ?>">See more</a>
			<?php wp_reset_postdata();?>
			<?php  endif; ?>

	</div>
</section>