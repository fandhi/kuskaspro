<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="loginForm" role="form">
                <h3 class="append_bottom_3 text-center">Log in and find the expert</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="">
                    <!--<span class="control-label">This field is required.</span>-->
                </div>
                <div class="form-group has-error">
                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter Password">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group">
                <div class="col-sm-4 prefix_0">
                    <button type="button" class="btn btn-default btn-block text-center" onclick="window.location = 'landing-page-1.php';">Sign in</button>
                </div>
                <div class="col-sm-8 col-xs-push-1 prefix_0">
                    <label class="checkbox">
                        <input type="checkbox" value="keep-login"> Keep me logged in
                    </label>
                </div>
                </div>
                <p class="form-group clearfix"><a href="forgot-password.php">Forgot Password</a></p>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>