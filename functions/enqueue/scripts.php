<?php

// =============================================================================
// FUNCTIONS/ENQUEUE/SCRIPTS.PHP
// -----------------------------------------------------------------------------
// Enqueue all scripts for the Google Analytics.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Site Scripts
// =============================================================================

// Enqueue Site Scripts
// =============================================================================

function tco_traffix_enqueue_admin_scripts() {

    wp_enqueue_script( 'tco-traffix-admin-js', TCO_TRAFFIX_URL . '/js/admin/main.js', array( 'jquery' ), NULL, true );

}

add_action( 'admin_enqueue_scripts', 'tco_traffix_enqueue_admin_scripts' );