<?php

// =============================================================================
// FUNCTIONS/OPTIONS.PHP
// -----------------------------------------------------------------------------
// Plugin options.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Set Options
//   02. Get Options
// =============================================================================

// Set Options
// =============================================================================

//
// Set $_POST variables to options array and update option.
//

GLOBAL $tco_traffix_options;

if ( isset( $_POST['tco_traffix_submit'] ) ) {
	if (check_admin_referer('tco-traffix-nonce', 'tco_traffix_form_submitted') && current_user_can( 'manage_options' ) ) {
    
		$tco_traffix_options['tco_traffix_enable']   = ( isset( $_POST['tco_traffix_enable'] ) ) ? sanitize_text_field( $_POST['tco_traffix_enable'] ) : '';
		$tco_traffix_options['tco_traffix_position'] = sanitize_text_field( $_POST['tco_traffix_position'] );
		$tco_traffix_options['tco_traffix_code']     = stripslashes( wp_kses( $_POST['tco_traffix_code'], array( 'script' => array() ) ) );
    
		update_option( 'tco_traffix', $tco_traffix_options );

  }
}



// Get Options
// =============================================================================

//$tco_traffix_options = apply_filters( 'tco_traffix_options', get_option( 'tco_traffix' ) );

$tco_traffix_options = apply_filters( 'tco_traffix_options', get_option( 'tco_traffix', get_option( 'x_google_analytics' ) ) );

if (!empty($tco_traffix_options)) {

  $tco_traffix_enable   = $tco_traffix_options['tco_traffix_enable'];
  $tco_traffix_position = $tco_traffix_options['tco_traffix_position'];
  $tco_traffix_code     = $tco_traffix_options['tco_traffix_code'];

}