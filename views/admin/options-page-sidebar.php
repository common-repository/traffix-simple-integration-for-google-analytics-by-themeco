<?php

// =============================================================================
// VIEWS/ADMIN/OPTIONS-PAGE-SIDEBAR.PHP
// -----------------------------------------------------------------------------
// Plugin options page sidebar.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Sidebar
// =============================================================================

// Sidebar
// =============================================================================

?>

<div id="postbox-container-1" class="postbox-container">
  <div class="meta-box-sortables">

    <!--
    SAVE
    -->

    <div class="postbox">
      <div class="handlediv" title="<?php _e( 'Click to toggle', 'tco_traffix' ); ?>"><br></div>
      <h3 class="hndle"><span><?php _e( 'Save', 'tco_traffix' ); ?></span></h3>
      <div class="inside">
        <p><?php _e( 'Once you are satisfied with your settings, click the button below to save them.', 'tco_traffix' ); ?></p>
        <p class="cf"><input id="submit" class="button button-primary" type="submit" name="tco_traffix_submit" value="Update"></p>
      </div>
    </div>

    <!--
    ABOUT
    -->

    <div class="postbox">
      <div class="handlediv" title="<?php _e( 'Click to toggle', 'tco_traffix' ); ?>"><br></div>
      <h3 class="hndle"><span><?php _e( 'About', 'tco_traffix' ); ?></span></h3>
      <div class="inside">
        <dl class="accordion">

          <dt class="toggle"><?php _e( 'Position', 'tco_traffix' ); ?></dt>
          <dd class="panel">
            <div class="panel-inner">
              <p><?php _e( 'Choosing the <b>Position</b> of your Google Analytics code is a matter of preference in how you want to track your visitors.', 'tco_traffix' ); ?></p>
              <p><?php _e( 'Selecting <b>Head</b> will place the code in the &lt;head&gt; of your website and is more likely to track all visitors to your site, even if they do not wait for your entire webpage to load.', 'tco_traffix' ); ?></p>
              <p><?php _e( 'Selecting <b>Footer</b> will place the near the closing &lt;body&gt; tag of your website and will track only users that have waited for your entire page to load.', 'tco_traffix' ); ?></p>
            </div>
          </dd>

          <dt class="toggle"><?php _e( 'Support', 'tco_traffix' ); ?></dt>
          <dd class="panel">
            <div class="panel-inner">
              <p><?php _e( 'For questions, please visit our <a href="//theme.co/x/member/kb/extension-google-analytics/" target="_blank">Knowledge Base tutorial</a> for this plugin.', 'tco_traffix' ); ?></p>
            </div>
          </dd>

        </dl>
      </div>
    </div>

  </div>
</div>