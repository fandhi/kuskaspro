<?php
$page = "register";
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="registerForm" role="form">
                <h3 class="append_bottom_3">Register</h3>
                <div class="form-group has-error">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" value="">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <div class="col-xs-8 prefix_0">
                    <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Enter Password">
                    </div>
                <input type="checkbox" checked data-on-color="primary" data-off-color="danger" name="onoff">
                    <span class="control-label clearfix pull-left">This field is required.</span>
                </div>
                <div class="form-group">
                    <input class="form-condtrol" type="file">
                </div>
                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> I agree
                    </label>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block text-center" onclick="window.location = 'landing-page-1.php';">Submit</button>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>