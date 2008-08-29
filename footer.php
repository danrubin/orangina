		</div><!-- #content-wrapper -->

		<div id="footer-wrapper">
			<div id="footer" class="clearfix">
				<div class="module" id="footer-about">
					<h4><a href="/about/" title="About Superfluous Banter">about superfluous banter</a></h4>
					<p>has been designed, coded, browser-tested and is written by <a href="/about/">Dan Rubin</a>, is powered by <a href="http://wordpress.org/">WordPress</a> (<a href="/wordpress/wp-admin/">login</a>) and <a href="http://dreamhost.com/r.cgi?webgraph">Dreamhost</a>, was styled in <a href="http://macromates.com/">TextMate</a> and given some good old fashioned graphic lovin? in <a href="http://adobe.com/photoshop">Photoshop</a>.</p>

					<p>It is lovingly crafted with <a href="http://validator.w3.org/check/referer">xhtml</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">css</a></p>

					<p>Its content, design and code is Copyright &copy;2001-2008 Daniel S. Rubin (unless otherwise noted). ISSN 1543-3994</p>
				</div>

				<div class="module" id="footer-recent">
					<h4><a href="/archives/" title="peruse the archive index &rarr;">recent banter</a></h4>
					<ul>
						<?php
						$posts = get_posts('numberposts=6&order=DESC&orderby=post_date&offset=0');
						foreach ($posts as $post) : start_wp(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <span>Posted <?php the_time('d.m.y'); ?> // <?php comments_number('0 comments', '1 comment', '% comments'); ?></span></a></li>
						<?php endforeach; ?>
					</ul>
				</div>

				<div class="module" id="footer-links">
					<h4><a href="http://ma.gnolia.com/people/danrubin/tags/ephemera" title="view more ma.gnolia links &rarr;">ma.gni.ficent</a></h4>
					<div id="linkswrapper">					
					    <?php //magnolia('danrubin',6,1,0,0,'ephemera','',0,'lite') ?>
					    
						<?php magnolia_links('danrubin') ?>
						
						<?
						/* old delicious links
						
						<script type="text/javascript" src="http://del.icio.us/feeds/json/danrubin/ephemera?count=6"></script>
						<script type="text/javascript">

						var ul = document.createElement('ul')
						for (var i=0, post; post = Delicious.posts[i]; i++) {
							var li = document.createElement('li')
							var a = document.createElement('a')
							var span = document.createElement('span')
							a.setAttribute('href', post.u)
							a.appendChild(document.createTextNode(post.d))
							span.appendChild(document.createTextNode(post.n))
							a.appendChild(span)
							li.appendChild(a)
							ul.appendChild(li)
						}
						document.getElementById('linkswrapper').appendChild(ul)
						</script>
						
						*/
						?>
					</div>
				</div>
				
				<div class="module" id="footer-extra">
					<?php // pink for october
					if(date('m')=='10') { ?>
					<h4><a href="http://pinkforoctober.org/" title="Why has this site gone pink?">pink for october</a></h4>
					<a id="sb-icon" href="http://pinkforoctober.org/" title="Why has this site gone pink?">Why has this site gone pink?</a>
					<?php }else{ ?>
					<h4><a href="/about/orangina/" title="About this theme">orange rules</a></h4>
					<a id="sb-icon" href="/about/orangina/" title="About this theme">About this theme</a>
					<?php } //end pink for october IF ?>
				</div>
			</div><!-- #footer -->
		</div><!-- #footer-wrapper -->
	</div><!-- #waves -->
	</div><!-- #wrapper -->
<!-- crazyegg script:
	<script type="text/javascript" src="http://cetrk.com/pages/scripts/0004/0625.js"></script> -->
</body>
</html>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->