<section class="offering-style">
	<div class="container">
		<h2><?= get_sub_field('test3_title'); ?></h3>
		<p><?= get_sub_field('test3_description'); ?></p>
		<ul class="row">
			<?php  
			while ( have_rows('test3_section') ) : the_row();?>
				<li class="element-item-index col-md-4">
					<img class="work-image-style" src="<?php the_sub_field('test3_image');?>" />
					<h4><?= get_sub_field('test3_image_title'); ?></h4>
					<p><?= get_sub_field('test3_image_description'); ?></p>
				</li>
			<?php endwhile;	?>
		</ul>
	</div>
</section>