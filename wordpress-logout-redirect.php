<?php
add_action('wp_logout','ps_redirect_after_logout');
function ps_redirect_after_logout(){
         wp_redirect( 'Your redirect URL here' );
         exit();
}
