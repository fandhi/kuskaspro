<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center" method="post" action="" name="registerForm" role="form">
                <label>Input phone number</label>
                <div class="form-inline append_bottom_4 downfix_2">
                    <div class="form-group col-xs-3">
                        <input type="text" class="form-control" id="" name="" placeholder="">
                    </div>
                    <div class="form-group has-error col-xs-9">
                        <input type="text" class="form-control" id="" name="" placeholder="Enter phone number">
                        <span class="control-label">This field is required.</span>
                    </div>
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-success" onclick="window.location='registering-phone-2.php';">Go<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>