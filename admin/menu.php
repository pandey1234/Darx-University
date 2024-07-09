<?php
$uArr = $obj->query("select roles from $tbl_admin where id='" . $_SESSION['sess_admin_id'] . "' ");
// print_r($uArr); die;
$rsU = $obj->fetchNextObject($uArr);
$myRols = explode(",", $rsU->roles);
?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="images/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>
          <?php echo ucfirst($_SESSION['sess_admin_username']); ?>
        </p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <?php if (in_array(1, $myRols)) { ?>
        <li
          class="treeview <?php echo (basename($_SERVER['SCRIPT_NAME']) == 'banner-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'banner-addf.php' || basename($_SERVER['SCRIPT_NAME']) == 'services-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'services-addf.php' ||  basename($_SERVER['SCRIPT_NAME']) == 'social-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'social-addf.php' || basename($_SERVER['SCRIPT_NAME']) == 'update-setting.php' || basename($_SERVER['SCRIPT_NAME']) == 'member-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'member-addf.php') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-cogs"></i> <span>Admin Setting</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">

            <?php if (in_array(1, $myRols)) { ?>
              <li
                class="<?php echo (basename($_SERVER['SCRIPT_NAME']) == 'banner-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'banner-addf.php') ? 'active' : '' ?>">
                <a href="banner-list.php"><i class="fa fa-circle-o"></i>Manage Banners</a></li>
            <?php } ?>
            <?php if (in_array(1, $myRols)) { ?>
              <li
                class="<?php echo (basename($_SERVER['SCRIPT_NAME']) == 'services-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'services-addf.php') ? 'active' : '' ?>">
                <a href="services-list.php"><i class="fa fa-circle-o"></i>Manage servicess</a></li>
            <?php } ?>
            <?php if (in_array(1, $myRols)) { ?>
              <li
                class="<?php echo (basename($_SERVER['SCRIPT_NAME']) == 'member-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'member-addf.php') ? 'active' : '' ?>">
                <a href="member-list.php"><i class="fa fa-circle-o"></i>Manage Member</a></li>
            <?php } ?>
            <?php if (in_array(1, $myRols)) { ?>
              <li
                class="<?php echo (basename($_SERVER['SCRIPT_NAME']) == 'faq-banner-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'faq-banner-addf.php') ? 'active' : '' ?>">
                <a href="faq-banner-list.php"><i class="fa fa-circle-o"></i>Manage FAQ Banner</a></li>
            <?php } ?>
            <?php if (in_array(1, $myRols)) { ?>
              <li
                class="<?php echo (basename($_SERVER['SCRIPT_NAME']) == 'portfolio-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'portfolio-addf.php') ? 'active' : '' ?>">
                <a href="portfolio-list.php"><i class="fa fa-circle-o"></i>Manage Portfolio</a></li>
            <?php } ?>
            <?php if (in_array(1, $myRols)) { ?>
              <li
                class="<?php echo (basename($_SERVER['SCRIPT_NAME']) == 'tnc-list.php' || basename($_SERVER['SCRIPT_NAME']) == 'tnc-addf.php') ? 'active' : '' ?>">
                <a href="tnc-list.php"><i class="fa fa-circle-o"></i>Manage TnC</a></li>
            <?php } ?>
            
            
          </ul>
        </li>
      <?php } ?>
    </ul>
  </section>
</aside>