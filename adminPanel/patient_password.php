<!DOCTYPE html>
<html>
    <head>
        <title>patient password</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

        <style type="text/css">
            *{
                margin:0px auto;
                padding:0px;
            }
            .content{
                height:1000px;
                width:500px;
                background-color: gray;

            }
            .one{
                margin-left: 10px;
                font-size: 32px;
            }
            .two{
                margin-left: 10px;
                font-size: 25px;
            }
            form{
                margin-left: 10px;

            }
        </style>
    </head>
    <body>
        <?php include "patientnavigationbar.php"; ?>
        <div class="container">
            <div class="col-md-12 jumbotron">
                <div class="one">
                    USER / CHANGE PASSWORD
                </div>	<br>
                <div class="two">
                    Change Password
                </div><br>
                <form class="navbar-form">
                    <div class="form-group">
                        Current Password <br>
                        <input type="password" class="form-control"><br><br>
                        New Password <br>
                        <input type="password" class="form-control"><br><br>
                        Confirm Password<br>
                        <input type="password" class="form-control"><br><br>
                        <input class="btn btn-success" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="asset/js/popper.min.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    </body>
</html>