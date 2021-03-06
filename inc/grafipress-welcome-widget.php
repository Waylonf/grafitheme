<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * WARNING: This file is part of the core Grafipress framework.
 * DO NOT edit this file under any circumstances. Please do all
 * modifications in the form of a child theme.
 *
 * @package     WordPress
 * @subpackage  {THEME-NAME}
 * @since       {THEME-NAME} {THEME-VERSION}
 */
/**
 * Resister the custom 'Welcome Widget'
 *
 * This function registers the custom 'Welcome Widget' in the
 * WordPress dashboard.
 *
 * @since 1.0.0
 * @link http://www.grafipress.co.za
 *
 */
if ( ! function_exists( 'gws_register_welcome_widget' ) ) :
	function gws_register_welcome_widget() {
	    wp_add_dashboard_widget (
	        'welcome_widget',
	        sprintf(__( 'Welcome to the %s family', 'TEXTDOMAIN' ), GWS_CREATOR ),
	        'gws_render_welcome_widget'
	    );
	}
	add_action( 'wp_dashboard_setup', 'gws_register_welcome_widget' );
endif;

/**
 * Renders the custom 'Welcome Widget'
 *
 * This function renders the custom 'Welcome Widget' in the WordPress
 * dashboard.
 *
 * @since 1.0.0
 * @link http://www.grafipress.co.za
 *
 */
if ( ! function_exists( 'gws_render_welcome_widget' ) ) :
	function gws_render_welcome_widget() { ?>
	    <div class="inside">
	        <p>
	            <?php printf(__( 'We are proud to be involved with %s\'s online portal. We are always willing to help with any questions or issues you may have. In the spirit of this we have included a few links that may help you get to where you wish to be.' ), bloginfo( 'name', 'raw' ) ); ?></p>
	            <br class="clear">
	            <h4><?php _e( ' Support Links', GWS_CREATOR ); ?></h4>
	            <p><?php _e( 'If you are having problems with something feel free to read through our support articles for a possible solution.', 'TEXTDOMAIN' ); ?>
	                <div>
	                <a class="button" href="<?php echo GWS_URL; ?> "><?php _e( 'Visit our website for a few tips and tricks ', 'TEXTDOMAIN' ); ?></a>
	                <br class="clear"><br/>
	                <a class="button" href="<?php echo GWS_KNOWLEDGEBASE; ?> "><?php _e( 'Read our Knowledgebase articles', 'TEXTDOMAIN' ); ?></a>
	            </div>
	        </p>
	        <br class="clear">
	        <h4><?php _e( 'ClientZone',  'TEXTDOMAIN' ); ?></h4>
	        <p><?php _e( 'If you would like to view your billing account or edit your account details', 'TEXTDOMAIN' ); ?>
	            <div>
	                <a class="button" href="<?php echo GWS_CLIENTZONE ?>"><?php _e( 'Login to your ClientZone', 'TEXTDOMAIN' ); ?></a>
	            </div>
	        </p>
	        <br class="clear">
	        <h4><?php _e( 'cPanel', 'TEXTDOMAIN' ); ?></h4>
	        <p><?php _e( 'Login to your cPanel account to create emails, manage your autoresponders and vacation messages as well as other settings that relat to your hosting account',  'TEXTDOMAIN' ); ?>
	            <div>
	                <a class="button" href="<?php echo 'https://cpanel.' . $_SERVER['HTTP_HOST']; ?>"><?php _e( 'Login to your cPanel account', 'TEXTDOMAIN' ); ?></a>
	            </div>
	        </p>
	        <br class="clear">
	        <h4><?php _e( 'Join our network',  'TEXTDOMAIN' ); ?></h4>
	        <p><?php _e( 'Be sure to connect with us and be informed of product development, new services and general information that will help you take control of your online pressence.', 'TEXTDOMAIN' ); ?>
	            <div>
	                <a class="button" href="https://www.facebook.com/<?php echo GWS_FACEBOOK; ?>"><?php _e( 'Catch us on Facebook', 'TEXTDOMAIN' ); ?></a>
	                <a class="button" href="https://www.twitter.com/<?php echo GWS_TWITTER; ?>"><?php _e( 'Follow us on Twitter', 'TEXTDOMAIN' ); ?></a>
	            </div>
	        </p>
	        <br class="clear">
	        <h4><?php _e( 'Contact us',  'TEXTDOMAIN' ); ?></h4>
	        <p><?php _e( 'Feel free to contact us should you have any questions.', 'TEXTDOMAIN' ); ?>
	        <br/><br/>
	            <b><?php echo GWS_CREATOR; ?></b><br/>
	            <b><?php _e( 'Website',  'TEXTDOMAIN' ); ?>: </b><a href="<?php echo  GWS_URL; ?>" target="_SELF"><?php _e( 'Visit us online', 'TEXTDOMAIN' ); ?></a><br/>
	            <b><?php _e( 'Mobile',  'TEXTDOMAIN' ); ?>:</b> <?php echo gws_phone( GWS_TELEPHONE, 1 ); ?><br/>
	            <b><?php _e( 'Facsimile',  'TEXTDOMAIN' ); ?>:</b> <?php echo gws_phone ( GWS_FAX , 0 ); ?><br/>
	            <b><?php _e( 'Email',  'TEXTDOMAIN' ); ?>:</b> <?php echo gws_email ( GWS_EMAIL ); ?>
	        </p>
	        <br class="clear">
	    </div>
	    <?php
	}
endif;