<html>
    <head>
        <title>patientnavigationbar</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="asset/css/jquery.timepicker.css">
        <link rel="stylesheet" type="text/css" href="asset/css/jquery.timepicker.min.css">
        <link rel="stylesheet" type="text/css" href="asset/fontawesome/css/all.css">

    </head>
    <style>
        .container-fluid{
            background-color:purple;
            border-bottom: 3px solid gold;
        }
        .color-me{
            
            color:white;
            font-weight:bold ;

        }
        .color-me:hover{
            color:gold;
        }
       

    </style>
    <body>
        <div class="container-fluid">
            <div class="container">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link " href="patient_book_appointment.php"><span class="color-me">My Appointment</span> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="patient_appointment_history.php"><span class="color-me">Appointment history</span></a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="patient_view_prescription_pagelink.php"><span class="color-me">Message</span></a>
                                </li>
                            </ul>

                        </div>

                        <div class="dropdown">
                            <a class="btn btn-warning dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user mr-2"></i>
                                <?php
                                session_start();
                                $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

                                if (isset($_SESSION['variable'])) {
                                    $email = $_SESSION['variable'];
                                    $query = "select * from patientregistration where email='$email'";
                                    $result = mysqli_query($con, $query);
                                    $data = mysqli_fetch_assoc($result);
                                    echo $data['name'];
                                }
                                ?>
                                
                            </a>
                            <div class="dropdown-menu bg-warning" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item  bg-warning" href="patient_update.php?patientid=<?= $data['id']; ?>">Profile</a>
                                <a class="dropdown-item bg-warning" href="action/act_patient_logout.php">log Out</a>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>

        <script type="text/javascript" src="asset/js/popper.min.js"></script>

        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="asset/js/jquery.timepicker.js"></script>
        <script type="text/javascript" src="asset/js/jquery.timepicker.min.js"></script>
    </body>
</html>
