<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <h3 class="append_bottom_3 text-center">Change your password</h3>
                <div class="form-group">
                    <input type="password" class="form-control" id="" name="" placeholder="Input your old password">
                    <!--<span class="control-label">This field is required.</span>-->
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="" name="" placeholder="Input new password">
                    <!--<span class="control-label">This field is required.</span>-->
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="" name="" placeholder="Confirm new password">
                    <!--<span class="control-label">This field is required.</span>-->
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-default">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>