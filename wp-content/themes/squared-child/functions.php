<?php
/* Customizing the login for the client - make'm feel special! */
/* Make sure to upload the custom folder to the folder 'resources' or where you want it and edit the logo on the psd */

function lsm_custom_login(){
	$styledirectory=substr(get_stylesheet_uri(),0,-9);
		echo '<link rel="stylesheet" type="text/css" href="'.$styledirectory.'resources/custom-login/custom-login.css" />';
	}
	add_action('login_head','lsm_custom_login');
	
?>
<?php remove_action('wp_head','wp_generator');?>