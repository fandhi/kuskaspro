<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="section-reg-sign panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Complete your profile</h3>
            </div>
            <form class="form-center form-horizontal" method="post" action="" name="registerForm" role="form">
                <label>Step 2</label>
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" placeholder="Expertise">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="" name="" rows="3">Description (1000)</textarea>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="" name="" placeholder="Salary Range">
                </div>
                    <div class="form-group text-center">
                        <button type="button" class="btn btn-success" onclick="history.go(-1);return false;">Back</button>
                        <button type="button" class="btn btn-success" onclick="window.location='complete-profile-3.php';">Next</button>
                    </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>