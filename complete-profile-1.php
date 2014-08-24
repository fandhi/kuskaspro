<?php
$page = "register";
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel panel-primary inverse-theme">
            <div class="panel-heading">
                <h3 class="panel-title">Complete your profile</h3>
            </div>
            <form class="form-center form-horizontal" method="post" action="" name="" role="form">
                <label>Step 1</label>
                <div class="form-group has-error">
                    <input type="text" class="form-control" id="" name="" placeholder="Name">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <input type="text" class="form-control datepicker" id="" name="" placeholder="Birth year">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox1" value="option1"> Male
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" id="inlineCheckbox2" value="option2"> Female
                    </label>
                </div>
                <div class="form-group has-error">
                    <input type="text" class="form-control" id="" name="" placeholder="Location">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group has-error">
                    <input type="text" class="form-control" id="" name="" placeholder="Enter phone number">
                    <span class="control-label">This field is required.</span>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-default btn-block text-center" onclick="window.location = 'complete-profile-2.php';">Next</button>
                </div>
                <div class="form-group text-center">
                    <a href="complete-profile-6.php">Skip</a>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>