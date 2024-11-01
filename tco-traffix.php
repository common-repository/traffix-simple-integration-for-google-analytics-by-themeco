<?php

/*
Plugin Name: Traffix - Simple Integration for Google Analytics by Themeco
Description: Simply drop in your Google Analytics code snippet, select where you'd like it to be output, and you're good to go! Google Analytics made easy.
Version: 1.0.0
Author: Themeco
Author URI: http://theme.co
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: tco_traffix
Domain Path: languages
*/

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Define Constants and Global Variables
//   02. Setup Menu
//   03. Initialize
// =============================================================================

// Define Constants and Global Variables
// =============================================================================

//
// Constants.
//

define( 'TCO_TRAFFIX_VERSION', '1.0.0' );
define( 'TCO_TRAFFIX_URL', plugins_url( '', __FILE__ ) );
define( 'TCO_TRAFFIX_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );


//
// Global variables.
//

$tco_traffix_options = array();



// Setup Menu
// =============================================================================

function tco_traffix_options_page() {
  require( 'views/admin/options-page.php' );
}

function tco_traffix_menu() {
  add_submenu_page( 'options-general.php', __( 'Traffix', 'tco_traffix' ), __( 'Traffix', 'tco_traffix' ), 'manage_options', 'tco-extensions-traffix', 'tco_traffix_options_page' );
}

add_action( 'admin_menu', 'tco_traffix_menu', 100 );



// Initialize
// =============================================================================

function tco_traffix_init() {

  //
  // Textdomain.
  //

  load_plugin_textdomain( 'tco_traffix', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );


  //
  // Styles and scripts.
  //

  require( 'functions/enqueue/styles.php' );
  require( 'functions/enqueue/scripts.php' );


  //
  // Notices.
  //

  require( 'functions/notices.php' );


  //
  // Output.
  //

  require( 'functions/output.php' );
  
}

add_action( 'init', 'tco_traffix_init' );