<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * WARNING: This file is part of the core {THEME-NAME} framework. DO NOT edit this
 * file under any circumstances. Please do all modifications
 * in the form of a child theme.
 *
 * This file contains functions that may be included into the theme package. They are
 * placed withing this file for testing and separated from the production files 
 * for debugging. This file is bypassed by default if the DEBUG constant is set to false.
 *
 * @package     WordPress
 * @subpackage  {THEME-NAME}
 * @since       {THEME-NAME} {THEME-VERSION}
 */

/**
 * Remove login scripts
 *
 * Remove WordPress login stylesheets and avoid the style tag from loading.
 * @todo Check and confirm this works 100%
 */
if ( basename($_SERVER['PHP_SELF']) == 'wp-login.php' )
    add_action( 'style_loader_tag', create_function( '$a', "return null;" ) );

function your_login_stylesheet() { ?>
   <link rel="stylesheet" href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/login-styles.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'your_login_stylesheet' );