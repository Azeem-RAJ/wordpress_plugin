
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
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>
    </div>
  </div>
</div>
  <div class="wrap">
      <p>Softheight CRM Status: ...</p>
      <ul>
          <li><a href="admin.php?page=wc-to-checkoutchamp-integration">Integration</a></li>
          <li><a href="admin.php?page=wc-to-checkoutchamp-tools">Tools</a></li>
          <li><a href="admin.php?page=wc-to-checkoutchamp-settings">Settings</a></li>
          <li><a href="admin.php?page=wc-to-checkoutchamp-upgrade">Upgrade to Pro</a></li>
      </ul>
  </div>
</main>