<?php
$page = "dashboard";
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <div id="listMenuDashboard" class="list-group">
                <a href="dashboard-manage-profile.php" class="list-group-item">Manage Profile</a>
                <a href="dashboard-change-password.php" class="list-group-item">Change Password</a>
                <a href="dashboard-change-verifyphnumber.php" class="list-group-item">Change/verify ph.number</a>
                <a href="dashboard-go-premium.php" class="list-group-item">Go Premium</a>
            </div>
        </div>
        <div id="dashboardContent" class="col-sm-8 col-md-9">
            
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>