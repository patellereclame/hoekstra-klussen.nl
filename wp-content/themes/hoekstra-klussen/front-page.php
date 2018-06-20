<?php /* Template Name: Front-page */ ?>

<?php

 get_header();

 ?>

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


 <div class="container">
 	<div class="row">
 		<div class="content">

 		</div>
 	</div>
 </div>


<?php get_footer(); ?>
 