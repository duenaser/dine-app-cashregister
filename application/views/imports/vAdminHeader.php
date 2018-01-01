<?php if ($this->session->userdata('userSession') && $this->session->userdata['userSession']['user_type'] == 'ADMIN') { ?>
<!DOCTYPE html>
<html> 
<head>
    <title>Dine-Admin Module</title>
    <link rel='stylesheet' href='<?php echo base_url("assets/css/adminAssets.css")?>'>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/posAssets.css')?>">
    <link rel='stylesheet' href='<?php echo base_url("assets/semantic/semantic.min.css")?>'>
    <script src='<?php echo base_url("assets/jquery.min.js")?>'></script>
    <script src='<?php echo base_url("assets/semantic/semantic.min.js")?>'></script>
    <script type="text/javascript" src="<?php echo base_url('assets/jquery/instascan.min.js')?>"></script>
    <script src='<?php echo base_url("assets/jquery/sha.js")?>'></script>
</head>
<body>
 
<div class='ui sticky fixed inverted menu'>
    <div class='ui right floated simple dropdown item' tabindex='0'>
        <i class='user icon'></i>Profile
        <i class='dropdown icon' tabindex='0'>
      <div class='menu' tabindex='-1'></div>
    </i>
        <div class='menu' tabindex='-1'>
            <a class='item' id='changePass'><i class='lock icon'></i>Change Password</a>
            <a href='<?php echo site_url()?>/CLogin/userLogout?>' class='item'><i class='sign out icon'></i>Logout</a>
        </div>
    </div>
</div>


<div class="ui mini modal" id="confirmUpdate" aria-hidden="true">
  <div class="header">Update user credentials</div>
  <div class="content">
    <form class="ui form" action="<?php echo site_url();?>/CUser/changePassword" method="POST">
        <div class="required field">
            <label>Old Password</label>
            <input type="password" name="old" id="old" required placeholder="Enter old password">
        </div>
        <div class="required field">
            <label>New Password</label>
            <input type="password" name="new" id="new" required placeholder="Enter new password">
        </div>
        <div class="required field">
            <label>Confirm New Password</label>
            <input type="password" name="confirm" id="confirm" required placeholder="Confirm new password">
        </div>
    
    <p></p>
  </div>
  <div class="actions" >
    <div class="ui cancel negative button">Cancel</div>
    <button class="ui approve positive button" type="submit">Update</button>
    </form>
  </div>
</div>
<?php 
} else if ($this->session->userdata['userSession']['user_type'] == 'REGULAR') {
    redirect('CLogin/viewPos');
} else if ($this->session->userdata['userSession']['user_type'] == 'SUPERADMIN') {
    redirect('CLogin/viewSuperadminDashboard');
} else {
    redirect('CInitialize');
}
?>
