<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <h3 class="append_bottom_3 text-center">Change your password</h3>
                <div class="form-group">
                    <input class="form-control" type="password" name="" value="" placeholder="Current password"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="" value="" placeholder="New password"/>
                </div>
                <div class="form-group append_bottom_3">
                    <input class="form-control" type="password" name="" value="" placeholder="New password"/>
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