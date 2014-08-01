<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="section-reg-sign">
            <form class="form-center form-horizontal" method="post" action="" name="loginForm" role="form">
                <div class="form-group has-error">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Enter Password">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group">
                <div class="col-sm-4 prefix_0">
                    <button type="button" class="btn btn-success btn-block text-center" onclick="window.location = 'landing-page-1.php';">Sign in</button>
                </div>
                <div class="col-sm-6 col-xs-push-1">
                    <label class="checkbox">
                        <input type="checkbox" value="keep-login"> Keep Login
                    </label>
                </div>
                </div>
                <p class="form-group text-center clearfix"><a href="">Forgot Password</a></p>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>