 add_action('woocommerce_registration_redirect', [$this, 'custom_registration_redirect'], 2);
 
   //woocommerce register yönlendirme
    public function custom_registration_redirect()
    {
        $user_role = wp_get_current_user()->roles[0];
        //tekne_kaptani , tekne_tedarikci

        if ($user_role == "tekne_sahibi") {
            return home_url('/uye-tekne-sahibi');
        }
        return home_url('/');

    }
