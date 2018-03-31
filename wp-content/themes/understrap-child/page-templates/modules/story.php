<section class="story-style" style="background-image:url('<?= get_sub_field('story_image'); ?>'); ">
	<div class="container">
		<?php $img = get_sub_field('story_image'); 
			  $title = get_sub_field('story_title');
			  $description = get_sub_field('story_description');
			  $text = get_sub_field('story_text');
		?>
		<?php if ($title) { ?>
				<h1 class="story-title"><?= $title; ?></h1>
		<?php } ?>
			
			<p class="story-text"><?= get_sub_field('story_description'); ?></p>
			<a class="story-link" href="<?= get_sub_field('story_url'); ?>"><?= get_sub_field('story_button'); ?></a>
	</div>
</section>