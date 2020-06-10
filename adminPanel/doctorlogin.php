<!DOCTYPE html>
<html>
    <head>
        <title>doctor login</title>
        <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

        <style type="text/css">
            .container{
                height:650px;
                background-image:url(asset/images/nurse2.jpg);
            }
            .q{
                background:rgba(0,0,0,0.1);
            }
           
        </style>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-8"></div>
                <div class="col-4 q">
                    <div class="h1 mt-4 mb-5">HMS / Doctors Login</div>
                    
                    <div class="mb-4">
                            please enter your name and password to log in 
                        </div>
                    <form action="action/act_doctor_login.php"  method='post'>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name='demail'>
                        </div>
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name='dpassword'>
                        </div>
                        <div class="form-group mt-4 mb-5">
                        <input class="btn btn-primary" type="submit" value="Login" name='btn_login'>	
                        </div>
                    </form>
                    <br><br><br><br><br><br>
                    <div class="mb-5">
                        @2018 HMS.All rights reserved.
                    </div>
                </div>
                
            </div>
            
        </div>
        <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="asset/js/popper.min.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

    </body>
</html>