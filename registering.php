<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="section-reg-sign">
            <form class="form-center form-horizontal" method="post" action="" name="registerForm" role="form">
                <div class="form-group has-error">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <input type="password" class="form-control" id="registerPassword" name="registerPassword" placeholder="Enter Password">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group">
                    <label class="checkbox">
                        <input type="checkbox" value="remember-me"> I agree
                    </label>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-success btn-block text-center" onclick="window.location = 'registering-phone-1.php';">Get started</button>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>