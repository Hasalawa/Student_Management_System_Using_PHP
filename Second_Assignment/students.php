<!DOCTYPE html>

<html>

    <head>

        <title>Manage Students | Kokawala Central Collage</title>
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
                        <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Manage Students</h1>
                    </div>

                    <hr class="animation"/>

                    <div class="row">
                        <div class="col-12 d1 animation">

                            <br/>

                            <div class="col-12 animation">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Update Grade</button>
                                <br/><br/>
                            </div>

                            <table class="table table-responsive table-dark text-center animation">
                                <tr>
                                    <th class="bg-secondary">#</th>
                                    <th class="bg-secondary">Name</th>
                                    <th class="bg-secondary">Email</th>
                                    <th class="bg-secondary">Mobile_number</th>
                                    <th class="bg-secondary">Grade</th>
                                    <th class="bg-secondary"></th>
                                </tr>
                                <?php
                                
                                $connection = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                                $select = "SELECT * FROM `students`";

                                if(isset($_GET["id"])){

                                    $id = $_GET["id"];
                                    $delete = mysqli_query($connection, "DELETE FROM `students` WHERE `id`='$id'");

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
                                            <td>".$result["grade"]."</td>
                                            <td>

                                                <a href='students.php?id=".$result["id"]."' class='btn btn-danger'>Remove</button>
                                                
                                            </td>
                                        </tr>
                                        
                                        ";

                                    }

                                }

                                ?>
                                
                            </table>

                        </div>

                        <!--Update_Student_Grade-->

                        <div class="modal" id="myModal">
                            
                            <div class="modal-dialog">

                                <div class="modal-content">

                                <div class="modal-header">
                                    <h3 class="modal-title">Update Grade</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>

                                <div class="modal-body">

                                    <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Id</span>
                                    <input type="text" class="form-control" id="id1"/>

                                    <br/>

                                    <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Grade</span>
                                    <input type="text" class="form-control" id="grad1"/>

                                    <br/>

                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-success" onclick="updateStudentGrade();">Save Changes</button>
                                    <button class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                </div>

                                </div>

                            </div>

                        </div>

                         <!--Update_Student_Grade-->

                    </div>

                    <div class="col-12 animation">
                        <br/>
                        <button class="btn btn-primary animation" onclick="backtoDashboard();">Back to Dashboard</button>
                    </div>
                    
                </div>

                <br/>
                <hr class="animation"/>
                <p class="animation text-center">&copy; 2023 kokawalacentralcollage.lk || All Right Reserved <br/> <span>Our Privacy Policy</span></p>

            </div>

            <script src="script.js"></script>
            <script src="bootstrap.bundle.min.js."></script>

        </body>

</html>