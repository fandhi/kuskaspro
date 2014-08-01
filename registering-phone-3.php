<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center" method="post" action="" name="registerForm" role="form">
                <label>Create Password</label>
                <div class="form-inline append_bottom_4 downfix_2">
                    <div class="form-group has-error col-xs-9">
                        <input type="password" class="form-control" id="" name="" placeholder="Enter password">
                        <span class="control-label">This field is required.</span>
                    </div>
                    <label class="checkbox-inline">
                        <input type="checkbox" class="" id="" name="">
                    </label>
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-success" onclick="window.location='dashboard.php';">Go<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                </div>
            </form>
            <div class="text-center">
                <p><small>password must contain at least 8 character, one uppercase, and one number</small></p>
            </div>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>