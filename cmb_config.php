<?php



/* Tell WordPress to add the configuration page */

add_action( 'admin_menu', 'cmb_config_page' );



/*
 * cmb_config_page
 *
 * Adds a configuration page to the plugins section of the admin
 * dashboard.
 */

function cmb_config_page () {
  
  add_submenu_page( 'plugins.php', 'Colour Me Bad',
   'Colour Me Bad Settings', 1, __FILE__, 'cmb_configuration' );
}



/*
 * cmb_configuration
 *
 * This function prints out the PHP code that comprises the
 * configuration page.
 */

function cmb_configuration () {

 
  if ( $_REQUEST['cmb_action'] == "set" ) {

    if ( $error = cmb_save_settings() )
      cmb_error( $error );
    else
      cmb_message( "Settings saved" );
  }
    
  include( 'cmb_settings_template.php' );
}



/*
 * cmb_load_settings
 *
 * Saves the current settings from the WordPress options into
 * $_REQUEST parameters, so that they are available for the HTML
 * forms.
 */

function cmb_load_settings () {

  $_REQUEST['lastfm_username'] = get_option( "cmb_lastfm_username" );
  $_REQUEST['position'] = get_option( "cmb_position" );

}



/*
 * cmb_save_settings
 *
 * Saves the current settings as WordPress options.
 */

function cmb_save_settings () {
  global $_REQUEST;

  update_option( "cmb_lastfm_username", $_REQUEST['lastfm_username'] );
  update_option( "cmb_position", $_REQUEST['position'] );

}



/*
 * cmb_message
 *
 * Prints the given message in an HTML div tag.
 */

function cmb_message ( $message = "" ) {

  if ( $message )
    echo "<div id=\"message\" class=\"updated fade\"><p>$message</p></div>\n";
}



/*
 * cmb_error
 *
 * Prints the given error message in an HTML div tag.
 */

function cmb_error ( $message = "" ) {

  if ( $message )
    echo "<div id=\"message\" class=\"error\"><p>$message</p></div>\n";
}



/*
 * cmb_form_action
 *
 * Returns the URL of the current page, to be used as the action parameter
 * in forms.
 */

function cmb_form_action () {

  if ( $page = $_REQUEST['page'] )
    return "?page=$page";
}

?>
