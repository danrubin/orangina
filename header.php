<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Language" content="en-us" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	<meta name="copyright" content="(c) Copyright 2001-2007 Dan Rubin" />
	
	<title><?php wp_title(' '); ?><?php if ( is_home() ) { ?><?php } else { ?> @ <?php } ?><?php bloginfo('name'); ?></title>
	
	<?php // get naked, all the cool kids are doing it...
	$DustinsNakedDay_isToday = (date('md')=='0409');
	$DustinsNakedDay_allPages = true; // false for just the home page
	$DustinsNakedDay_getNaked = ($DustinsNakedDay_isToday && (is_home() || $DustinsNakedDay_allPages));
	if(!$DustinsNakedDay_getNaked) { ?>
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<?php // april fool's day silliness
	if(date('md')=='0401') { ?>
	<style type="text/css" media="screen">
		html h1#logo a {
			background-image:url(/wp/wp-content/themes/orangina/i/logo-superfluousbits.png);
		}
	</style>
	<?php } //end april fool's IF ?>
	
	<?php // pink for october
	if(date('m')=='10') { ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/c/pinkforoctober.css" type="text/css" media="screen" />
	<?php } //end pink for october IF ?>
	
	<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/c/ie6.css" />
	<![endif]-->
	
	<!--[if gte IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/c/ie7.css" />
	<![endif]-->
	
	<!-- sIFR -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sIFR/sIFR-screen.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/sIFR/sIFR-print.css" type="text/css" media="print" />

	<?php // pink for october
	if(date('m')=='10') { ?>
	<script src="<?php bloginfo('template_directory'); ?>/sIFR/sifr-pink.js" type="text/javascript"></script>
	<?php }else{ ?>
	<script src="<?php bloginfo('template_directory'); ?>/sIFR/sifr.js" type="text/javascript"></script>
	<?php } //end pink for october IF ?>
	
	<script src="<?php bloginfo('template_directory'); ?>/sIFR/sifr-addons.js" type="text/javascript"></script>
	
	<?php } //end naked day IF - yes, this IS where it's supposed to be. ?>

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/superfluousbanter<?php //bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- openID -->
	<link rel="openid.server" href="http://www.myopenid.com/server" />
	<link rel="openid.delegate" href="http://danrubin.myopenid.com/" />
	<meta http-equiv="X-XRDS-Location" content="http://danrubin.myopenid.com/xrds" />
	
	<!-- yes, I'm a stats whore -->
	<script src="/mint/?js" type="text/javascript"></script>

	<?php
	//error_reporting(E_ALL);
	?>
<? /*
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
	</script>
	<script type="text/javascript">
	_uacct = "UA-255818-1";
	urchinTracker();
	</script>
*/ ?>
	<script src="http://liquidfold.net/js/superfluousbanter" type="text/javascript"></script>
	
	<?php wp_head(); ?>
</head>
<body>
<?php
if($DustinsNakedDay_getNaked) { ?>
<h3>What happened to the design?</h3>
<p>To know more about why styles are disabled on this website visit the <a href="http://naked.dustindiaz.com" title="Web Standards Naked Day Host Website">Annual CSS Naked Day</a> website for more information.</p>

<?php } ?>
<?php /* <p id="ie6message"><strong>Welcome to users of IE 6 (and older).</strong> The full content of this site is available to you, but you must use <a href="http://mozilla.com/firefox/">Firefox</a> or upgrade to IE 7 or newer to properly view the design of this site.</p> */ ?>

	<div id="wrapper">
	<div id="waves"><!-- background 'flair' -->
	
		<div id="nav">
			<h1 id="logo"><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
			
			<ul>
				<li id="nav-home"><a href="/">homepage</a></li>
				<li id="nav-about"><a href="/about/">about sb</a></li>
				<li id="nav-archives"><a href="/archives/">archives</a></li>
				<li id="nav-contact"><a href="/contact/">contact</a></li>
			</ul>
			
			<div id="search">
				<h3>search</h3>
				<form method="get" id="searchform" action="http://superfluousbanter.org/">
					<fieldset>
					<input type="text" value="" size="35" name="s" id="s" /> <input type="image" src="<?php bloginfo('template_directory'); ?>/i/button_search.gif" id="searchsubmit" value="Search" />
					</fieldset>
				</form>
			</div>
			
			<div id="version"><!-- site version number image - not important, just a visual thang --></div>
		</div>
	
		<div id="content-wrapper" class="clearfix">
				
			<div id="content"><div id="content2"><div id="content3">