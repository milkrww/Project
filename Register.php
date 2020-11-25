<?php session_start(); $title = "REGISTER"; $basePath = basename(__FILE__, '.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php include_once('./Head.php'); ?>
    <?php include_once('./db/Register_DB.php');?>
    </head>
    
    <body>
        <div class = "container">
            <div class = "row justify-content-center">
                <div class = "col-md-6 ">
                    <div class="card border-2 shadow">
                        <div class="card-body">
                            <h1 class="card-title text-center ">REGISTER</h1>
                            <form name = "regform" method = "POST" Onsubmit = "check_form();">

                                <div class="from-group mb-3">
                                    <label>Restaurant Name</label>
                                    <input type="text" class="form-control" name="restaurantname" placeholder="Enter Your Restaurant Name">
                                </div>
                                <!--  -->
                                <div class="from-group mb-3">
                                    <label>Fullname</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter Your Fullname">
                                </div>
                                <!--  -->
                                <div class="from-group mb-3">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Enter Your Address">
                                </div>
                                <!--  -->
                                <div class="from-group mb-3">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phonenumber" placeholder="Enter Your Phone Number">
                                </div>
                                <!--  -->
                                <div class="from-group mb-3">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Your E-mail">
                                </div>
                                <!--  -->
                                <div class="from-group mb-3">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter Your Username">
                                </div>
                                <!--  -->
                                <div class="from-group mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                                </div>
                                <!--  -->
                                <div class="from-group mb-3">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmpassword" placeholder="Re-Enter Your Password">
                                </div>
                                <!--  -->
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" name="regiter" class="btn btn-lg btn-warning" name="register">REGISTER</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>