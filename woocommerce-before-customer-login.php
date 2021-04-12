<?php
add_action('woocommerce_before_customer_login_form', 'custom_login_text');

 function custom_login_text()
    {
        if (!is_user_logged_in()) {

            // The displayed (output)
            if (get_page_uri() !== 'kayit-ol') {
                echo '<p style="border:font-size: large;">' . __("<b>Üye Değil misiniz?</b> <b><a href='https://test.yachtier.com/kayit-ol/'>Hemen Üye Olun<a/></b>", "woocommerce") . '</p>';

            } else {
                echo '';
            }
        }
    }
