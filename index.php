<?php get_header(); ?>


	<?php 
	// opening of the loop:
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	?>
	    <section class="row">
	      <div class="small-12 columns text-center">
	        <div class="leader">
	          <h1>Etiam Mollis Sit Gratt Spore.</h1>
	          <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue.</p>        
	        </div>
	      </div>
	    </section>
	<?php
	// closing of the loop
	endwhile; else; ?>
		<p><?php _e('sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
<?php get_footer(); ?>