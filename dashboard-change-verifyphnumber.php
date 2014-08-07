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

<!-- Modal -->
<div class="modal fade" id="changeNumberModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Change phone number</h4>
      </div>
      <div class="modal-body">
          <div class="media-heading text-center">Enter your phone number is</div>
          <form class="form-modal" method="post" action="" role="form">
              <div class="form-group">
                  <input class="form-control" type="text" placeholder="Phone number" />
              </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#verifyNumberModal">Save changes</button>
      </div>
    </div>
  </div>
</div><!--end modal-->

<!-- Modal -->
<div class="modal fade" id="verifyNumberModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Verify phone number</h4>
      </div>
      <div class="modal-body">
          <div class="media-heading text-center">Your phone number is</div>
          <p class="text-center">081234567</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#codeModal">Send code</button>
      </div>
    </div>
  </div>
</div><!--end modal-->

<!-- Modal -->
<div class="modal fade" id="codeModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Change phone number</h4>
      </div>
      <div class="modal-body">
          <div class="media-heading text-center">Enter verification code</div>
          <form class="form-modal" method="post" action="" role="form">
              <div class="form-group">
                  <input class="form-control" type="text" placeholder="Enter the code" />
              </div>
          </form>
      </div>
      <div class="modal-footer">
          <a class="append-right-2" href="">Request new code</a>
        <button type="button" class="btn btn-primary">Verify</button>
      </div>
    </div>
  </div>
</div><!--end modal-->
<?php include 'inc_footer.php'; ?>