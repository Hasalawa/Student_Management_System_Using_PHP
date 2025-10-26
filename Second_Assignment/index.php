<!DOCTYPE html>

<html>

    <head>

        <title>Kokawala Central Collage | Home</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="icon" href="title_logo.png"/>

    </head>

    <body class="body">
        
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 badge mt-5 animation">
                    <img src="logo.png" style="height:150px"/>
                    <br/>
                </div>
                <div class="col-12 mt-3 text-center text-dark">
                    <h1 style="font-family: 'Times New Roman', Times, serif; font-weight:bold; text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;" class="animation">MR/Kokawala Central Collage <br/> <span class="text-warning animation">Student Management System</span></h1>
                    <br/>
                </div>
            </div>

            <br/><br/>

            <div class="row">

                <div class="col-12">

                    <div class="row">

                        <div class="col-6 col-lg-3 badge icon mt-2 animation" onclick="adminLogin();">
                            <img src="admin.png" style="height: 65px;"/>
                            <br/>
                            <span class="text-dark">Admin</span>
                        </div>

                        <div class="offset-lg-1 col-6 col-lg-3 badge icon mt-2 animation" style="width: 215px;" onclick="teacherLogin();">
                            <img src="teacher.png" style="height: 65px;"/>
                            <br/>
                            <span class="text-dark">Teacher</span>
                        </div>

                        <div class="col-6 col-lg-3 badge icon mt-2 animation" onclick="studentLogin();">
                            <img src="student.png" style="height: 65px;"/>
                            <br/>
                            <span class="text-dark">Student</span>
                        </div>

                        <div class="offset-lg-1 col-6 col-lg-3 border badge icon mt-2 animation" style="width: 215px;" onclick="academicOfficerLogin();">
                            <img src="acadamic_officer.png" style="height: 65px;"/>
                            <br/>
                            <span class="text-dark">Academic Officer</span>
                        </div>

                    </div>

                </div>

                <div class="col-12 mt-5 text-center">
                    <h6 class="animation">Click your category!....</h6>
                </div>

                <div class="col-12 mt-5">
                    <hr class="animation"/>
                    <p class="animation text-center">&copy; 2023 kokawalacentralcollage.lk || All Right Reserved <br/> <span>Our Privacy Policy</span></p>
                </div>

            </div>

        </div>

        <script src="script.js"></script>

    </body>

</html>