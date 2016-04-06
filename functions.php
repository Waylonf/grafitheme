<?php
/**
 * Grafipress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package     WordPress
 * @subpackage  {THEME-NAME}
 * @since       {THEME-NAME} {THEME-VERSION}
 *
 * @todo Remove Constant variables in functions.php used accross the site
 * @todo Check for consistant docblock headers in all files
 * @todo Wrap all function in child theme friendly check function
 * @todo Create Ninja-Forms hooks to add Bootstrap css classes
 * @todo Check Customizer files for consistancy and correct file names
 * @todo Add lightbox script to package
 */

/**
 * Load external libraries required by Grafipress.
 * @todo Pull bootstrap-wp-navwalker.php from github with gulp task
 * @todo Pull bootstrap-ninja-forms.php from github with gulp task
 */
require get_template_directory() . '/lib/bootstrap-wp-navwalker.php';
require get_template_directory() . '/lib/bootstrap-ninja-forms.php';

/**
 * Load helper arrays
 */
require get_template_directory() . '/inc/grafipress-arrays.php';

//-----------------------------------------------------------------------
// Developer links and contact information
//-----------------------------------------------------------------------
define( 'GWS_CREATOR', get_theme_mod( 'grafipress_developer_name' ) );
define( 'GWS_URL', 'http://www.grafika.co.za' );
define( 'GWS_SLOGAN', 'Design through inspiration' );
define( 'GWS_ADMIN_MENU_NAME', GWS_CREATOR );
define( 'GWS_FACEBOOK', 'GrafikaWeb' );
define( 'GWS_TWITTER', 'GrafikaWeb' );
define( 'GWS_CLIENTZONE', 'grafika_billing' );
define( 'GWS_KNOWLEDGEBASE', 'grafika_billing/knowledgebase.php' );
define( 'GWS_TELEPHONE', '0825714130');
define( 'GWS_FAX', '0865504459');
define( 'GWS_EMAIL', 'info@grafika.co.za');

/**
 * Load theme essentials functions used in Grafipress.
 */
require get_template_directory() . '/inc/grafipress-admin-theme.php';
require get_template_directory() . '/inc/grafipress-meta-boxes.php';
require get_template_directory() . '/inc/grafipress-activation.php';
require get_template_directory() . '/inc/grafipress-helpers.php';
require get_template_directory() . '/inc/grafipress-template-tags.php';
require get_template_directory() . '/inc/grafipress-theme-setup.php';
require get_template_directory() . '/inc/grafipress-jetpack.php';
require get_template_directory() . '/inc/grafipress-sitewide.php';
require get_template_directory() . '/inc/grafipress-sidebar-selection-metabox.php';
require get_template_directory() . '/inc/grafipress-sidebars.php';
require get_template_directory() . '/inc/grafipress-required-plugins.php';
require get_template_directory() . '/inc/grafipress-breadcrumbs.php';
require get_template_directory() . '/inc/grafipress-welcome-widget.php';
require get_template_directory() . '/inc/grafipress-custom-header.php';
require get_template_directory() . '/inc/grafipress-additional-css.php';
require get_template_directory() . '/inc/grafipress-navigation.php';

/** If Kirki is installed as a plugin and active load the customizer content */
if ( class_exists( 'Kirki' ) ) :
	require get_template_directory() . '/inc/grafipress-customizer.php';
endif;

/**
 * Load theme widgets used in Grafipress.
 */
require get_template_directory() . '/inc/widgets/grafipress-profile-widget.php';
require get_template_directory() . '/inc/widgets/grafipress-vcard-widget.php';

// Add Customizer section for Homepage
Kirki::add_section( 'homepage', array(
	'title'       => __( 'Home Page Setup', 'TEXTDOMAIN' ),
	'priority'    => 10,
	'panel'       => '',
	'description' => __( 'Configure display and content displayed on the homepage', 'TEXTDOMAIN' ),
) );

/**
 * Add Homepage Intro text control.
 *
 * Add a textfield to capture the homepage intro in the Homepage Intro section.
 */
Kirki::add_field( 'grafipress_settings', array(
    'type'     => 'text',
    'settings' => 'homepage_intro',
    'tooltip'  => 'Enter your Homepage intro text here',
    'label'    => __( 'Home Page Intro', 'TEXTDOMAIN' ),
    'section'  => 'homepage',
    'default'  => esc_attr__( 'We will ensure all your supporting company departmental needs are met freeing you up to run your business operations with success.', 'TEXTDOMAIN' ),
    'priority' => $field_priority++,
) );

/**
 * Add About us intro text control.
 *
 * Add a textfield to capture the About Us intro in the Homepage Intro section.
 */
Kirki::add_field( 'grafipress_settings', array(
    'type'     => 'text',
    'settings' => 'about_us_intro',
    'tooltip'  => 'Enter your About Us intro text here',
    'label'    => __( 'About Us Page Intro', 'TEXTDOMAIN' ),
    'section'  => 'homepage',
    'default'  => esc_attr__( 'We are committed to remain a valuble company assset to you. We focus on the triple bottom line of profit, people and our planet. We will never over promise and never under deliver.', 'TEXTDOMAIN' ),
    'priority' => $field_priority++,
) );

/**
 * Add About us page link control.
 *
 * Add a page selection to link to the About Us page in the Homepage Intro section.
 */
Kirki::add_field( 'grafipress_settings', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'about_us_link',
	'label'       => __( 'About us page link', 'TEXTDOMAIN' ),
	'section'     => 'homepage',
	'default'     => '',
	'priority'    => 10,
) );

/**
 * Add Homepage Intro text control.
 *
 * Add a textfield to capture the homepage intro in the Homepage Intro section.
 */
Kirki::add_field( 'grafipress_settings', array(
    'type'     => 'text',
    'settings' => 'about_us_link_text',
    'tooltip'  => 'Enter the text for the About Us button',
    'label'    => __( 'About us button text', 'TEXTDOMAIN' ),
    'section'  => 'homepage',
    'default'  => esc_attr__( 'More about us', 'TEXTDOMAIN' ),
    'priority' => $field_priority++,
) );

/**
 * Add Service Icon toggle control
 *
 * Add a toggle control to load either image or icons for service section.
 */
Kirki::add_field( 'grafipress_settings', array(
    'type'        => 'toggle',
    'settings'    => 'display_service_icons',
    'label'       => __( 'Service icons', 'TEXTDOMAIN' ),
    'section'     => 'homepage',
    'default'     => '1',
    'priority'    => 10,
    'choices'     => array(
        'on'  => esc_attr__( 'Icons', 'TEXTDOMAIN' ),
        'off' => esc_attr__( 'Images', 'TEXTDOMAIN' ),
    ),
) );