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
<main class="bg_main_a crm_custom_fonts">
  <div class="common_w container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="dash_heading">
      <h1>CRM Dashboard</h1>
      </div>
    </div>
  </div>
</div>
<div class="common_w container-fluid">
  <div class="row shadw align-items-center  bg_main margin_common">
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
<div class="common_w container-fluid">
  <div class="row">
      <div class="col-6">
        <div class="status_tab mt-5">
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#4ACB66" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                  </div>
                  <div class="status_toltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                  </svg>
                    <div class="custom-tooltip">The version of Wordpress installed on your hosting server.</div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#4ACB66" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                  </div>
                  <div class="status_toltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                  </svg>
                    <div class="custom-tooltip">The version of Woocommerce installed on your hosting server.</div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#4ACB66" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                  </div>
                  <div class="status_toltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                  </svg>
                    <div class="custom-tooltip"> The maximum amount of memory (RAM) that your site can use at one time.</div>
                  </div>

                </div>
            </div>
            <div class="status_box">
                <div class="status_box_head">
                  <p>Wordpress cron</p>
                </div>
                <div class="status_box_con">
                  <p></p>
                  <div class="status_icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#4ACB66" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                    </svg>
                  </div>
                  <div class="status_toltip">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                  </svg>
                    <div class="custom-tooltip"> Displays whether or not WP Cron Jobs are enabled.</div>
                  </div>

                </div>
            </div>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        </div>
        </div>
      </div>
      <div class="col-3 mt-5">
          <div class="crm_links">
            <div class="crm_link_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="50.073" height="40" viewBox="0 0 50.073 40" class="sv-icon replaced-svg"><defs><style>.a{fill:#212d3d;}</style></defs><g transform="translate(0 -0.642)"><g transform="translate(0 0.642)"><path class="a" d="M44.439,29.376a5.608,5.608,0,0,0-3.849,1.541l-6.118-3.5a8.694,8.694,0,0,0-8.184-11.814,8.5,8.5,0,0,0-1.909.227l-2.519-5.4a5.608,5.608,0,1,0-3.708,1.424,1.938,1.938,0,0,0,.211-.023l2.621,5.61a8.741,8.741,0,1,0,11.47,13.144l6.431,3.677a5.834,5.834,0,0,0-.078.743,5.633,5.633,0,1,0,5.633-5.633ZM18.151,8.095a1.878,1.878,0,1,1,1.878-1.878A1.878,1.878,0,0,1,18.151,8.095Zm8.137,21.281A5.007,5.007,0,1,1,31.3,24.369,5.007,5.007,0,0,1,26.288,29.376Zm18.151,7.511a1.878,1.878,0,1,1,1.878-1.878,1.878,1.878,0,0,1-1.878,1.878ZM40.183,16.451l-1.5-2-3.755,2.817,1.5,2Zm4.882-.845A5.007,5.007,0,1,0,40.058,10.6,5.007,5.007,0,0,0,45.065,15.606ZM11.892,25.62h3.755v-2.5H11.892ZM5.007,19.361a5.007,5.007,0,1,0,5.007,5.007A5.007,5.007,0,0,0,5.007,19.361Z" transform="translate(0 -0.642)"></path></g></g></svg>
            </div>
            <div class="crm_links_a">
            <a href="admin.php?page=wc-to-checkoutchamp-integration">Integration</a>
            </div>
          </div>
          <div class="crm_links">
            <div class="crm_link_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="35.712" height="40" viewBox="0 0 35.712 40" class="sv-icon replaced-svg"><defs><style>.a{fill:#212d3d;}</style></defs><g transform="translate(0 0.013)"><g transform="translate(0 -0.013)"><path class="a" d="M30,161.25v2.5a1.254,1.254,0,0,1-1.25,1.25H27.343a10.843,10.843,0,0,0-2.351.258,2.36,2.36,0,0,0-1.852,2.32v.477c-.1.055-.2.117-.3.172l-.406-.234a2.378,2.378,0,0,0-2.937.445,10.662,10.662,0,0,0-2.352,4.086,2.37,2.37,0,0,0,1.078,2.766l.414.234v.352l-.414.234a2.37,2.37,0,0,0-1.078,2.766c.1.336.227.664.359.992V185a2.5,2.5,0,0,1-5,0v-5.25A12.5,12.5,0,0,1,2.5,167.5V165H1.25A1.254,1.254,0,0,1,0,163.75v-2.5A1.254,1.254,0,0,1,1.25,160h27.5A1.254,1.254,0,0,1,30,161.25Z" transform="translate(0 -147.499)"></path><path class="a" d="M261,2.488v8.125h-5V2.543a2.542,2.542,0,0,1,2.43-2.555A2.5,2.5,0,0,1,261,2.418Z" transform="translate(-236.001 0.013)"></path><path class="a" d="M257.988,258.992l1.5.867a.431.431,0,0,1,.2.492,8.68,8.68,0,0,1-1.93,3.336.417.417,0,0,1-.523.078l-1.5-.867a6.919,6.919,0,0,1-2.141,1.242v1.734a.434.434,0,0,1-.328.414,8.9,8.9,0,0,1-3.851,0,.425.425,0,0,1-.328-.414V264.14a6.768,6.768,0,0,1-2.141-1.242l-1.492.867a.427.427,0,0,1-.523-.078,8.781,8.781,0,0,1-1.93-3.336.431.431,0,0,1,.2-.492l1.5-.867a6.942,6.942,0,0,1,0-2.476l-1.5-.867a.431.431,0,0,1-.2-.492,8.68,8.68,0,0,1,1.93-3.336.416.416,0,0,1,.523-.078l1.5.867a6.919,6.919,0,0,1,2.141-1.242v-1.742a.434.434,0,0,1,.328-.414,8.9,8.9,0,0,1,3.851,0,.425.425,0,0,1,.328.414v1.734a6.768,6.768,0,0,1,2.141,1.242l1.5-.867a.427.427,0,0,1,.523.078,8.781,8.781,0,0,1,1.93,3.336.431.431,0,0,1-.2.492l-1.5.867a7.171,7.171,0,0,1-.008,2.484Zm-3.82-1.242a2.828,2.828,0,1,0-2.828,2.836A2.822,2.822,0,0,0,254.168,257.75Z" transform="translate(-223.997 -229.546)"></path><path class="a" d="M69,2.555v8.07H64V2.5A2.5,2.5,0,0,1,66.5,0h.07A2.537,2.537,0,0,1,69,2.555Z" transform="translate(-59 0.001)"></path></g></g></svg>
            </div>
            <div class="crm_links_a">
            <a href="admin.php?page=wc-to-checkoutchamp-tools">Tools</a>
            </div>
          </div>
      </div>
      <div class="col-3 mt-5">
      <div class="crm_links">
            <div class="crm_link_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" viewBox="0 0 50 40" class="sv-icon replaced-svg"><defs><style>.a{fill:#212d3d;}</style></defs><path class="a" d="M47.5,0h-10A2.5,2.5,0,0,0,35,2.5v10A2.5,2.5,0,0,0,37.5,15h10A2.5,2.5,0,0,0,50,12.5V2.5A2.5,2.5,0,0,0,47.5,0ZM46.25,11.016a.23.23,0,0,1-.234.234H38.984a.23.23,0,0,1-.234-.234V3.984a.23.23,0,0,1,.234-.234h7.031a.23.23,0,0,1,.234.234ZM32.5,10V5H15V2.5A2.5,2.5,0,0,0,12.5,0H2.5A2.5,2.5,0,0,0,0,2.5v10A2.5,2.5,0,0,0,2.5,15H9.977L15.7,25l.008-.008A4.985,4.985,0,0,1,20,22.5h.023L15,13.711V10ZM3.984,11.25a.23.23,0,0,1-.234-.234V3.984a.23.23,0,0,1,.234-.234h7.031a.23.23,0,0,1,.234.234v7.031a.23.23,0,0,1-.234.234ZM30,25H20a2.5,2.5,0,0,0-2.5,2.5v10A2.5,2.5,0,0,0,20,40H30a2.5,2.5,0,0,0,2.5-2.5v-10A2.5,2.5,0,0,0,30,25ZM28.75,36.016a.23.23,0,0,1-.234.234H21.484a.23.23,0,0,1-.234-.234V28.984a.23.23,0,0,1,.234-.234h7.031a.23.23,0,0,1,.234.234Z"></path></svg>
            </div>
            <div class="crm_links_a">
            <a href="admin.php?page=wc-to-checkoutchamp-settings">Settings</a>
            </div>
          </div>
          <div class="crm_links">
            <div class="crm_link_icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="40" viewBox="0 0 45 40" class="sv-icon replaced-svg"><defs><style>.a{fill:#212d3d;}</style></defs><path class="a" d="M41.25,0H3.75A3.751,3.751,0,0,0,0,3.75v22.5A3.751,3.751,0,0,0,3.75,30h37.5A3.751,3.751,0,0,0,45,26.25V3.75A3.751,3.751,0,0,0,41.25,0Zm-.469,26.25H4.219a.47.47,0,0,1-.469-.469V4.219a.47.47,0,0,1,.469-.469H40.781a.47.47,0,0,1,.469.469V25.781A.47.47,0,0,1,40.781,26.25ZM37.5,38.125A1.874,1.874,0,0,1,35.633,40H9.375a1.875,1.875,0,1,1,0-3.75h7.711l1.531-3.734a.934.934,0,0,1,.891-.641h6.148a.934.934,0,0,1,.891.641l1.375,3.734h7.7A1.874,1.874,0,0,1,37.5,38.117Z"></path></svg>
            </div>
            <div class="crm_links_a">
            <a href="admin.php?page=wc-to-checkoutchamp-upgrade">Upgrade to Pro</a>
            </div>
          </div>
      </div>
  </div>
</div>
</main>
