<?php

// =============================================================================
// FUNCTIONS/ENQUEUE/STYLES.PHP
// -----------------------------------------------------------------------------
// Enqueue all styles for the Google Analytics.
// =============================================================================

// Register and Enqueue Site Styles
// =============================================================================

function tco_traffix_enqueue_admin_styles() {

    wp_enqueue_style( 'tco-traffix-admin-css', TCO_TRAFFIX_URL . '/css/admin/style.css', NULL, NULL, 'all' );

}

add_action( 'admin_enqueue_scripts', 'tco_traffix_enqueue_admin_styles' );