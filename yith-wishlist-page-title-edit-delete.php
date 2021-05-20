<?php

class YithCustomPage
{
    public function __construct()
    {
        if (!function_exists('yith_wcwl_disable_title_editing')) {

            add_filter('yith_wcwl_wishlist_params', [$this, 'yith_wcwl_disable_title_editing']);
        }

    }


    function yith_wcwl_disable_title_editing($params)
    {
        $params['can_user_edit_title'] = false;

        return $params;
    }
}

new YithCustomPage;
?>
