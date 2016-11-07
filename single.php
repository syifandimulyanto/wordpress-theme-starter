<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<center><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				</a></center>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			
			<!-- /post title -->

			<!-- post details -->
			
			<!-- /post details -->
			    
    
  <hr class="featurette-divider">
    <div class="container">
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><?php the_title(); ?> <br></h2>
          <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
          <p class="lead"><?php the_content(); ?></p>
        </div>
        <div class="col-md-5">
         	 <?php the_post_thumbnail('medium_large', array('class' => 'featurette-image img-responsive center-block')); ?>
        </div>
        	<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>
      </div>
     </div>
  <hr class="featurette-divider">
			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>


























