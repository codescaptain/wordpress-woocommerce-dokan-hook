<?php 
add_action('woocommerce_registration_redirect', [$this, 'custom_registration_redirect'], 2);
 
   //woocommerce register yönlendirme
    public function custom_registration_redirect()
    {
        $user_role = wp_get_current_user()->roles[0];

        if ($user_role == "rol") {
            return home_url('/custom-link');
        }
        return home_url('/');

    }
