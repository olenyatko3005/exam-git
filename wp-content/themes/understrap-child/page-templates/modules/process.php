<section class="process-style">
	<div class="container">
		<h2 class="section-title-style"><?= get_sub_field('process_title'); ?></h3>
		<ul class="row">
			<?php  
			while ( have_rows('process_section') ) : the_row();?>
				<li class="element-item-index col-md-4">
					<img class="work-image-style" src="<?php the_sub_field('process_image');?>" />
					<h3 class="process-image-title-style"><?= get_sub_field('process_image_title'); ?></h3>
					<p class="process-text-style"><?= get_sub_field('process_image_description'); ?></p>
				</li>
			<?php endwhile;	?>
		</ul>
	</div>
</section>