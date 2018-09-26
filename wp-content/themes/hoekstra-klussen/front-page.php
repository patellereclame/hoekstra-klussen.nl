<?php /* Template Name: Front-page */ ?>

<body onload="myFunction()" style="margin:0;">
	 <div id="loader"></div>
	  <div style="display:none;" id="myDiv" class="animate-bottom">

<?php get_header(); ?>

 <div class="container-images">
 		<div class="container">
 			<div class="row">
 				<div class="content">

 			<!--loop begins here -->
 <?php

		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;


		endwhile;
?>



 				</div>
 			</div>
 		</div>
 </div>

<div class="top-layer">
 <div class="container">
 	<div class="row">
 		<div class="content">

<h2 class="align-center">Recente projecten</h2>
<p class="align-center">
  Voor meer projecten kun je terecht onder projecten</p>

      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<div class="display-blog col-md-4">
      <a class="post-link" href="<?php echo get_permalink( get_option( 'content' ) ); ?>"><div class="box-overlay">
      <div class="post-display"><?php echo get_the_post_thumbnail( $post_id, 'large', array( 'class' => 'thumbnail' ) );?></div>
      <div class="title-overlay"><h2><?php the_title(); ?><h2></div>

      </div></a>
</div>


      <?php
      endwhile;
      wp_reset_postdata();
      ?>

 		</div>
 	</div>
 </div>
</div>



<div class="container-fullwidth">

		<div class="content">

      <div class="contact-layer">
        <p class="contact-tekst">
          Heb je nog vragen? Neem gerust contact met ons op!
        </p>

        <div class="btn-contact"><a href="#">Contact</a></div>


      </div>
    </div>


</div>



<?php get_footer(); ?>
