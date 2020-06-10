<?php include 'includes/admin_navigation_bar.php'; ?>
<style>
    .row{
       background: rgba(255, 0, 0, 0.1);
    }
    .btn:hover{
        background:rgba(255, 0, 0, 0.7)
    }
</style>
<div class='container'>
    <div class='row mt-3'>
        <div class='col-1'></div>
        <div class='col-8'>
            <h1 class="mb-3 text-danger ml-5">Add Specialization</h1>
            <div style='background:rgba(25.5,25.5,25.5,0.1); padding:30px; '>
                
            <form action="action/act_add_specialization_insert_data.php" method="post">
                <div class="form-group">
                    <label>Doctors specialization</label>
                    <input type='text' class='form-control' name='dspecialization' >
                </div>
                <div class="form-group">           
                    <input type='submit' class='btn btn-danger' value='Add' name='btn_submit' >
                </div>
            </form>
            <table class='table table-striped table-hover'>
                <tr>
                    <th>Doctor specialization</th>
                    <th>Action</th>
                </tr> 
                <tr>
                    <?php
                 
                    $query = "select * from addspecialization";
                    $result = mysqli_query($con, $query);
                    while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                        <td><?= $data['doctor_specialization']; ?></td>
                        <td>
                            <a href='action/act_delete_specialization_delete_data.php?specializationid=<?= $data['id'];?>'><i class="fa fa-trash text-danger fa-2x"></i></a>
                        </td>
                    </tr>
                <?php } ?>

            </table>


        </div>
        <div class='col-3 text-success '>
            <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
        </div>
    </div>        
</div>
