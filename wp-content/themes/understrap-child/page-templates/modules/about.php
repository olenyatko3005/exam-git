<section class="about-style">
	<div class="container">
		<div class="row">
			<div class="col-md-6 about-style-text">
				<h2 class="section-title-style"><?= get_sub_field('about_title'); ?></h2>
				<p class="about-style-text"><?= get_sub_field('about_description'); ?></p>
				<a class="about-link" href="<?= get_sub_field('about_link'); ?>"><?= get_sub_field('about_link_name'); ?></a>
			</div>
			<div class="col-md-6">
				<img src="<?= get_sub_field('about_image'); ?>" alt="about image" />
			</div>
		</div>
	</div>
</section>