<?php
include 'inc_header.php';
include 'main-menu-before-login.php';
?>
<div class="row">
    <div class="section-reg-sign">
        <form class="form-center" method="post" action="" name="registerForm">
            <p><input type="text" class="span3 form-control" name="email" id="email" placeholder="Enter Email" value=""></p>
            <p><input type="password" class="span3 form-control" id="registerPassword" name="registerPassword" placeholder="Enter Password"></p>
            <p><div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> I agree
                </label>
            </div></p>
            <p><button type="submit" class="btn btn-success btn-block text-center">Get started</button> </p>
        </form>
    </div>
</div><!--end row-->
<?php include 'inc_footer.php'; ?>