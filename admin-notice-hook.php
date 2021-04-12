<?php

// action 
add_action( 'all_admin_notices', 'mycustomlink',900 );


//callback function

  function mycustomlink() {
        $user_role=wp_get_current_user()->roles[0];
//        echo $user_role; // birden  fazla kapasiteye sahipse in array kullan
        if($user_role!=="administrator") {
        echo '<a href="'.home_url().'" class="button button-primary" >Ansayfaya Git </a>';
        }

    }
