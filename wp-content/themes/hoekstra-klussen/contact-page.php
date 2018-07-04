<?php /*Template name: contact-page*/?>

<?php

get_header() ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="container">
      <div class="row">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
</div>
</div>
	</main><!-- .site-main -->

<div class="container">
  <div class="row">
    <div class="contact-push col-xs-6 col-md-6">
      <h3>Contact gegevens</h3>
      <li>Naam:Jeffrey Hoekstra</li>
      <li>E-mail:<a href="mailto:hoekstraklusbedrijf@hotmail.com">hoekstraklusbedrijf@hotmail.com</a></li>
      <li>Tel: +(31)6 36455436</li>
      <br>
      <h3>Adres</h3>
      <li>Adres: Hooizolder 343</li>
      <li>postcode: 9205 CP Drachten</li>
    </div>

    <div class="contact col-xs-6 col-md-6">
      <?php echo do_shortcode('[contact-form-7 id="56" title="Contact form 1"]');?>
    </div>


  </div>
</div>



<?php get_footer();?>
