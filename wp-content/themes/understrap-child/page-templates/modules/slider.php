<section class="slider">
	<div class="container-fluid">
		<header class="index-header-section">
			<h3><?= get_sub_field('slider_title'); ?></h3>
		</header>
		<div class="slick-client">
			<?php  
			while ( have_rows('slider') ) : the_row();?>
			<div>
				<a href="<?php the_sub_field('url_slide');?>">
				<img src="<?php the_sub_field('image_slide');?>"></a>
				<p><?php the_sub_field('description_slide');?></p>
			</div>
			<?php endwhile;	?>
		</div>
	</div>
</section>