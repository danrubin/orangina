<?php
/*
Template Name: Mobile Index
*/
?>

<html>
<head>
	<title>Superfluous Mobile</title>
	
	<style type="text/css" media="screen">
	/* <![CDATA[ */
		ul#postlist li span {
			color:#999;
		}
	/* ]]> */
	</style>
	
</head>

<body>

<h1>Superfluous Mobile</h1>
<ul id="postlist">
	<?php
	$posts = get_posts('numberposts=10&order=DESC&orderby=post_date');
	foreach ($posts as $post) : start_wp(); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<!-- <br />
		<span><?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></span> --></li>
	<?php endforeach; ?>
</ul>

<p style="font-weight:bold;"><a href="">Archives &raquo;</a></p>

</body>
</html>