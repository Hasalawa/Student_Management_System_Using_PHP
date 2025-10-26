<!DOCTYPE html>

<html>

    <head>

        <title>Assignment | Kokawala Central Collage</title>
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
                    <button class="btn btn-primary animation" onclick="backtoSDashboard();">Back to Dashboard</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Exam and Assignments</h1>
                </div>
                <hr class="animation"/>
                <div class="col-12 d1 animation">
                    <div class="row">
                        <div class="col-12">
                            <br/>
                            <table class="table table-responsive table-dark text-center animation">
                                <tr>
                                    <th class="bg-secondary">#</th>
                                    <th class="bg-secondary">Assignment Id</th>
                                    <th class="bg-secondary">Topic</th>
                                    <th class="bg-secondary">Start Date</th>
                                    <th class="bg-secondary">End Date</th>
                                    <th class="bg-secondary">Subject</th>
                                    <th class="bg-secondary">Grade</th>
                                    <th class="bg-secondary">Download</th>
                                    <th class="bg-secondary">Upload</th>
                                </tr>
                                <?php
                                
                                $connection = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

                                $select = "SELECT * FROM `add_new_assignments`";

                                $rs = $connection->query($select);
                                $num = $rs->num_rows;

                                if($num > 0){

                                    while($result = mysqli_fetch_assoc($rs)){

                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $result["id"]; ?></td>
                                            <td><?php echo $result["assignment_id"]; ?></td>
                                            <td><?php echo $result["topic"]; ?></td>
                                            <td><?php echo $result["start_date"]; ?></td>
                                            <td><?php echo $result["end_date"]; ?></td>
                                            <td><?php echo $result["subject"]; ?></td>
                                            <td><?php echo $result["grade"]; ?></td>
                                            <td>
                                                
                                                <a href="download.php?path=<?php echo $result["path"]; ?>" class="btn btn-info">Download</a>
                                                
                                            </td>
                                            <td>

                                            <button class="btn btn-success col-12" data-bs-toggle="modal" data-bs-target="#myModal">Upload</button>

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

            <!--Update_File-->

            <div class="modal" id="myModal">
                
                <div class="modal-dialog">

                    <div class="modal-content">

                    <div class="modal-header">
                        <h3 class="modal-title">Upload Your Assignment</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Student ID</span>
                        <input type="text" class="form-control" id="stId1"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Name</span>
                        <input type="text" class="form-control" id="sName1"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Subject</span>
                        <input type="text" class="form-control" id="sSubject1"/>

                        <br/>

                        <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Grade</span>
                        <input type="text" class="form-control" id="sGrade1"/>

                        <br/>

                        <input type="file" class="form-control" id="asFile1"/>

                        <br/>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-success" onclick="uploadAssi();">Upload Assignment</button>
                        <button class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
                    </div>

                    </div>

                </div>

            </div>

            <!--Upload_File-->

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