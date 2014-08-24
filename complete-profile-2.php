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
                <div class="form-group" style="position: relative;width: 80px;">
                    <select id="salary_type" class="styled" name="salary_type">
                        <option value="Daily">Daily</option>
                        <option value="Hourly">Hourly</option>
                    </select>
                </div>
                <br/>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-default" onclick="history.go(-1);
                            return false;">Back</button>
                    <button type="button" class="btn btn-default" onclick="window.location = 'complete-profile-3.php';">Next</button>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>