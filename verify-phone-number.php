<?php
$page = "verify-phone-number";
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <h3 class="append_bottom_1 text-center">Your phone number is</h3>
                <div class="form-group">
                    <input disabled type="test" class="form-control form-disabled text-center" value="08123456789">
                </div>
                <label>We have sent you an SMS with activation code to your phone. Please check your inbox message</label>
                <div class="form-horizontal upfix_2">
                    <div class="form-group">
                        <button type="button" class="btn btn-default btn-block text-center" onclick="window.location='dashboard.php';">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>