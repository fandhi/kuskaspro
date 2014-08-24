<?php
$page = "register";
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel panel-primary inverse-theme">
            <div class="panel-heading">
                <h3 class="panel-title">Complete your profile</h3>
            </div>
            <div class="text-center">
                <h3><a href="landing-page-1.php">skipped...</a></h3>
                <p>you can manage your profile later via dashboard</p>
                <div class="form-group">
                    <button type="button" class="btn btn-default text-center" onclick="window.location = 'dashboard.php';">Ok</button>
                </div>
            </div>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>