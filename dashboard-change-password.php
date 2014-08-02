<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <div class="list-group">
                <a href="dashboard-mailbox.php" class="list-group-item">Mailbox<span class="badge pull-right">42</span></a>
                <a href="dashboard-manage-profile.php" class="list-group-item">Manage Profile</a>
                <a href="dashboard-manage-privacy.php" class="list-group-item">Manage Privacy</a>
                <a href="dashboard-change-password.php" class="list-group-item active">Change Password</a>
                <a href="dashboard-change-verifyphnumber.php" class="list-group-item">Change/verify ph.number</a>
                <a href="dashboard-go-premium.php" class="list-group-item">Go Premium</a>
            </div>
        </div>
        <div class="col-sm-8 col-md-9">
            <h3>Change Password</h3>
            <form class="form-horizontal col-md-4" method="" action="post" role="form">
                <div class="form-group">
                    <input class="form-control" type="password" name="" value="" placeholder="Current password"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="" value="" placeholder="New password"/>
                </div>
                <div class="form-group append_bottom_3">
                    <input class="form-control" type="password" name="" value="" placeholder="New password"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="button" name="" value="Save"/>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>