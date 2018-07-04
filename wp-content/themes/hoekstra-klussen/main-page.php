<?php /*Template name: main-page */

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="container">
      <div class="row">
        <div class="reclame-sing col-xs-6 col-md-6">
          <img class="sing" src="/wp-content/themes/hoekstra-klussen/images/sign.jpg"/>
        </div>

        <div class="content col-xs-6 col-md-6">
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
</div>
	</main><!-- .site-main -->



</div><!-- .content-area -->

<div class="gray-stroke">
  <div class="container">
    <div class="row">
      <div class="hexagon col-md-4">
        <div class="image-frame">
  <img class="icon" src="/wp-content/themes/hoekstra-klussen/images/hamer.png"/>
 </div>
</div>

      <div class="hexagon col-md-4">
        <div class="image-frame">
  <img class="icon" src="/wp-content/themes/hoekstra-klussen/images/briks.png"/>
    </div>
  </div>

      <div class="hexagon col-md-4">
        <div class="image-frame">
  <img class="icon" src="/wp-content/themes/hoekstra-klussen/images/digger.png"/>
        </div>
      </div>

    </div>
  </div>
</div>


<?php get_footer(); ?>
