<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Complete your profile</h3>
            </div>
            <div class="thumbnail col-sm-2 col-xs-push-1 append_top_4">
                <img class="img-thumbnail" src="img/material/user.jpg" alt="user"/>
            </div>
            <form class="form-center form-horizontal" method="post" action="" name="registerForm" role="form">
                <label>Step 4</label>
                <ul class="list-group">
                    <li class="list-group-item">expertise</li>
                    <li class="list-group-item">salary range</li>
                    <li class="list-group-item">name</li>
                    <li class="list-group-item">age</li>
                    <li class="list-group-item">gender</li>
                    <li class="list-group-item">location</li>
                    <li class="list-group-item">contact</li>
                </ul>
                <div class="form-group">
                    <textarea class="form-control" rows="4" disabled>Description</textarea>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-success" onclick="history.go(-1);
                            return false;">Back</button>
                    <button type="button" class="btn btn-success" onclick="window.location = 'complete-profile-5.php';">Finish</button>
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>