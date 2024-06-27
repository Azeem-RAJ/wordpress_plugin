<?php
// Initialize variables to hold submitted values or set default values if not submitted
$username_value = isset($_POST['username']) ? esc_attr($_POST['username']) : '';
$campaign_id_value = isset($_POST['campaign_id']) ? esc_attr($_POST['campaign_id']) : '';
$default_shipping_id_value = isset($_POST['default_shipping_id']) ? esc_attr($_POST['default_shipping_id']) : '';
$crm_value = isset($_POST['crm']) ? esc_attr($_POST['crm']) : '';
$api_username_value = isset($_POST['api_username']) ? esc_attr($_POST['api_username']) : '';
?>

<?php 
if (isset($_GET['form_status']) && $_GET['form_status'] == 'success') {
    echo '<div id="form-message" class="form-success-message">Form submitted successfully</div>';
}
?>
<div class="main-form">
  
<div class="common_w container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="top_connec_h">
                <h4>Connectivity | New Connection</h4>
            </div>
        </div>
    </div>
</div>

<div class="common_w container-fluid">
    <div class="row">
        <div class="col-12">
          <div class="form_crmheader">
              <div class="form_crmselect">
                    <div class="top_status_h">
                          <p class="m-0">Status |</p>
                    </div>
                    <div class="top_status_sel">
                          <select class="top_status">
                              <option value="All">Publish</option>
                              <option value="Active">Active</option>
                          </select>
                    </div>
              </div>
              
          </div>
        </div>
    </div>
</div>
<div class="common_w container-fluid">
    <div class="row">
        <div class="col-12">
            <form id="my-plugin-form" method="POST" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                <input type="hidden" name="action" value="my_form_submit">
                <div class="connection_crm_form">
                    <div class="new_connec_main">
                        <div class="conne_name">
                            <label for="username">New Connection Name</label>
                            <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $username_value; ?>">
                        </div>
                        <div class="campagin_det">
                            <h2>Campaign Details</h2>
                            <label for="campaign_id">Campaign ID:</label>
                            <input type="text" id="campaign_id" name="campaign_id" placeholder="Campaign ID" value="<?php echo $campaign_id_value; ?>">
                            <label for="default_shipping_id">Default Shipping ID:</label>
                            <input type="text" id="default_shipping_id" name="default_shipping_id" placeholder="Default Shipping ID" value="<?php echo $default_shipping_id_value; ?>">
                        </div>
                    </div>
                    <div class="api_cred">
                        <h3>API Credentials</h3>
                        <label for="crm">Select CRM:</label>
                        <select id="crm" name="crm" required>
                            <option value="">Please select a connection</option>
                            <option value="Sticky.io" <?php selected($crm_value, 'Sticky.io'); ?>>Sticky.io</option>
                            <option value="Konnektive CRM" <?php selected($crm_value, 'Konnektive CRM'); ?>>Konnektive CRM</option>
                            <option value="Response CRM" <?php selected($crm_value, 'Response CRM'); ?>>Response CRM</option>
                        </select>
                        <label for="api_username">Username:</label>
                        <input type="text" id="api_username" name="api_username" placeholder="Enter Username" value="<?php echo $api_username_value; ?>" required>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password" required>
                        <div class="form_crm_btn">
              <div class="btn_save">
                            <button type="submit">Save Connection</button>
              </div>
              </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
