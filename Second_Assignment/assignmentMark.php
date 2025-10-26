<?php

include 'markSheetProcess.php';

$db_handle = new dbms();
$marks = $db_handle->runQuery("select * from student_marks");

if (isset($_POST["export"])) {

    $fName = "Result_Sheet.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$fName\"");
    $isPrintHeader = false;

    if (! empty($marks)) {

        foreach ($marks as $r) {

            if (! $isPrintHeader) {

                echo implode("\t", array_keys($r)) . "\n";
                $isPrintHeader = true;

            }

            echo implode("\t", array_values($r)) . "\n";
        }
    }

    exit();
}

?>

<!DOCTYPE html>

<html>

    <head>

        <title>Assignment Marks | Kokawala Central Collage</title>
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
                    <button class="btn btn-primary animation" onclick="backtoDashboardA();">Back to Dashboard</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">View Assignments Marks</h1>
                </div>
                <hr class="animation"/>
                <div class="col-12 d1 animation">
                    <div class="row">
                        <div class="col-12" id="table-container">
                            <br/>

                                <form action="assignmentMark.php" method="post">

                                    <button type="submit" id="btnExport" name='export' class="btn btn-info">Download Marks Sheet</button>

                                </form>

                            <br/>

                            <table class="table table-responsive table-dark text-center animation" id="tab">
                                <tr>
                                    <th class="bg-secondary">Marks Id</th>
                                    <th class="bg-secondary">Student Id</th>
                                    <th class="bg-secondary">Assignment Id</th>
                                    <th class="bg-secondary">Student Name</th>
                                    <th class="bg-secondary">Grade</th>
                                    <th class="bg-secondary">Marks</th>
                                </tr>
                                
                                <?php

                                    $query = $db_handle->runQuery("select * from student_marks");
                                    if (! empty($marks)) {
                                    foreach ($marks as $mId => $value) {

                                ?>

                                    <tr>
                                        
                                        <td><?php echo $marks[$mId]["m_id"]; ?></td>
                                        <td><?php echo $marks[$mId]["id"]; ?></td>
                                        <td><?php echo $marks[$mId]["ass_id"]; ?></td>
                                        <td><?php echo $marks[$mId]["name"]; ?></td>
                                        <td><?php echo $marks[$mId]["grade"]; ?></td>
                                        <td><?php echo $marks[$mId]["marks"]; ?></td>
                                    
                                    </tr>

                                <?php

                                    }
                                }

                                ?>
                                
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Release Assignments Marks</h1>
                </div>
                <hr class="animation"/>
                    <div class="col-12 d1 animation">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Student Id</span>
                                <input type="text" class="form-control" id="stu_Id"/>
                                <br/>
                                <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Assignment Id</span>
                                <input type="text" class="form-control" id="assin_Id"/>
                                <br/>
                                <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Student Name</span>
                                <input type="text" class="form-control" id="stu_Name"/>
                                <br/>
                                <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Grade</span>
                                <input type="text" class="form-control" id="stu_Grad"/>
                                <br/>
                                <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Marks</span>
                                <input type="text" class="form-control" id="stu_Mar"/>
                                <br/>
                                <button class="btn btn-success col-3" onclick="releaseMarks();">Save</button>
                                <button class="btn btn-danger col-3" onclick="c4()">Cancel</button>
                                <br/><br/>
                            </div>
                            <div class="col-12 col-lg-8">
                                <br/>
                                <table class="table table-responsive table-dark text-center animation">
                                    <tr>
                                        <th class="bg-secondary">Relese Marks Id</th>
                                        <th class="bg-secondary">Student Id</th>
                                        <th class="bg-secondary">Assignment Id</th>
                                        <th class="bg-secondary">Student Name</th>
                                        <th class="bg-secondary">Grade</th>
                                        <th class="bg-secondary">Marks</th>
                                        <th class="bg-secondary"></th>
                                    </tr>
                                    <?php
                                    
                                    $connection = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                                    $select = "SELECT * FROM `release_assignment_marks`";

                                    if(isset($_GET["id"])){

                                        $id = $_GET["id"];
                                        $delete = mysqli_query($connection, "DELETE FROM `release_assignment_marks` WHERE `rm_id`='$id'");

                                    }

                                    $query = mysqli_query($connection,$select);
                                    $num = mysqli_num_rows($query);

                                    if($num > 0){

                                        while($result = mysqli_fetch_assoc($query)){

                                            echo "
                                            
                                            <tr>
                                                <td>".$result["rm_id"]."</td>
                                                <td>".$result["stu_id"]."</td>
                                                <td>".$result["ass_id"]."</td>
                                                <td>".$result["stu_name"]."</td>
                                                <td>".$result["stu_grade"]."</td>
                                                <td>".$result["stu_marks"]."</td>
                                                <td>
                                                
                                                    <a href='assignmentMark.php?id=".$result["rm_id"]."' class='btn btn-danger'>Remove</a>
                                                    
                                                </td>
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