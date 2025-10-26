<?php

session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Academic Officer Profile | Kokawala Central Collage</title>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="bootstrap.css"/>
        <link rel="stylesheet" href="style.css"/>
        <link rel="icon" href="title_logo.png"/>

    </head>

    <body class="list-group-item-secondary">

    <div class="container-fluid">
            <div class="row">
                <div class="offset-3 animation offset-lg-3" style="border-radius: 20px; width: 50%;">
                    <div class="row">
                        <div class="col-12 center badge">
                            <br/>
                            <img src="acadamic_officer.png" style="width: 30%; border-radius: 10px;"/>
                            <br/>
                        </div>
                        <div class="col-12 center text-center">
                            <br/>
                            <span class="text-secondary fw-bold"><?php echo $_SESSION["academic"]["email"]; ?></span>
                            <br/><br/>
                        </div>
                        <div class="col-12 border" style="border-radius: 20px;">
                            <br/>
                            <h2 class="text-center">My Details</h2>
                            <hr/>
                            <div class="row">
                                <div class="col-12">
                                    <label class="fw-bold">Name</label>
                                    <input type="text" value="<?php echo $_SESSION["academic"]["name"]; ?>" class="form-control"/>
                                </div>
                                <div class="col-12">
                                    <br/>
                                    <label class="fw-bold">Password</label>
                                    <input type="password" value="<?php echo $_SESSION["academic"]["password"]; ?>" class="form-control"/>
                                </div>
                                <div class="col-12">
                                    <br/>
                                    <label class="fw-bold">Email</label>
                                    <input type="email" value="<?php echo $_SESSION["academic"]["email"]; ?>" class="form-control"/>
                                </div>
                                <div class="col-12">
                                    <br/>
                                    <label class="fw-bold">Mobile Number</label>
                                    <input type="text" value="<?php echo $_SESSION["academic"]["mobile_number"]; ?>" class="form-control"/>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <br/>
                                    <button class="btn btn-success col-12" data-bs-toggle="modal" data-bs-target="#myModal">Update Profile</button>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <br/>
                                    <button class="col-12 btn btn-danger" onclick="c4();">Cancel</button>
                                </div>
                                <div class="col-12">
                                    <br/>
                                    <button class="btn btn-primary col-12" onclick="backtoDashboardA();">Back to Dashboard</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Update_Academic_Officer_Profile-->

            <div class="modal" id="myModal">
                
                <div class="modal-dialog">

                    <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="modal-title">Update Academic Officer Profile</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Name</span>
                        <input type="text" class="form-control" id="nameAcademic"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Email</span>
                        <input type="email" class="form-control" id="emailAcademic"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Mobile Number</span>
                        <input type="email" class="form-control" id="mobileAcademic"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Password</span>
                        <input type="password" class="form-control" id="passwordAcademic"/>

                        <br/>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" onclick="savechangeAcademic();">Save Changes</button>
                        <button class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
                    </div>

                    </div>

                </div>

            </div>

            <!--Update_Academic_Officer_Profile-->

            <hr class="animation"/>
            <p class="animation text-center">&copy; 2023 kokawalacentralcollage.lk || All Right Reserved <br/> <span>Our Privacy Policy</span></p>
        </div>

        <script src="script.js"></script>
        <script src="bootstrap.bundle.min.js"></script>

    </body>

</html>