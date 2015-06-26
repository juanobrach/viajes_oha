<?php 


/* ----------------------------------------------------------------------------------- */
/* Styles Enqueue */
/* ----------------------------------------------------------------------------------- */

function oha_add_stylesheet() {
    if (!is_admin()) {
        wp_enqueue_style('oha_stylesheet', get_template_directory_uri() . "/style.css", '', '', 'all');
    } elseif (is_admin()) {
        
    }
}




 ?>