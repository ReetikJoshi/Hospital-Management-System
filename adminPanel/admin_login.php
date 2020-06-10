<html>
    <head>
        <title>admin login</title>

    </head>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <style>
        .container{
            height:650px;
            width:1200px;
            background-image: url(images/background5.jpg)
        }
        .one{
            height:650px;
            width:400px;
            background-color: blue;
            background: rgba(255, 255, 255, 0.4);
            margin-left: 350px;
        }

    </style>
    <body>
        <div class="container bg-primary">
            <!--<div class='col-2'></div>-->
            <div class='col-8'>
                <div class='one'>
                <div class='row'>
                    <div class="col-1"></div>
                    <div class="col-8 mt-5 ">
                        <h1>HMS Admin Login</h1>
                    </div>
                    <!--<div class="col-2"></div>-->

                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-8 mt-5">
                        <form action='action/act_admin_login.php' method='post'>
                            <div class="form-group">
                                <label >Email address</label>
                                <span class='text-danger float-right'>
                                    <?php
                                    session_start();
                                    if(isset($_SESSION['eremail'])){
                                        echo $_SESSION['eremail'];
                                        unset($_SESSION['eremail']);
                                    }
                                    ?>
                                </span>
                                <input type="email" class="form-control"  placeholder="Enter email" name='email'>
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <span class='text-danger float-right'>
                                    <?php
                                    
                                    if(isset($_SESSION['erpassword'])){
                                        echo $_SESSION['erpassword'];
                                        unset($_SESSION['erpassword']);
                                    }
                                    ?>
                                </span>
                                <input type="password" class="form-control"  placeholder="Password" name='password'>
                            </div>
                            <div>
                                
                            <button type="submit" class="btn btn-primary" name='btn_login'>Login</button>
                            </div>
                            
                        </form>
                    </div>
                    

                </div>
            </div>
            </div>
            <!--<div class='col-2'></div>-->

            
        </div>


        <script type="text/javascript" src="asset/js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="asset/js/popper.min.js"></script>
        <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    </body>
</html>