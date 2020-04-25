<?php

/*
Here’s how to embed a page created with Visual Composer onto another page with the page CSS styles included. You can add this code to either the header or footer file of your theme, or another theme file for that matter.

First step: note the id of the page to be embedded.

Use this snippet and put the id into the first line of code as indicated below.

Include a Visual Composer Page as a header, footer or sidebar
*/

$id = 899;	//Assumes the page id to be embedded is 899
$p = get_page($id);


//Loads page styles
$shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
if ( ! empty( $shortcodes_custom_css ) ) {
	echo '<style type="text/css" data-type="vc_shortcodes-custom-css-'.$id.'">';
		echo $shortcodes_custom_css;
	echo '</style>';
}

//Loads page content
echo apply_filters('the_content', $p->post_content);

?>