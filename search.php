<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
			<div class="entry">
				<div class="page-badge"></div>
				<h2>Search Results</h2>
			 	<div class="entry-body">
					<p>We were able to find the following matches:</p>
					
				<?php while (have_posts()) : the_post(); ?>

					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
					<p class="postmetadata">Posted on <?php the_time('l, F jS, Y') ?> in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

				<?php endwhile; ?>
					
				</div>
			 </div><!-- .entry -->
		
		</div></div></div><!-- #content divs -->

		<?php get_sidebar(); ?>
		
	<?php else : ?>
		
		<div class="entry">
			<div class="date-badge"></div>
			<h2>No posts found. Try a different search?</h2>
		 	<div class="entry-body">
				<p>We weren't able to find anything that matched your search terms. Care to try again?</p>
				<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			</div>
		 </div><!-- .entry -->
		
	</div></div></div><!-- #content divs -->
	
	<?php get_sidebar(); ?>

	<?php endif; ?>

<?php get_footer(); ?>