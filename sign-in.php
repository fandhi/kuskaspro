<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="row">
    <div class="">
        <form class="form-center" method="post" action="" name="loginForm">
            <p><input type="text" class="span3 form-control" name="email" id="email" placeholder="Enter Email" value=""></p>
            <p><input type="password" class="span3 form-control" id="loginPassword" name="loginPassword" placeholder="Enter Password"></p>

            <div class="checkbox">
                <label>
                    <input type="checkbox" value="keep-login"> Keep Login
                </label>
            </div>

            <p><button type="button" class="btn btn-success btn-block text-center" onclick="window.location = 'landing-page-1.php';">Sign in</button> </p>
            <p class="text-center"><a href="">Forgot Password</a></p>
        </form>
    </div>
</div><!--end row-->
<?php include 'inc_footer.php'; ?>