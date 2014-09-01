<?php
$page = "change-number";
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <h3 class="append_bottom_3 text-center">Change phone number</h3>
                <label>Please confirm your country code and enter your phone number.</label>
                <div class="form-group">
                    <div class="arrow"></div>
                    <input type="email" class="form-control" id="" name="" placeholder="" value="India" disabled>
                    <!--<span class="control-label">This field is required.</span>-->
                </div>
                <div class="form-group">
                    <div class="col-lg-3 prefix_0">
                        <input type="email" class="form-control" id="" name="" placeholder="" value="+91">
                    </div>
                    <div class="col-lg-9 pasfix_0">
                        <input type="email" class="form-control" id="" name="" placeholder="Your phone number">
                    </div>
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group">
                        <button type="button" class="btn btn-default btn-block text-center" onclick="window.location='verify-phone-number.php';">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>