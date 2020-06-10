<html>
    <head>
        <title>adminnavigationbar</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
        <<link rel="stylesheet" href="asset/fontawesome/css/all.css"/>

    </head>
    <style>
        .container-fluid{
        border-bottom: 3px solid black;
        }
        
        .color-me:hover{
            color:black;
}
    </style>
    <body>
        <div class="container-fluid bg-danger">
            <div class="container">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="admin_manage_patient.php"><span class="color-me">Manage Patients </span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="admin_add_specialization.php"><span class="color-me">Add Specialization</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="admin_doctor_registration.php"><span class="color-me">Add Doctor</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="admin_manage_doctor.php"><span class="color-me">Manage Doctors</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href=".php"><span class="color-me">Appointments</span></a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="dropdown">
                                <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-lock mr-2"></i>
                                    Admin
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
                                <div class="dropdown-menu bg-secondary" aria-labelledby="dropdownMenuLink">
                                    <!--<a class="dropdown-item" href="patient_update.php?patientid=<?= $data['id']; ?>">profile</a>-->
                                    <a class="dropdown-item bg-secondary text-light" href="action/act_admin_logout.php">log Out</a>

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
