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

        <title>Check Result | Kokawala Central Collage</title>
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
                    <button class="btn btn-primary animation" onclick="backtoDashboard();">Back to Dashboard</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Check Result</h1>
                </div>
                <hr class="animation"/>
                <div class="col-12 d animation">
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
                <div class="col-12">
                    <hr class="animation"/>
                </div>
                <p class="animation text-center">&copy; 2023 kokawalacentralcollage.lk || All Right Reserved <br/> <span>Our Privacy Policy</span></p>
            </div>
        </div>

        <script src="script.js"></script>

    </body>
</html>