<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- main -->
	<main id="main">
		<div class="row">
<div class="small-12 large-8 large-offset-2 columns end">
<h3 class="rule">An exquisite bed and breakfast retreat in beautiful Yorkshire countryside, close to Harrogate, opening on the Tour de Yorkshire weekend, 1st May 2015.</h3>
<h4>Indulge yourself in elegant rooms and unwind in enchanting surroundings.</h4>
<p>Our newly converted barn opens onto a young orchard, planted with plum, greengage and damson trees. Set amongst wild flowers and long grass.  Our rooms have been designed with the beautiful local area in mind, celebrating both colour and texture from the environment, natural wool carpets and hand made throws all echoing the colours of our local heather and moor land.  Our modern bathrooms boast free standing baths and large walk in showers.</p>
<p>For breakfast we serve eggs from our chickens. The sausages, bacon, black pudding and smoked fish is all sourced from some of our wonderful local artisan producers. The bread, granola, muesli and preserves are all made in house, as are our tea time treats. </p>
<section id="booking">
	<div class="content">
<h4 class="rule">Book with us during May or June and enjoy <strong>10% discount</strong> on your stay</h4>
<dl><dt>TO MAKE YOUR RESERVATION CALL:</dt><dd><a href="tel:01423771421" class="tel">01423 771 421</a></dd><dt>OR EMAIL US AT:</dt><dd><a href="mailto:bookings@roseberrycottage.co.uk">bookings@roseberrycottage.co.uk</a></dd></dl>
</div>
</section>
<section id="gallery">
	<div class="row">
<div class="small-12 medium-6 columns"><div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/flowers.jpg" /></div></div>
<div class="small-12 medium-6 columns"><div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/chickens.jpg" /></div></div>
<div class="small-12 medium-6 columns"><div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/cycling.jpg" /></div></div>
<div class="small-12 medium-6 columns"><div class="image"><img src="<?php echo get_template_directory_uri(); ?>/images/harrogate.jpg" /></div></div>
	</div>
</section>
<section id="subscribe">
	<h4>Join our mailing list and stay in touch with the latest
offers and news at Roseberry Cottage</h4>
<?php gravity_form(1, false, false, false, '', true, 1);  ?>

</section>
<nav class="social"><ul><li><a href="" class="twitter" title="Follow us on Twitter">Twitter</a></li><li><a href="" target="_blank" class="facebook" title="Like us on Facebook">Facebook</a></li></ul></nav>
</div>
</div>
</main>
<?php endwhile ?>
<?php endif ?>
<?php get_footer() ?> 