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

<div class="top-layer">
 <div class="container">
 	<div class="row">
 		<div class="content">



      <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

      <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

<div class="display-blog col-md-4">
      <a class="post-link" href="<?php the_permalink() ?>"><div class="box-overlay">
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


<?php get_footer(); ?>
