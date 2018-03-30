<section class="client-style">
	<div class="container">
		<h2><?= get_sub_field('test4_title'); ?></h2>
		<div class="">
			<?php  	
			while ( have_rows('test4_group') ) : the_row();?>
				<a href="<?php the_sub_field('test4_url');?>">
					<img class="saturate" src="<?php the_sub_field('test4_images');?>" />
				</a>
			<?php endwhile;	?>
								
			<?php  
			// get only first 3 results
			$ids = get_sub_field('selected_posts', false, false);

			$query = new WP_Query(array(
				'post_type'      	=> array('post','test'),
				'post__in'			=> $ids,
				'post_status'		=> 'any',
				'orderby'        	=> 'post__in',
			));
			
			?>
			
			 <?php if ( $query->have_posts() ) : ?>
				<ul class="row">
				<?php /* Start the Loop */
				while ($query-> have_posts() ) : $query->the_post();?>
					<li class="col-lg-4 col-sm-6">
						<?php the_post_thumbnail();?>									
						<h2><a href="<?php echo get_permalink(); ?>">
								<?php the_title(); ?>
						</a></h2>
						<time class="datetime"><?php echo get_the_date('d-M-Y'); ?></time>	
					</li>
				<?php endwhile; ?>
				</ul>
			<?php wp_reset_postdata();?>
			<?php  endif; ?>
		</div>
	</div>
</section>