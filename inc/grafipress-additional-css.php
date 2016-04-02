<?php
function my_styles_method() {
    if( $custom_css = get_option( 'custom_css' ) ) :
        wp_add_inline_style( 'grafipress-styles-css', $custom_css );
    else:
            return;
    endif;
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );