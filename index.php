<!DOCTYPE html>
<html>
    <head>
        <title>frontpage</title>
        <link rel="stylesheet" type="text/css" href="admin/asset/css/bootstrap.min.css">

        <style type="text/css">
            *{
                margin:0px auto;
                padding:0px;
            }
            .header{

                position: relative;
                height:814px;
                width:1170px;
                background-color: white ;
                /*background-size: 54px;*/
                background-image:url(adminPanel/asset/images/nurse1111.jpg);
                word-spacing: 15px;
                color:darkblue;
                text-align: center;
            }
            .nav{
                height:100px;
                width:1170px;
                color:darkblue;
                font-size: 35px;
                background-color: darkgray;
                background:rgba(100,100,100,0.1);
                font-size: 35px;
                text-decoration:none;

            }
            .nav ul{
                list-style: none;

            }
            .nav li a{
                line-height: 50px;
                display:block;
                /*border-right: 1px solid ;*/
                text-align: center;
                width:387px;
                height:100px;
                text-decoration: none;
                float:left;
                color:darkblue;



            }
            .nav li a:hover{
                color:white;
                background-color: darkblue;
                transition: 1s;
            }
            #q{

                font-size: 20px;
            }
            #w{
                border-left: 3px groove blue
            }
            #a{
                top:80px;
                position:absolute;
                left:80px;
                font-size: 60px
            }

        </style>
    </head>
    <body><div class="container">
            <div class="header">

                <h1 id="a">HOSPITAL <br>MANAGEMENT <br> SYSTEM</h1>
            </div>
            <div class="footer">
                <div class="nav">

                    <ul >
                        <li><a href="adminPanel/patient_login.php" >PATIENTS LOGIN <br><span id="q">click here</span></a></li>
                        <li><a href="adminPanel/doctorlogin.php" id="w" >DOCTORS LOGIN <br><span id="q">click here</span></a></li>
                        <li><a href="adminPanel/admin_manage_patient.php" id="w">ADMIN LOGIN <br><span id="q">click here</span></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="adminPanel/asset/js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="adminPanel/asset/js/popper.min.js"></script>

        <script type="text/javascript" src="adminPanel/asset/js/bootstrap.min.js"></script>
    </body>
</html>