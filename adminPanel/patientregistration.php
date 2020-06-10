<!DOCTYPE html>
<html>
    <head>
        <title>patient registration</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

        <style type="text/css">
            .container{
                background-image:url(asset/images/Background3.jpg); 

            }
            .q{
                background:rgba(10,90,100,0.4);
            }


            input[type="radio"]{
                height: 12px;
                width:12px;
                vertical-align: center;
            }
            input[type="checkbox"]{
                height:14px;
                width:14px;
                vertical-align: center;
            }


            .gender{
                word-spacing: 20px
            }
            a{
                text-decoration: none;
                color:darkblue;
            }
        </style>
    </head>
    <body>	
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4 q">
                    <div class="h2">
                        Patient Registration
                    </div>
                    <div class="h3">
                        Sign Up
                    </div>
                    <div class="mb-3">
                        Enter your personal details below
                    </div>
                    <form  action="action/act_patientregistration_insert_data.php" method="post">
                        <span class="text-danger float-right">
                            <?php
                            if (isset($_SESSION['ername'])) {
                                echo $_SESSION['ername'];
                                unset($_SESSION['ername']);
                            }
                            ?>  
                        </span>
                        <div class="form-group">    
                            <input type="text" class="form-control" placeholder="First Name" name="name">
                        </div>
                        <span class="text-danger float-right">
                            <?php
                            if (isset($_SESSION['eraddress'])) {
                                echo $_SESSION['eraddress'];
                                unset($_SESSION['eraddress']);
                            }
                            ?>  
                        </span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Address" name="address">
                        </div>
                        <span class="text-danger float-right">
                            <?php
                            if (isset($_SESSION['ercity'])) {
                                echo $_SESSION['ercity'];
                                unset($_SESSION['ercity']);
                            }
                            ?>  
                        </span>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="City" name="city">
                        </div>

                        <div class="gender form-group">
                            <label>Gender</label> <br> 
                            <span class="text-danger float-right">
                                <?php
                                if (isset($_SESSION['ergender'])) {
                                    echo $_SESSION['ergender'];
                                    unset($_SESSION['ergender']);
                                }
                                ?>  
                            </span>
                            <input type="radio" name="gender" value="Female">Female 
                            <input type="radio" name="gender" value="Male">Male
                        </div>

                        <div class="h6">
                            Enter your account details below
                        </div><br>
                        <span class="text-danger float-right">
                            <?php
                            if (isset($_SESSION['eremail'])) {
                                echo $_SESSION['eremail'];
                                unset($_SESSION['eremail']);
                            }
                            ?>  
                        </span>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <span class="text-danger float-right">
                            <?php
                            if (isset($_SESSION['erpassword'])) {
                                echo $_SESSION['erpassword'];
                                unset($_SESSION['erpassword']);
                            }
                            ?>  
                        </span>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <span class="text-danger float-right">
                            <?php
                            if (isset($_SESSION['ercpassword'])) {
                                echo $_SESSION['ercpassword'];
                                unset($_SESSION['ercpassword']);
                            }
                            ?>  
                        </span>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm password" name="cpassword">
                        </div>
                        <span class="text-danger float-right">
                            <?php
                            if (isset($_SESSION['er'])) {
                                echo $_SESSION['er'];
                                unset($_SESSION['er']);
                            }
                            ?>  
                        </span>
                        <div class="form-group">
                            <input type="checkbox" name="checkbox"> I agree
                        </div>
                        <div class="form-group">
                            <input class="btn btn-light" type="submit" value="Submit" name="btn_submit">
                        </div>
                        <div class="mb-3">
                            Already have an account?<a href="patient_login.php"><b>Log-in</b></a>
                        </div>

                    </form>


                    <div>
                        <?php
                        if (isset($_SESSION['msg'])) {
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>

    </div>
    <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="asset/js/popper.min.js"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

</body>
</html>