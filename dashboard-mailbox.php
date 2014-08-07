<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <div id="listMenuDashboard" class="list-group">
                <a href="dashboard-manage-profile.php" class="list-group-item active">Manage Profile</a>
                <a href="dashboard-change-password.php" class="list-group-item">Change Password</a>
                <a href="dashboard-change-verifyphnumber.php" class="list-group-item">Change/verify ph.number</a>
                <a href="dashboard-go-premium.php" class="list-group-item">Go Premium</a>
            </div>
        </div>
        <div id="dashboardContent" class="col-sm-8 col-md-9">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Mailbox</th>
                        <th colspan="2" align="right" class=" text-right">
                            <form class="form-horizontal" method="post" action="" role="form">
                                <div class="row">
                                    <div class="col-xs-3 pull-right">
                                <select class="form-control">
                                    <option value="">Action</option>
                                    <option value="">3rr3</option>
                                    <option value="">hjyuk</option>
                                </select>
                                    </div>
                                </div>
                            </form>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="20%">Sender</td>
                        <td width="60%">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</td>
                        <td width="20%">14:37:17</td>
                    </tr>
                    <tr>
                        <td>Sender</td>
                        <td>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam</td>
                        <td>14:37:17</td>
                    </tr>
                    <tr>
                        <td>Sender</td>
                        <td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</td>
                        <td>14:37:17</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><!--end row-->
</div>
<?php include 'inc_footer.php'; ?>