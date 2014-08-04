<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel">
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <h3 class="append_bottom_3 text-center">Verify code</h3>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Enter the code" />
                </div>
                <div class="form-horizontal upfix_2">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">Verify</button>
                    </div>
                </div>
            </form>
            <div class="text-center append_bottom_3">
                <a class="append-right-2" href="">Request new code</a>
            </div>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>