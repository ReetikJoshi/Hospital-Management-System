<?php include 'includes/patient_navigation_bar.php'; ?>

<style type="text/css">
    button.accordion {
        background-color: white;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    button.accordion.active, button.accordion:hover {
        background-color: #ddd;
    }

    /*button.accordion:after {
        content: '\002B';
        color: #777;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }
    
    button.accordion.active:after {
        content: "\2212";
    }*/

    /*div.panel {
        padding: 0 18px;
        background-color: grey;
        height:200px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
    }*/
</style>


<div class="container" style="min-height: 500px; background-color: lavender">
    <div class="row">
        <div class="col-1"></div>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'hmspatient');

        if (isset($_SESSION['variable'])) {
            $email = $_SESSION['variable'];
            $query = "select * from patientregistration where email='$email'";
            $result = mysqli_query($con, $query);
            $data = mysqli_fetch_assoc($result);
            $name = $data['name'];
        }
        ?>
        <?php
        $query = "select * from prescription where send_to='$name'";
        $result = mysqli_query($con, $query);
        $i = 1;
        while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-9">
                <p>
                    <a href="patient_view_prescription.php?msgid=<?= $data['id'] ?>"><button class="accordion" >From: <?= $data['send_from']; ?> </button></a>
                    <a href="action/act_patient_delete_prescription.php?msgdeleteid=<?= $data['id'] ?>"><button class="btn btn-primary btn-medium mt-3">Delete</button></a><br><br>
                </p>
            </div>


        <?php } ?>
        <div class="col-2 text-success ">
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>



    </div>
</div>

</div>
</div>