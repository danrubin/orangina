<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="entry" id="post-<?php the_ID(); ?>">
				<div class="date-badge">
					<span class="date-month"><?php the_time('M') ?></span>
					<span class="date-day"><?php the_time('d') ?></span>
				</div>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="entry-stats">posted <?php if (function_exists('time_since')) {
				echo time_since(abs(strtotime($post->post_date_gmt . " GMT")), time()) . " ago";
				} else {
				the_time('F jS, Y');
				} ?><!-- in <?php the_category(', '); ?>--> // <span class="comment-count"><a href="#comments"><?php comments_number('no comments yet', '1 comment', '% comments'); ?></a></span><?php if ('open' == $post->comment_status) : ?> // <a href="#respond">add yours &raquo;</a><?php else : ?> // comments are closed<?php endif; ?></p>
			 	<div class="entry-body">
					<?php the_content(); ?>
				</div>
			 </div><!-- .entry -->
			
		</div></div></div><!-- #content divs -->
			
		<?php get_sidebar(); ?>
		
		<?php comments_template(); ?>
		
		<?php endwhile; else: ?>
			<div class="entry">
				<div class="date-badge"></div>
				<h2>Not Found</h2>
			 	<div class="entry-body">
					<p>Sorry, no posts matched your criteria.</p>
				</div>
			 </div><!-- .entry -->
			
		</div></div></div><!-- #content divs -->
		
		<?php get_sidebar(); ?>
		
		<?php endif; ?>
		
	<?php get_footer(); ?>

<?php wp_footer(); ?>