<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <div class="list-group">
                <a href="dashboard-manage-profile.php" class="list-group-item active">Manage Profile</a>
                <a href="dashboard-change-password.php" class="list-group-item">Change Password</a>
                <a href="dashboard-change-verifyphnumber.php" class="list-group-item">Change/verify ph.number</a>
                <a href="dashboard-go-premium.php" class="list-group-item">Go Premium</a>
            </div>
        </div>
        <div class="col-sm-8 col-md-9">
            <h3>Manage Privacy</h3>
            <form class="form-inline" method="post" action="" role="form">
                <table class="table">
                    <tbody>
                        <tr>
                            <td width="65%">Show email</td>
                            <td width="35%">
                                <div class="checkbox">
                                <input type="checkbox" name="" value="ON" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Show phone number</td>
                            <td>
                                <div class="checkbox">
                                <input type="checkbox" name="" value="ON" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Make my profile shown on search engine</td>
                            <td>
                                <div class="checkbox">
                                <input type="checkbox" name="" value="ON" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group pull-right">
                    <input class="btn btn-danger" type="button" name="" value="Delete account" />
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="button" name="" value="Save" />
                </div>
            </form>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>