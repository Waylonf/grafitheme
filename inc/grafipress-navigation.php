<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * WARNING: This file is part of the core {THEME-NAME} framework. DO NOT edit this
 * file under any circumstances. Please do all modifications
 * in the form of a child theme.
 *
 * This file contains functions required to ehnace the navigation
 *
 * @package     WordPress
 * @subpackage  {THEME-NAME}
 * @since       {THEME-NAME} {THEME-VERSION}
 */

/**
 * Simple helper function to add menu item objects
 * 
 * @param $title      - menu item title
 * @param $url        - menu item url
 * @param $order      - where the item should appear in the menu
 * @param int $parent - the item's parent item
 * @return \stdClass
 */ 
function add_loginout_link( $items, $args ) {
    
    if (is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="' .  __( 'Log Out', 'TEXTDOMAIN' ) . '" href="'. wp_logout_url() .'"><i class="fa fa-fw fa-lock"></i></a></li>';
    }
    elseif (!is_user_logged_in() && $args->theme_location == 'primary') {
        $items .= '<li><a rel="nofollow" data-toggle="tooltip" data-placement="bottom" title="' .  __( 'Login to manage this site', 'TEXTDOMAIN' ) . '" href="'. site_url('wp-login.php') .'"><i class="fa fa-fw fa-lock-o"></i></a></li>';
    }

    // Add edit page menu item to main navigation
    if (is_user_logged_in() && $args->theme_location == 'primary') :
        $items .= '<li><a rel="nofollow" data-toggle="tooltip" data-placement="bottom" href="'. get_edit_post_link() .'" title="' .  __( 'Edit this page', 'TEXTDOMAIN' ) . '"><i class="fa fa-fw fa-edit"></i></a></li>';
    endif;

    if (is_user_logged_in() && $args->theme_location == 'primary') :
        $items .= '<li><a rel="nofollow" data-toggle="tooltip" data-placement="bottom" href="'. get_admin_url() .'" title="' .  __( 'Go to the Dashboard section', 'TEXTDOMAIN' ) . '"><i class="fa fa-fw fa-dashboard"></i></a></li>';
    endif;

    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );

function add_edit_page_link( $items, $args ) {
    

    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_edit_page_link', 10, 2 );