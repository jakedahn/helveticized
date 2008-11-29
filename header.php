<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head profile="http://gmpg.org/xfn/11">
    <title><?php wp_title(''); ?> <?php if ( !( is_404() ) && ( is_single() ) or ( is_page() ) or ( is_archive() ) ) { ?> &middot; <?php } ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <meta name="Description" content="Jake Dahn's personal blog.'" />
    <meta name="Robots" content="index,all" />
    <meta name="Keywords" content="Jake, Dahn, Jake Dahn, personal blog, hyperbole design, hyperboledesign" />
    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    <link rel="start" href="<?php echo get_settings('home'); ?>/" title="<?php bloginfo('name'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>" />
  </head>
  <body>
  <div id="wrapper">
    <div id="header">
      <h1><a href="<?php echo bloginfo("url"); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span class="slash"> /</span></h1>
    </div>
