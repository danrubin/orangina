<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="entry">
				<div class="page-badge"></div>
				<h2><?php the_title(); ?></h2>
			 	<div class="entry-body">
					<?php the_content(); ?>
				</div>
			 </div><!-- .entry -->
			
		</div></div></div><!-- #content divs -->

		<?php get_sidebar(); ?>
			
		<?php endwhile; endif; ?>

	<?php get_footer(); ?>

<?php wp_footer(); ?>