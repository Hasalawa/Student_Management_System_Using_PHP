<?php

session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Admin Dashboard | Kokawala Central Collage</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="icon" href="title_logo.png"/>

    </head>

    <body>

        <div class="container-fluid">

            <div class="row">
                <div class="col-3 col-lg-2 badge list-group-item-secondary animation">
                    <img src="logo.png" class="mt-2 col-9"/>
                </div>
                <div class="col-9 col-lg-10 list-group-item-secondary animation">
                    <h1 class="text-center mt-4 col-12" style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Kokawala Central Collage</h1>
                    <h1 class="text-center text-warning" style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Student Management System</h1>
                </div>
            </div>

            <div class="row">

                <div class="col-12 col-lg-2">
                    <div class="row">
                        <div class="align-items-start list-group-item-secondary col-12">
                            <div class="row g-1 text-center">
                                <hr class="animation"/>
                                <div class="text-center col-12 col-lg-12 text-center mt-2">
                                    <img src="admin.png" class="animation" style="width: 50%;"/>
                                </div>
                                <div>
                                    <h6 class="animation" style="font-weight: bold; font-family: monospace;">Welcome <?php echo $_SESSION["a"]["name"]; ?>!</h6>
                                    <hr class="animation"/>
                                </div>
                                <div class="col-lg-12 animation">

                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle col-12 animation" data-bs-toggle="dropdown">Manage</button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="administration.php">Administration</a></li>
                                            <li><a class="dropdown-item" href="teachers.php">Teachers</a></li>
                                            <li><a class="dropdown-item" href="academicOfficers.php">Academic Officers</a></li>
                                            <li><a class="dropdown-item" href="students.php">Students</a></li>
                                        </ul>
                                    </div>

                                    <br/>
                                    <button class="col-12 btn btn-primary animation" onclick="adminProfile();">Profile</button>
                                    <br/><br/>
                                    <button class="col-12 btn btn-primary animation" onclick="checkResult();">Check Results</button>
                                    <br/><br/>
                                    <button class="col-12 btn btn-danger animation" onclick="adminLogout();">Log Out</button>
                                </div>
                                <div>
                                    <hr class="animation"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-10">
                    <div class="row">
                        &nbsp;
                        <h1 class="animation">Dashboard</h1>
                        <div>
                            <hr class="animation">
                        </div>
                        <div class="col-12 col-lg-12">
                            <div class="row g-1">
                                <div class="col-6 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 text-center list-group-item-success border border-1 border-dark rounded animation">
                                            <?php 
                                            
                                            $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

                                            $q = "SELECT * FROM `students`";
                    
                                            $rs = $dbms->query($q);
                                            $num = $rs->num_rows;

                                            ?>

                                            <br/>
                                            <span class="fs-4 bold">Students</span>
                                            <br/>
                                            <span class="fs-5 text-dark">--(<?php echo $num ?>)--</span>
                                            <br/><br/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 text-center list-group-item-danger border border-1 border-dark rounded animation">

                                            <?php 
                                            
                                            $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

                                            $q = "SELECT * FROM `teachers`";
                    
                                            $rs = $dbms->query($q);
                                            $num = $rs->num_rows;

                                            ?>

                                            <br/>
                                            <span class="fs-4 bold">Teachers</span>
                                            <br/>
                                            <span class="fs-5 text-dark">--(<?php echo $num ?>)--</span>
                                            <br/><br/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 text-center list-group-item-info border border-1 border-dark rounded animation">

                                            <?php 
                                            
                                            $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

                                            $q = "SELECT * FROM `acadamic_officer`";
                    
                                            $rs = $dbms->query($q);
                                            $num = $rs->num_rows;

                                            ?>

                                            <br/>
                                            <span class="fs-4 bold">Academic Officer</span>
                                            <br/>
                                            <span class="fs-5 text-dark">--(<?php echo $num ?>)--</span>
                                            <br/><br/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <hr class="animation"/>
                </div>
                <p class="animation text-center">&copy; 2023 kokawalacentralcollage.lk || All Right Reserved <br/> <span>Our Privacy Policy</span></p>
            </div>

        </div>

        <script src="script.js"></script>
        <script src="bootstrap.bundle.min.js"></script>

    </body>
</html>