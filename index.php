<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		
		<?php $loopcount=0 ?>
		
		<?php while (have_posts()) : the_post(); ?>
			
			<?php $loopcount = $loopcount+1 ?>
			
			<div class="entry" id="post-<?php the_ID(); ?>">
				<div class="date-badge">
					<span class="date-month"><?php the_time('M') ?><?php //$str = the_time('M');$str = strtoupper($str);echo($str); ?></span>
					<span class="date-day"><?php the_time('d') ?></span>
				</div>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<p class="entry-stats">posted <?php if (function_exists('time_since')) {
				echo time_since(abs(strtotime($post->post_date_gmt . " GMT")), time()) . " ago";
				} else {
				the_time('F jS, Y');
				} ?><!-- in <?php the_category(', '); ?>--><?php if ('open' == $post->comment_status) : ?> // <span class="comment-count"><?php comments_popup_link('no comments yet', '1 comment', '% comments'); ?></span><? else : ?> // <span class="comment-count">comments are closed</span><?php endif; ?><?php if ('open' == $post->comment_status) : ?> // <a href="<?php the_permalink() ?>#respond">add yours &raquo;</a><?php endif; ?></p>
			 	<div class="entry-body">                                                                       
					<?php the_excerpt(); ?>
				</div>
				<p class="continue-reading"><a href="<?php the_permalink() ?>#more<?php // the_ID(); ?>">continue reading <strong>&#8220;<?php the_title(); ?>&#8221;</strong></a></p>
			 </div><!-- .entry -->
				
				<div class="homerule"></div>
				<?
				/* commented for now - only needed with 2 posts on the homepage
				if ($loopcount==1){
					echo'<hr id="homerule"></hr>';
				}
				*/
				?>
	
		<?php endwhile; ?>
		
		</div></div></div><!-- #content divs -->
		
		<?php get_sidebar(); ?>
		
		
		<?php else : ?>
			<div class="entry">
				<div class="date-badge"></div>
				<h2>Not Found</h2>
			 	<div class="entry-body">
					<p>Sorry, but you are looking for something that isn't here.</p>
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>
				</div>
			 </div><!-- .entry -->
			
		</div></div></div><!-- #content divs -->
		
		<?php get_sidebar(); ?>
		
		
		<?php endif; ?>
		
	<?php get_footer(); ?>

<?php wp_footer(); ?>