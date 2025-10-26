<?php

session_start();

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Manage Academic Officers | Kokawala Central Collage</title>
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
                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Manage Academic Officers</h1>
                </div>
                <hr class="animation"/>

                <div class="row">
                    <div class="col-12 offset-lg-4 col-lg-5 animation">
                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Name</span>
                        <input type="text" class="form-control" id="name2"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Email</span>
                        <input type="email" class="form-control" id="email2"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Mobile</span>
                        <input type="text" class="form-control" id="mobile2"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Password</span>
                        <input type="password" class="form-control" id="password2"/>

                        <br/>

                        <button class="btn btn-success" onclick="addAcademicOfficers();">Add Academic Officers</button>
                        <button class="btn btn-danger" onclick="cancle2();">Cancel</button>

                        <br/><br/>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-4 animation">
                            <input type="email" class="form-control" id="receiverA"/>
                            <br/>
                        </div>
                        <div class="col-6 animation">
                            <button class="btn btn-dark" onclick="sendAcadeEmail();">Send Email Verification Code</button>
                            <br/><br/>
                        </div>
                    </div>
                </div>

                <div class="col-12 d1 animation">

                    <br/>

                    <table class="table table-responsive table-dark text-center animation">
                        <tr>
                            <th class="bg-secondary">#</th>
                            <th class="bg-secondary">Name</th>
                            <th class="bg-secondary">Email</th>
                            <th class="bg-secondary">Mobile_number</th>
                            <th class="bg-secondary"></th>
                        </tr>
                        <?php
                        
                        $connection = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                        $select = "SELECT * FROM `acadamic_officer`";

                        if(isset($_GET["id"])){

                            $id = $_GET["id"];
                            $delete = mysqli_query($connection, "DELETE FROM `acadamic_officer` WHERE `id`='$id'");

                        }

                        $query = mysqli_query($connection,$select);
                        $num = mysqli_num_rows($query);

                        if($num > 0){

                            while($result = mysqli_fetch_assoc($query)){
                                
                                echo "
                                
                                <tr>
                                    <td>".$result["id"]."</td>
                                    <td>".$result["name"]."</td>
                                    <td>".$result["email"]."</td>
                                    <td>".$result["mobile_number"]."</td>
                                    <td>

                                        <a href='academicOfficers.php?id=".$result["id"]."' class='btn btn-danger'>Remove</a>
                                        
                                    </td>
                                </tr>
                                
                                ";
                            
                            }

                        }
                        ?>
                        
                    </table>

                </div>
                <div class="col-12">
                    <br/>
                    <button class="btn btn-primary animation" onclick="backtoDashboard();">Back to Dashboard</button>
                </div>
            </div>
            <br/>
            <hr class="animation"/>
            <p class="animation text-center">&copy; 2023 kokawalacentralcollage.lk || All Right Reserved <br/> <span>Our Privacy Policy</span></p>
        </div>

        <script src="script.js"></script>
        <script src="bootstrap.bundle.min.js"></script>

    </body>

</html>