<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				
				<?php
				return;
            }
        }

		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->
<div id="comment-wrapper">
	<div id="comments"><div id="comments2">
		
<?php if (!$comments) : // this is my customization of the 'no-comments' logic for sb ?>
	<?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		<h2><a href="#respond">Start the discussion (be the first to comment)</a></h2>
	<?php elseif ('closed' == $post->comment_status) : // comments are closed ?>
		<!-- If comments are closed. -->
		<h2>Comments are now closed</h2>
	<?php endif; ?>
<?php elseif ($comments) : ?>
	<?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, and there are comments. -->
		<h2><a href="#respond">Join the discussion <?php comments_number('', '(1 comment already)', '(% comments already)' );?></a></h2>
	<?php elseif ('closed' == $post->comment_status) : // comments are closed ?>
		<!-- If comments are closed. -->
		<h2>Comments are now closed</h2>
	<?php endif; ?>
<?php endif; ?>


<?php if ($comments) : ?>
	<ol id="comment-list">

	<?php foreach ($comments as $comment) : ?>
		
		<li class="clearfix <?php echo $oddcomment; ?><?php author_highlight(); ?>" id="comment-<?php comment_ID() ?>">
			<span class="gravatar"><a href="<?php comment_author_url(); ?>">
			    <?php // pink for october
            	if(date('m')=='10') { ?>
            	<img src="<?php gravatar("", 40, "http://superfluousbanter.org/gravatar/default-pink.png"); ?>" alt="" />
            	<?php }else{ ?>
            	<img src="<?php gravatar("", 40, "http://superfluousbanter.org/gravatar/default.png"); ?>" alt="" />
            	<?php } //end pink for october IF ?>
			    </a></span>
			<span class="comment-header">
				<?php edit_comment_link('edit','<span class="comment-editlink">[',']</span>'); ?>
				<cite>
					<a href="<?php comment_author_url(); ?>" rel="external nofollow"><?php comment_author(); ?> (<?php if (function_exists('time_since')) {
					echo time_since(abs(strtotime($comment->comment_date_gmt . " GMT")), time()) . " ago";
					} else {
					the_time('F jS, Y');
					} ?>) <span>&rarr; <?php comment_author_url(); ?></span></a>
				</cite>
			</span>
			
			<span class="comment-body">
				<?php if ($comment->comment_approved == '0') : ?>
					<p><em>Your comment is awaiting moderation.</em></p>
				<?php endif; ?>
				
				<?php comment_text() ?>
			</span>
		</li>

	<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>

	</ol>

<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

	<h3 id="respond">Your thoughts, por favor</h3>

	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

	<?php if ( $user_ID ) : ?>

	<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

	<?php else : ?>

	<p><label for="author">Name <?php if ($req) echo "<em>(required)</em>"; ?></label><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" /></p>

	<p><label for="email">Mail <span>(will not be published)</span> <?php if ($req) echo "<em>(required)</em>"; ?></label><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" /></p>

	<p><label for="url">Website</label><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" /></p>

	<?php endif; ?>

	<p id="allowedtags"><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>

	<p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>
	
	<?php // show_subscription_checkbox(); //- turned off because something wasn't working after the WP2.5 update ?>
	
	<p><!-- <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" /> -->
	<?php // pink for october
	if(date('m')=='10') { ?>
	<input type="image" src="<?php bloginfo('template_directory'); ?>/i/pink/button_submitcomment.png" name="submit" id="submit" tabindex="5" value="Submit Comment" />
	<?php }else{ ?>
	<input type="image" src="<?php bloginfo('template_directory'); ?>/i/button_submitcomment.png" name="submit" id="submit" tabindex="5" value="Submit Comment" />
	<?php } //end pink for october IF ?>
	
	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	</p>
	<?php do_action('comment_form', $post->ID); ?>

	</form>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>

	</div></div>
</div><!-- #comment-wrapper -->