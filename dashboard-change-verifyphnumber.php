<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <div class="list-group">
                <a href="dashboard-manage-profile.php" class="list-group-item">Manage Profile</a>
                <a href="dashboard-change-password.php" class="list-group-item">Change Password</a>
                <a href="dashboard-change-verifyphnumber.php" class="list-group-item active">Change/verify ph.number</a>
                <a href="dashboard-go-premium.php" class="list-group-item">Go Premium</a>
            </div>
        </div>
        <div class="col-sm-8 col-md-9">
            <h3>Change / verify phone number</h3>
            <table class="table-custom">
                <tbody>
                    <tr>
                        <td width="25%">Your phone number</td>
                        <td width="5%">:</td>
                        <td width="50%">+6281234567890</td>
                        <td width="20%"><button class="btn btn-default" type="button" onclick="window.location='change-number.php';">Change</button></td>
                    </tr>
                    <tr>
                        <td>status</td>
                        <td>:</td>
                        <td>unverified</td>
                        <td><button class="btn btn-default" type="button" onclick="window.location='verify-code.php';">Verify</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><!--end row-->
</div>


<?php include 'inc_footer.php'; ?>