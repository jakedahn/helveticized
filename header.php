<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?php wp_title(''); ?> <?php if ( !( is_404() ) && ( is_single() ) or ( is_page() ) or ( is_archive() ) ) { ?> &#8212; <?php } ?> <?php bloginfo('name'); ?></title>
        <meta name="Description" content="<?php bloginfo('description'); ?>" />
        <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    </head>

    <body>
        <div id="wrapper">
            <div id="header">
                <h1><a href="<?php echo bloginfo("url"); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> <span class="slash">/</span></h1>
            </div>

