<!DOCTYPE html>

<html>

    <head>

        <title>Exam Marks | Kokawala Central Collage</title>
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
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Marks</h1>
                </div>
                <hr class="animation"/>
                    <div class="col-12 d1 animation">
                        <div class="row">
                            
                            <div class="col-12">
                                <br/>
                                <table class="table table-responsive table-dark text-center animation">
                                    <tr>
                                        <th class="bg-secondary">Student Id</th>
                                        <th class="bg-secondary">Assignment Id</th>
                                        <th class="bg-secondary">Student Name</th>
                                        <th class="bg-secondary">Grade</th>
                                        <th class="bg-secondary">Marks</th>
                                    </tr>
                                    <?php
                                    
                                    $dbms = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                                    $select = "SELECT * FROM `release_assignment_marks`";

                                    $rs = $dbms->query($select);
                                    $num = $rs->num_rows;

                                    if($num > 0){

                                        while($result = $rs->fetch_assoc()){

                                            echo "
                                            
                                            <tr>
                                                <td>".$result["stu_id"]."</td>
                                                <td>".$result["ass_id"]."</td>
                                                <td>".$result["stu_name"]."</td>
                                                <td>".$result["stu_grade"]."</td>
                                                <td>".$result["stu_marks"]."</td>
                                            </tr>
                                            
                                            ";

                                        }

                                    }
                                    
                                    ?>
                                    
                                </table>
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

    </body>
</html>