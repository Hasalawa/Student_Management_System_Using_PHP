<?php

session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Student Dashboard | Kokawala Central Collage</title>
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
                                    <img src="student.png" class="animation" style="width: 50%;"/>
                                </div>
                                <div>
                                    <h6 class="animation" style="font-weight: bold; font-family: monospace;">Welcome <?php echo $_SESSION["student"]["name"]; ?>!</h6>
                                    <hr class="animation"/>
                                </div>
                                <div class="col-lg-12 animation">

                                    <button class="col-12 btn btn-primary animation" onclick="assignment();">Assignments</button>
                                    <br/><br/>
                                    <button class="col-12 btn btn-primary animation" onclick="assignmentMarks();">Assignment Marks</button>
                                    <br/><br/>
                                    <button class="col-12 btn btn-primary animation" onclick="studentProfile();">Profile</button>
                                    <br/><br/>
                                    <button class="col-12 btn btn-primary animation" onclick="vln();">View Lesson Notes</button>
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
                                <div class="col-12 col-lg-7 px-1">
                                    <div class="row g-1">
                                        <div class="col-12 list-group-item-light border border-3 rounded-3 animation">
                                            <div class="text-center">
                                                <br/>
                                                <span class="fs-4 fw-bold text-primary">ONLINE PAYMENTS</span>
                                                <br/>
                                            </div>
                                            <div class="text-center">
                                                <span class="fs-5 fw-bold text-secondary">Grade Upgrade</span>
                                                <br/><br/>
                                            </div>
                                            
                                            <div class="offset-1 col-10">
                                                <span class="fs-5 fw-bold text-dark">Grade Upgrade Fee: Rs.1,000.00</span>
                                                <br/><br/>
                                            </div>
                                            <div class="offset-1 col-10">
                                                <span class="fs-5 fw-bold text-dark">Name:</span>
                                                <span class="fs-5 text-success fw-bold" id="name"><?php echo $_SESSION["student"]["name"]; ?></span>
                                                <br/><br/>
                                            </div>
                                            <div class="offset-1 col-10">
                                                <span class="fs-5 fw-bold text-dark">Student Id:</span>
                                                <span class="fs-5 text-success fw-bold" id="stu_id"><?php echo $_SESSION["student"]["id"]; ?></span>
                                                <br/><br/>
                                            </div>
                                            <div class="offset-1 col-10">
                                                <span class="fs-5 fw-bold text-dark">Current Grade:</span>
                                                <span class="fs-5 text-success fw-bold" id="stu_grade">Grade <?php echo $_SESSION["student"]["grade"]; ?></span>
                                                <br/><br/>
                                            </div>
                                            <div class="text-end col-11">
                                                <button class="btn btn-primary" onclick="proceedPayment();">Proceed Payment</button>
                                            </div>
                                            <br/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-5 px-1">
                                    <div class="row g-1">
                                        <div class="animation col-12 border border-3 rounded">
                                            &nbsp;
                                            <p class="offset-1 text-danger fw-bold">Time Table</p>
                                            <hr/>
                                            
                                            <div class="text-center">
                                                <p class="text-secondary">Class Not Shedelued</p>
                                            </div>
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
        <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>

    </body>
</html>