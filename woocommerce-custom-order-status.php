 <?php public function add_WC_shipped_status($order_statuses)
    {
        $order_statuses["wc-shipped"] = "Kargolandı";
        $order_statuses['wc-refunded-progress']="İptal Talep Edildi";
        $order_statuses['wc-refunded-progress']="İade Talep Edildi";

        return $order_statuses;
    }

    public function register_WC_shipped_status()
    {
    //     register_post_status('wc-shipped ', array(
    //         'label' => __('Kargolandı', 'woocommerce'),
    //         'public' => true,
    //         'exclude_from_search' => false,
    //         'show_in_admin_all_list' => true,
    //         'show_in_admin_status_list' => true,
    //         'label_count' => _n_noop('Kargolandı <span class="count">(%s)</span>', 'Kargolandı <span class="count">(%s)</span>')
    //     ));

       // register_post_status('wc-refunded-progress ', array(
         //   'label' => __('İptal Talep Edildi', 'woocommerce'),
          //  'public' => true,
           // 'exclude_from_search' => false,
           // 'show_in_admin_all_list' => true,
           // 'show_in_admin_status_list' => true,
           // 'label_count' => _n_noop('İptal Talep Edildi <span class="count">(%s)</span>', 'İptal Talep Edildi <span class="count">(%s)</span>')
       // ));
        register_post_status('wc-refunded-progress', array(
            'label' => __('İade Talep Edildi', 'woocommerce'),
            'public' => true,
            'exclude_from_search' => false,
            'show_in_admin_all_list' => true,
            'show_in_admin_status_list' => true,
            'label_count' => _n_noop('İade Talep Edildi <span class="count">(%s)</span>', 'İade Talep Edildi <span class="count">(%s)</span>')
        ));
    }

add_action('init', 'register_WC_shipped_status');
add_filter('wc_order_statuses',  'add_WC_shipped_status', 10, 3);
