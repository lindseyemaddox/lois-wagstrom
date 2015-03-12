<?php get_header(); ?>

	<div id="bloco-posts">
<?php if (is_home() || is_front_page()) : ?>
<div>
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="641" height="385" id="wagstrom-home" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="<?php echo home_url( '/' ) ?>wp-content/uploads/2010/10/wagstrom-home.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="<?php echo home_url( '/' ) ?>wp-content/uploads/2010/10/wagstrom-home.swf" quality="high" bgcolor="#ffffff" width="641" height="385" name="wagstrom-home" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object></div>
<?php endif; ?>
		<?php if (have_posts()) : ?>			
		<?php while (have_posts()) : the_post(); ?>		
	<div class="post" id="post-<?php the_ID(); ?>">
<?php if (is_home() || is_front_page()) : ?>
<h2></h2>
		<?php else: ?><h2><?php the_title(); ?></h2>
<?php endif; ?>
		<?php the_content('Continue reading &raquo;'); ?>
			</div>
			<div class="meta">
					<?php endwhile; ?>
			</div>
					<?php else : ?>
			<div class="post">
		<h2>Not found!</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
			</div>
					<?php endif; ?>

				</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>