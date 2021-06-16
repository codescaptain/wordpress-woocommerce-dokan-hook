<?php 
/**
/* Bu fonksiyon can simidi gibidir. Mesala aşağıdaki gibi dinamik değişen custom bir fiyatınız var.
/* $withoutShippingTotal=$order->get_total()-$order->get_total_shipping()-$order->get_shipping_tax();
/* çıktı şu şekilde olcaktır: 1500.02
/* Ama wp_price() fonksiyonunu kullanırsanız 
/* Çıktı: 1,500.02 TL şeklinde olacak ve woocommerce yapısına uyumlu olacaktır.
*/
wc_price(wp_kses_post($withoutShippingTotal))
