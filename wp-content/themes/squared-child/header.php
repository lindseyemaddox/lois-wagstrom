<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>	
<!--[if lte IE 6]>
<style type="text/css">
.page-item-6, page-item-33, page-item-39, page-item-115 { 
width:expression(document.body.clientWidth>154?"155px":"auto");
}
</style>
<![endif]-->
</head>	
<body>		
<div id="superduper">
<div id="principal">
	<div id="titulo">
		<h1><?php if ( is_single() || is_page() || is_category() || is_archive() || is_search() ) { ?>
<a href="<?php bloginfo('url'); ?>"><?php } ?><?php bloginfo('name'); ?>
<?php if ( !is_home() ) { ?></a><?php } ?></h1>		
<div id="blog-tag"><?php bloginfo('description'); ?></div>
				</div>
<div id="nav">

	<?php wp_page_menu( $args ); ?> 

</div>