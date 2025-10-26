<!DOCTYPE html>

<html>

    <head>

        <title>Student Login | Kokawala Central Collage</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="icon" href="title_logo.png"/>

    </head>

    <body class="body">

        <!--Student_Login-->

            <div class="container-fluid">

                <div class="col-12 col-lg-6 offset-lg-3">

                    <div class="row g-2">

                        <div class="col-12">
                            <br/>
                            <h1 class="animation text-center" style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Student Login</h1>
                            <hr class="animation"/>
                        </div>

                        <div class="row">
                            <div class="col-12 animation badge">
                                <br/><br/>
                                <img src="student.png" style="width: 25%;"/>
                            </div>
                        </div>

                        <?php
                        
                        if(isset($_COOKIE["email5"]) && isset($_COOKIE["password5"])){

                        ?>
                        
                        <div class="col-12">
                            <br/>
                            <p class="animation" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Email</p>
                            <input type="email" value="<?php echo $_COOKIE["email5"] ?>" class="form-control animation" id="email5"/>
                            &nbsp;
                        </div>

                        <div class="col-12">
                            <p class="animation" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Password</p>
                            <input type="password" value="<?php echo $_COOKIE["password5"] ?>" class="form-control animation" id="password5"/>
                        </div>
                        
                        <?php

                        }else{

                        ?>
                        
                        <div class="col-12">
                            <br/>
                            <p class="animation" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Email</p>
                            <input type="email" class="form-control animation" id="email5"/>
                            &nbsp;
                        </div>

                        <div class="col-12">
                            <p class="animation" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Password</p>
                            <input type="password" class="form-control animation" id="password5"/>
                        </div>
                        
                        <?php

                        }
                        
                        ?>

                        <div class="col-12 animation">
                            <input type="checkbox" class="form-check-input" id="rememberme2"/>&nbsp;&nbsp;
                            <span style="font-family: 'Times New Roman', Times, serif;">Remember me</span>
                            <br/><br/>
                        </div>

                        <div class="col-12 col-lg-6 d-grid">
                            <button type="button" class="btn btn-success animation" onclick="studentLogIN();">Log In</button>
                        </div>

                        <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-danger animation" onclick="home();">Back to Home</button>
                        </div>
                        
                        &nbsp;
                        <br/>
                        <hr class="animation"/>
                        <p class="animation text-center">&copy; 2023 kokawalacentralcollage.lk || All Right Reserved <br/> <span>Our Privacy Policy</span></p>

                    </div>

                </div>

            </div>

        <script src="script.js"></script>

    </body>

</html>