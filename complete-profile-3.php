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
            <form class="form-center form-horizontal" method="post" action="" name="registerForm" role="form">
                <label>Step 3</label>
                <div class="thumbnail">
                    <img src="img/material/user.jpg" alt="user"/>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" id="" name="">
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-default" onclick="history.go(-1);return false;">Back</button>
                    <button type="button" class="btn btn-default" onclick="window.location='complete-profile-4.php';">Next</button>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>