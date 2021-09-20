<?php
add_filter( 'dokan_store_tabs', array( $this, 'add_vendor_biography_tab' ), 10, 2 );

  /**
     * Add vendor biography tab
     *
     * @param array $tabs
     * @param int $store_id
     *
     * @since 2.9.10
     *
     * @return array
     */
    public function add_vendor_biography_tab( $tabs, $store_id ) {
        $store_info = dokan_get_store_info( $store_id );

        if ( empty( $store_info['vendor_biography'] ) ) {
            return $tabs;
        }

        $tabs['vendor_biography'] = [
            'title' => apply_filters( 'dokan_vendor_biography_title', __( 'Vendor Biography', 'dokan' ) ),
            'url'   => dokan_get_store_url( $store_id ) . 'biography'
        ];

        return $tabs;
    }
