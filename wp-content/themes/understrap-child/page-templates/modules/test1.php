<section class="why-us-style">
	<div class="container">
		<div class="row">
			<?php $img = get_sub_field('test1_image'); 
				  $title = get_sub_field('test1_title');
				  $description = get_sub_field('test1_description');
				  $text = get_sub_field('test1_text');
			if ($img) {
			?>
			<div class="col-md-6 why-us-humbnail-style">
				<img src="<?= $img; ?>" alt="welcome_image" />
			</div>		
			<?php } ?>
			
			<div class="col-md-6">
				<?php if ($title) { ?>
					<p><?= $title; ?></p>
				<?php } ?>
				
				<h2><?= get_sub_field('test1_description'); ?></h2>
				<span class="why-us-about-style"><?= get_sub_field('test1_about'); ?></span>
				<p><?= get_sub_field('test1_text'); ?></p>
				<!--здесь джеес с плавным скролом, если не нужно, удалить-->
					<a class="why-us-link d-inline-block" href="#" >
						<i class="fa fa-angle-down fa-3x"></i>
					</a>
			</div>
		</div>
	</div>
</section>