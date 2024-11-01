<?php

// =============================================================================
// VIEWS/ADMIN/OPTIONS-PAGE-MAIN.PHP
// -----------------------------------------------------------------------------
// Plugin options page main content.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Main Content
// =============================================================================

// Main Content
// =============================================================================

?>

<div id="post-body-content">
  <div class="meta-box-sortables ui-sortable">

    <!--
    ENABLE
    -->

    <div id="meta-box-enable" class="postbox">
      <div class="handlediv" title="<?php _e( 'Click to toggle', 'tco_traffix' ); ?>"><br></div>
      <h3 class="hndle"><span><?php _e( 'Enable', 'tco_traffix' ); ?></span></h3>
      <div class="inside">
        <p><?php _e( 'Select the checkbox below to enable the plugin.', 'tco_traffix' ); ?></p>
        <table class="form-table">

          <tr>
            <th>
              <label for="tco_traffix_enable">
                <strong><?php _e( 'Enable Google Analytics', 'tco_traffix' ); ?></strong>
                <span><?php _e( 'Select to enable the plugin and display options below.', 'tco_traffix' ); ?></span>
              </label>
            </th>
            <td>
              <fieldset>
                <legend class="screen-reader-text"><span>input type="checkbox"</span></legend>
                <input type="checkbox" class="checkbox" name="tco_traffix_enable" id="tco_traffix_enable" value="1" <?php checked( ! isset( $tco_traffix_enable ) ? '0' : $tco_traffix_enable, '1', true ); ?>>
              </fieldset>
            </td>
          </tr>

        </table>
      </div>
    </div>

    <!--
    SETTINGS
    -->

    <div id="meta-box-settings" class="postbox" style="display: <?php echo ( isset( $tco_traffix_enable ) && $tco_traffix_enable == 1 ) ? 'block' : 'none'; ?>;">
      <div class="handlediv" title="<?php _e( 'Click to toggle', 'tco_traffix' ); ?>"><br></div>
      <h3 class="hndle"><span><?php _e( 'Settings', 'tco_traffix' ); ?></span></h3>
      <div class="inside">
        <p><?php _e( 'Select your plugin settings below.', 'tco_traffix' ); ?></p>
        <table class="form-table">

          <tr>
            <th>
              <label for="tco_traffix_position">
                <strong><?php _e( 'Position', 'tco_traffix' ); ?></strong>
                <span><?php _e( 'Choose which section of your site you want your Google Analytics code to be output.', 'tco_traffix' ); ?></span>
              </label>
            </th>
            <td>
              <fieldset>
                <legend class="screen-reader-text"><span>input type="radio"</span></legend>
                <label class="radio-label"><input type="radio" class="radio" name="tco_google_analytics_position" value="head" <?php echo ( isset( $tco_traffix_position ) && checked( $tco_traffix_position, 'head', false ) ) ? checked( $tco_traffix_position, 'head', false ) : 'checked="checked"'; ?>> <span><?php _e( 'Head', 'tco_traffix' ); ?></span></label><br>
                <label class="radio-label"><input type="radio" class="radio" name="tco_google_analytics_position" value="footer" <?php echo ( isset( $tco_google_analytics_position ) && checked( $tco_traffix_position, 'footer', false ) ) ? checked( $tco_traffix_position, 'footer', false ) : ''; ?>> <span><?php _e( 'Footer', 'tco_traffix' ); ?></span></label>
              </fieldset>
            </td>
          </tr>

          <tr>
            <th>
              <label for="tco_traffix_code">
                <strong><?php _e( 'Analytics Code', 'tco_traffix' ); ?></strong>
                <span><?php _e( 'Input your Google Analytics code exactly as it is provided (i.e. with the &lt;script&gt; tags included).', 'tco_traffix' ); ?></span>
              </label>
            </th>
            <td><textarea name="tco_traffix_code" id="tco_traffix_code" class="code"><?php echo ( isset( $tco_traffix_code ) ) ? esc_textarea( $tco_traffix_code ) : ''; ?></textarea>
            </td>
          </tr>

        </table>
      </div>
    </div>

  </div>
</div>