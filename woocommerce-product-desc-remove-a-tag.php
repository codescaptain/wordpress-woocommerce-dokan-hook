<?php 
//without class
 add_filter( 'the_content', filter_the_content_in_the_main_loop');

  function filter_the_content_in_the_main_loop( $content ) {

        if ( is_single() ) {
          $content=preg_replace('#<a.*?>(.*?)</a>#i', '\1', $content);
         $content = strip_tags($content, '<a>');
}

        return $content;
    }
