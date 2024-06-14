<?php
// Get WordPress version
$wordpress_version = get_bloginfo('version');
$memory_limit = WP_MEMORY_LIMIT;
if (class_exists('WooCommerce')) {
  // Get WooCommerce version
  $woocommerce_version = WC()->version;
} else {
  $woocommerce_version = 'WooCommerce is not active';
}
?>
<main class="crm_custom_fonts">
  <div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="dash_heading">
      <h1>CRM Dashboard</h1>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row shadw align-items-center">
  <div class="col-5">
    <div class="dash_box_a">
      <h3>Admin</h3>
      <p>Here’s a quick look at your current connections<br>  
      and products mapped in Unify →</p>
    </div>
  </div>
    <div class="col-2 text-center boder_left">
      <div class="dash_box_b">
        <h3><?php echo esc_html($products_count); ?></h3>
        <p>Products Mapping</p>
      </div>
    </div>
    <div class="col-2 text-center boder_left">
      <div class="dash_box_b">
        <h3> <?php echo esc_html($total_integrations); ?></h3>
        <p>Total Integrations</p>
      </div>
    </div>
    <div class="col-2 text-center boder_left">
      <div class="dash_box_b">
        <h3><?php echo esc_html($orders_count); ?></h3>
        <p>Orders Completed Today</p>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
      <div class="col-6">
        <div class="status_tabs">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Crm Status</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Server Status</a>
          </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="status_box">
                <div class="status_box_head">
                <p>Wordpress Version</p>
                </div>
                <div class="status_box_con">
                  <p><?php echo esc_html($wordpress_version); ?></p>
                  <div class="status_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4ACB66" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                  </div>
                  <div class="status_toltip">
                    <svg xmlns="http://www.w3.org/2000/svg" data-toggle="tooltip" data-placement="top" title="The version of Wordpress installed on your hosting server." width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                    </svg>
                  </div>
                </div>
            </div>
            <div class="status_box">
                <div class="status_box_head">
                  <p>WooCommerce Version</p>
                  </div>
                <div class="status_box_con">
                  <p><?php echo esc_html($woocommerce_version); ?></p>
                  <div class="status_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4ACB66" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                  </div>
                  <div class="status_toltip">
                  <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Disabled tooltip">
                    <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                  </span>
                  </div>
                </div>
            </div>
            <div class="status_box">
                <div class="status_box_head">
                  <p>WordPress Memory Limit</p>
                </div>
                <div class="status_box_con">
                  <p><?php echo esc_html($memory_limit); ?></p>
                  <div class="status_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4ACB66" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                  </div>
                  <div class="status_toltip">
                  <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                    Tooltip on top
                  </button>
                  </div>
                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        </div>
      </div>
      <div class="col-6">
      <ul>
          <li><a href="admin.php?page=wc-to-checkoutchamp-integration">Integration</a></li>
          <li><a href="admin.php?page=wc-to-checkoutchamp-tools">Tools</a></li>
          <li><a href="admin.php?page=wc-to-checkoutchamp-settings">Settings</a></li>
          <li><a href="admin.php?page=wc-to-checkoutchamp-upgrade">Upgrade to Pro</a></li>
      </ul>
      </div>
  </div>
</div>
</main>
