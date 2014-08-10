<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <h3 class="append_bottom_3 text-center">Change phone number</h3>
                <div class="form-group has-error">
                    <input type="email" class="form-control" id="" name="" placeholder="Phone number">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-default" onclick="window.location='verify-phone-number.php';">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>