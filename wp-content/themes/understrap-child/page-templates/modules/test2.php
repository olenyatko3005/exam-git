<section class="welcome-style">
	<div class="container">
		<div class="row">
			<div class="col-md-5 welcome-style-humbnail-style">
				<img src="<?= get_sub_field('test2_image'); ?>" alt="welcome_image" />
			</div>
			<div class="col-md-7">
				<h2><?= get_sub_field('test2_title'); ?></h2>
				<?= get_sub_field('test2_description'); ?>
			</div>
		</div>
		
		<div class="toggler">
		  <div id="effect" class="ui-widget-content ui-corner-all">
			<h3 class="ui-widget-header ui-corner-all">Animate</h3>
			<p>
			  Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
			</p>
		  </div>
		</div> 
		<button id="button" class="ui-state-default ui-corner-all">Toggle Effect</button>
		
	</div>
</section>