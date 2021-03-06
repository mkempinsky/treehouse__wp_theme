<?php get_header(); ?>


<section class="row">
	<div class="small-12 columns text-center">
		<div class="leader">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		  <h1><?php the_title(); ?></h1>
		  <p><?php the_content(); ?></p>
		  <p><?php echo date('m/d/y'); ?></p>
		  <p>By: <?php the_author(); ?></p>

		<?php endwhile; else: ?>

			<p><?php _e('sorry, no posts matched your criteria.'); ?></p>

		<?php endif; ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>