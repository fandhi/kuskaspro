<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="registerForm" role="form">
                <h3 class="append_bottom_3">Step 2</h3>
                <div class="form-group has-error">
                    <input type="text" class="form-control" id="" name="" placeholder="Enter verification code">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-default" onclick="window.location='registering-phone-3.php';">Go<span class="glyphicon glyphicon-chevron-right"></span></button>
                    </div>
                </div>
            </form>
            <div class="text-center">
                <p><small>the code will be sent in about a minute or less</small></p>
                <a href="">resend code</a>
            </div>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>