<!DOCTYPE html>

<html>

    <head>

        <title>View Submited Answer | Kokawala Central Collage</title>
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
            <div class="col-12">
                    <br/>
                    <button class="btn btn-primary animation" onclick="backtoTDashboard();">Back to Dashboard</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">View Submited Answer</h1>
                </div>
                <hr class="animation"/>
                <div class="col-12 d1 animation">
                    <div class="row">
                        <div class="col-12">
                            <br/>
                            <table class="table table-responsive table-dark text-center animation">
                                <tr>
                                    <th class="bg-secondary">#</th>
                                    <th class="bg-secondary">Student Id</th>
                                    <th class="bg-secondary">Student Name</th>
                                    <th class="bg-secondary">Subject</th>
                                    <th class="bg-secondary">Grade</th>
                                    <th class="bg-secondary">Assignment</th>
                                </tr>
                                <?php
                                
                                $connection = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                                $select = "SELECT * FROM `stu_upload_assignment`";

                                $query = mysqli_query($connection,$select);
                                $num = mysqli_num_rows($query);

                                if($num > 0){

                                    while($result = mysqli_fetch_assoc($query)){

                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $result["up_id"]; ?></td>
                                            <td><?php echo $result["stu_id"]; ?></td>
                                            <td><?php echo $result["name"]; ?></td>
                                            <td><?php echo $result["subject"]; ?></td>
                                            <td><?php echo $result["grade"]; ?></td>
                                            <td>
                                                
                                                <a href="answersheetDownload.php?upl_path=<?php echo $result["upl_path"]; ?>" class="btn btn-info">Download</a>
                                                
                                            </td>
                                        </tr>
                                        <?php
                                    

                                    }

                                }
                                
                                ?>
                                
                            </table>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
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