<html>
    <head>
        <title>doctornavigationbar</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/all.css">    </head>
    <style>
        .a{
            border-bottom: 3px solid orange;
        }
        .color-me:hover{
            color:orange;
        }

    </style>
    <body>
        <div class="container-fluid a bg-success">
            <div class="container">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto b">
                                <li class="nav-item">
                                    <a class="nav-link " href="doctorupdate.php" style="color:white;"><span class="color-me">Doctors update</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="doctorappointmenthistory.php" style="color:white;"> <span class="color-me">Appointment history</span></a>
                                </li>
                                 
                            </ul>
                        </div>

                        <div class="dropdown">
                            <a class="btn btn-warning dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-md mr-2"></i>
                                <?php
                                session_start();
                                $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

                                if (isset($_SESSION['variable'])) {
                                    $email = $_SESSION['variable'];
                                    $query = "select * from doctorregistration where doctor_email='$email'";
                                    $result = mysqli_query($con, $query);
                                    $data = mysqli_fetch_assoc($result);
                                    echo $data['doctor_name'];
                                }
                                ?>
                            </a>
                            <div class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item bg-warning " href="action/act_doctor_logout.php">log Out</a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="asset/js/popper.min.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
