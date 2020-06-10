<!DOCTYPE html>
<html>
    <head>
        <title>patient login</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
        <script type="text/javascript" src="asset/js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
        <style type="text/css">
            .container{
                background-image:url(images/Background3.jpg);
                height:630px;  
            }
            .q{
                background-color: darkblue;
                background:rgba(10,90,100,0.4);
                height:630px;  
            }
            a{
                text-decoration: none;
                color:darkblue;
            }
        </style>
    </head>
    <body>
        <div class="container">
            
            <?php
//            session_start();
//            if (isset($_SESSION['msg'])) {
//                echo $_SESSION['msg'];
//                unset($_SESSION['msg']);
//            }
//            ?>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 q">
                    <div class="h2 mt-3">HMS Patient Login
                    </div>
                    <div class="h4 mt-4">Sign in to your account
                    </div>
                    <div class="mt-3">
                        please enter your name and password to log in 
                    </div>
                    <form action="action/act_patient_login.php" class="navbar-form" method="post">
                        <span class=" text-danger float-right">
                            <?php
                            if (isset($_SESSION['eremail'])) {
                                echo $_SESSION['eremail'];
                                unset($_SESSION['eremail']);
                            }
                            ?>
                        </span>
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" placeholder="Email" name="email"> 
                        </div>
                        <span class=" text-danger float-right">
                            <?php
                            if (isset($_SESSION['erpassword'])) {
                                echo $_SESSION['erpassword'];
                                unset($_SESSION['erpassword']);
                            }
                            ?>
                        </span>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password"><br>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-light" type="submit" value="Login" name="btn_login">	
                        </div>
                    </form>
                    <div class="mt-4">Don't have an account yet? <a href="patientregistration.php"><b>Create an account</b></a>
                    </div> <br><br><br><br><br><br>

                    <div class="mt-5">
                        @2017 HMS.All rights reserved.
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>

    </body>
</html>