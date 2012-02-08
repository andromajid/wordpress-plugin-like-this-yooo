<?php

/*
  Plugin Name: like this yo
  Plugin URI: http://www.andromajid.com/
  Description: plugin buat like this yo
  Author: andro majid
  Version: 0.1
  Author URI: http://www.andromajid.us/
 */
add_filter('the_content', 'like_this_get_button');

// "Private" internal functions named with a leading underscore
function like_this_get_button($content) {
  $content = $content . "<script type=\"text/javascript\">
document.write ('<iframe src=\"http://www.facebook.com/plugins/like.php?href=' + escape (location.href) + '&action=like&layout=standard&show_faces=true&width=100%&font=arial&colorscheme=light\"allowTransparency=\"true\"frameborder=\"0\"scrolling=\"no\"style=\"border:none; overflow:hidden; width:100%; height:25px;\"></iframe>'); </script>";
  return $content;
}