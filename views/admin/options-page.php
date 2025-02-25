<?php 

// =============================================================================
// VIEWS/ADMIN/OPTIONS-PAGE.PHP
// -----------------------------------------------------------------------------
// Plugin options page.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Permissions Check
//   02. Require Options
//   03. Options Page Output
// =============================================================================

// Permissions Check
// =============================================================================

if ( ! current_user_can( 'manage_options' ) ) {
  wp_die( 'You do not have sufficient permissions to access this page.' );
}



// Require Options
// =============================================================================

require( TCO_TRAFFIX_PATH . '/functions/options.php' );



// Options Page Output
// ============================================================================

?>

<div class="wrap tco-plugin tco-traffix">
  <h2><?php _e( 'Traffix', 'tco_traffix' ); ?></h2>
  <div id="poststuff">
    <div id="post-body" class="metabox-holder columns-2">
      <form name="tco_traffix_form" method="post" action="">
        <input name="tco_traffix_form_submitted" type="hidden" value="submitted">
				<?php wp_nonce_field( 'tco-traffix-nonce', 'tco_traffix_form_submitted' ); ?>
        <?php require( 'options-page-main.php' ); ?>
        <?php require( 'options-page-sidebar.php' ); ?>

      </form>
    </div>
    <br class="clear">
  </div>
</div>