<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="Whomwah.com RSS Feed" href="http://feeds.feedburner.com/whomwah" />
<link rel="openid.server" href="http://idproxy.net/openid/server/" />
<link rel="openid.delegate" href="http://whomwah.idproxy.net/" />
<?php wp_head(); ?>
</head>
<body>
<div id="page">

<?php if (is_single()) : ?>
<div id="accessible-top"><a href="#comments" title="Skip down to the comments">skip to comments</a></div>
<?php else : ?>
<div id="accessible-top"><a href="#extras" title="Skip down past the main content">skip main content</a></div>
<?php endif; ?>

<div id="header">
	<div id="headerimg">
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>

<hr />
