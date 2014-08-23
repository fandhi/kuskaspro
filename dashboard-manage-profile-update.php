<?php
include 'inc_header.php';
include 'main-menu-after-login.php';
/*
    Script for update record from X-editable.
    */
include "connect.php";
    //delay (for debug only)
    sleep(1); 

    /*
    You will get 'pk', 'name' and 'value' in $_POST array.
    */
//    $pk = $_POST['pk'];
//    $expertise = $_POST['expertise'];
//    $value = $_POST['value'];

    /*
     Check submitted value
    */
    if(!empty($value)) {
        /*
          If value is correct you process it (for example, save to db).
          In case of success your script should not return anything, standard HTTP response '200 OK' is enough.
          */
          $result = mysql_query('update users set '.mysql_escape_string($expertise).'="'.mysql_escape_string($value).'" where user_id = "'.mysql_escape_string($pk).'"');
        
        
        //here, for debug reason we just return dump of $_POST, you will see result in browser console
        print_r($_POST);


    } else {
        /* 
        In case of incorrect value or error you should return HTTP status != 200. 
        Response body will be shown as error message in editable form.
        */

//        header('HTTP 400 Bad Request', true, 400);
//        echo "This field is required!";
    }
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
        <div class="col-sm-8 col-md-7">
            <div class="thumbnail col-sm-2 col-md-3  col-lg-2">
                <img class="" src="img/material/user.jpg" alt="user"/>
            </div>
            <div class="col-sm-10 col-md-9 col-lg-10">
                <div id="msg" class="alert hide"></div>
                <table class="table-custom highlight ">
                    <tbody>
                        <tr>
                            <td><a href="#" id="expertise" data-type="text" data-source="/expertise" data-title="Enter expertise" class="profile-edittable">expertise</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="salaryRange" data-type="text" data-title="Enter salary range" class="profile-edittable">salary range</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="name" data-type="text" data-title="Enter name" class="profile-edittable">name</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="age" data-type="text" data-title="Enter age" class="profile-edittable">age</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="gender" data-type="select" data-name="gender" data-source="/gender" data-original-title="Select gender" class="profile-edittable">gender</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="location" data-type="textarea" data-title="Enter location" class="profile-edittable">location</a></td>
                        </tr>
                        <tr>
                            <td><a href="#" id="contact" data-type="textarea" data-title="Enter contact" class="profile-edittable">contact</a></td>
                        </tr>
                        <tr>
                            <td><div class="col-lg-10"><a href="#" id="description" class="profile-edittable" data-type="textarea" data-pk="1" data-title="Enter description" class="profile-edittable">Description</a></div></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group text-center">
                                    <button type="button" id="saveBtn" class="btn btn-default">Update</button>
                                    <button type="button" id="resetBtn" class="btn btn-danger" onclick="window.location = 'complete-profile-5.php';">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end row-->
</div><!--/container-->
<?php include 'inc_footer.php'; ?>