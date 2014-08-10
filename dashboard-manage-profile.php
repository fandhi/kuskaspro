<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <div id="listMenuDashboard" class="list-group">
                <a href="dashboard-manage-profile.php" class="list-group-item active">Manage Profile</a>
                <a href="dashboard-change-password.php" class="list-group-item">Change Password</a>
                <a href="dashboard-change-verifyphnumber.php" class="list-group-item">Change/verify ph.number</a>
                <a href="dashboard-go-premium.php" class="list-group-item">Go Premium</a>
            </div>
        </div>
        <div id="dashboardContent" class="col-sm-8 col-md-9">
            <h3>Manage Profile</h3>
            <div class="col-xs-6 col-md-3">
                <div class="thumbnail">
                    <img src="img/material/90-Silver-Blank-Card-01.jpg" alt="...">
                    <div class="caption">
                        <p>Profile card</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <button type="button" class="btn btn-default glyphicon glyphicon-plus" disabled>
                    
                </button>
            </div>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>