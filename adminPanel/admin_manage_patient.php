<?php include 'includes/admin_navigation_bar.php'; ?>

<?php
if ($_SESSION['variable'] == "") {
    header('location:admin_login.php');
}
?>
<style>
    .row{
        background: rgba(255, 0, 0, 0.1);
    }
</style>
<div class="container">
    <div class="row mt-3">
        <div class="col-1 ">

        </div>
        <div class="col-8 mt-2">
            <h1 class="text-danger ml-5">Manage Patient</h1>
            <table class="table table-hover table-striped mt-3" style="background:rgba(25.5,25.5,25.5,0.1); padding:30px">

                <tr class="bg-danger text-light">
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <?php
                    $query = "select * from patientregistration";
                    $result = mysqli_query($con, $query);
                    $i = 1;
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <td><?= $i++ ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['address'] ?></td>
                        <td><?= $data['city'] ?></td>
                        <td><?= $data['gender'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td>
                            <a href="action/act_admin_delete_appointment.php?patientid=<?= $data['id']; ?>"><i class="fa fa-trash  text-danger fa-2x"></i></a>
                        </td>
                    </tr>
                <?php } ?>

            </table>
        </div>
        <div class="col-3 text-success">
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>

    </div>
</div>
