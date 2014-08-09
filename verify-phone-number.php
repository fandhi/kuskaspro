<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <h3 class="append_bottom_1 text-center">Your phone number is</h3>
                <div class="form-group">
                    <input disabled type="test" class="form-control form-disabled text-center" value="081234567">
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Send verification code</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>