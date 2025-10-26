<!DOCTYPE html>

<html>

    <head>

        <title>Timeline | Kokawala Central Collage</title>
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

                <!--Add_Lesson_Notes-->

                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Add Lesson Notes</h1>
                </div>
                <hr class="animation"/>
                <div class="col-12 d1 animation">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Topic</span>
                            <input type="text" class="form-control" id="ti"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Grade</span>
                            <input type="text" class="form-control" id="gr"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Subject</span>
                            <input type="text" class="form-control" id="su"/>
                            <br/>
                            <div class="row">
                                <div class="col-8">
                                    <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Upload Note</span>
                                    <input type="file" class="form-control" id="up"/>
                                    <br/>
                                </div>
                                <div class="col-4 text-center mt-2">
                                    <img src="upload.svg" style="width: 60%;"/>
                                    <br/>
                                </div>
                            </div>
                            <button class="btn btn-success col-3" onclick="uploadNote();">Save</button>
                            <button class="btn btn-danger col-3" onclick="c4();">Cancel</button>
                            <br/><br/>
                        </div>
                        <div class="col-12 col-lg-8">
                            <br/>
                            <table class="table table-responsive table-dark text-center animation">
                                <tr>
                                    <th class="bg-secondary">#</th>
                                    <th class="bg-secondary">Topic</th>
                                    <th class="bg-secondary">Grade</th>
                                    <th class="bg-secondary">Subject</th>
                                    <th class="bg-secondary"></th>
                                </tr>
                                <?php
                                
                                $connection = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                                $select = "SELECT * FROM `add_lesson_notes`";

                                if(isset($_GET["id"])){

                                    $id = $_GET["id"];
                                    $delete = mysqli_query($connection, "DELETE FROM `add_lesson_notes` WHERE `id`='$id'");

                                }

                                $query = mysqli_query($connection,$select);
                                $num = mysqli_num_rows($query);

                                if($num > 0){

                                    while($result = mysqli_fetch_assoc($query)){

                                        echo "
                                        
                                        <tr>
                                            <td>".$result["id"]."</td>
                                            <td>".$result["title"]."</td>
                                            <td>".$result["grade"]."</td>
                                            <td>".$result["subject"]."</td>
                                            <td>
                                            
                                                <a href='addLessonNotes.php?id=".$result["id"]."' class='btn btn-danger'>Remove</a>
                                                
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
            </div>

            <!--Add_New_Assignment-->

            <div class="row">
                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Add New Assignments</h1>
                </div>
                <hr class="animation"/>
                <div class="col-12 d1 animation">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Assignment Id</span>
                            <input type="text" class="form-control" id="ai"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Topic</span>
                            <input type="text" class="form-control" id="to"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Start Date</span>
                            <input type="date" class="form-control" id="sd"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">End Date</span>
                            <input type="date" class="form-control" id="ed"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Subject</span>
                            <input type="text" class="form-control" id="sub"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Grade</span>
                            <input type="text" class="form-control" id="gra"/>
                            <br/>
                            <div class="row">
                                <div class="col-8">
                                    <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Upload Assignment</span>
                                    <input type="file" class="form-control" id="upA"/>
                                    <br/>
                                </div>
                                <div class="col-4 text-center mt-2">
                                    <img src="upload.svg" style="width: 60%;"/>
                                    <br/>
                                </div>
                            </div>
                            <button class="btn btn-success col-3" onclick="uploadAssignment();">Save</button>
                            <button class="btn btn-danger col-3" onclick="c4()">Cancel</button>
                            <br/><br/>
                        </div>
                        <div class="col-12 col-lg-8">
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
                                    <th class="bg-secondary"></th>
                                </tr>
                                <?php
                                
                                $connection = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                                $select = "SELECT * FROM `add_new_assignments`";

                                if(isset($_GET["id"])){

                                    $id = $_GET["id"];
                                    $delete = mysqli_query($connection, "DELETE FROM `add_new_assignments` WHERE `id`='$id'");

                                }

                                $query = mysqli_query($connection,$select);
                                $num = mysqli_num_rows($query);

                                if($num > 0){

                                    while($result = mysqli_fetch_assoc($query)){

                                        echo "
                                        
                                        <tr>
                                            <td>".$result["id"]."</td>
                                            <td>".$result["assignment_id"]."</td>
                                            <td>".$result["topic"]."</td>
                                            <td>".$result["start_date"]."</td>
                                            <td>".$result["end_date"]."</td>
                                            <td>".$result["subject"]."</td>
                                            <td>".$result["grade"]."</td>
                                            <td>
                                            
                                                <a href='addLessonNotes.php?id=".$result["id"]."' class='btn btn-danger'>Remove</a>
                                                
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
            </div>

            <!--Add_Assignment_Marks-->

            <div class="row">
                <div class="col-12 mt-4 text-center animation">
                    <h1 style="text-shadow: -1px 0 black, 2px 0 black, 0 -1px black;">Add Assignments Marks</h1>
                </div>
                <hr class="animation"/>
                <div class="col-12 d1 animation">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Student Id</span>
                            <input type="text" class="form-control" id="stId"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Assignment Id</span>
                            <input type="text" class="form-control" id="asiId"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Student Name</span>
                            <input type="text" class="form-control" id="sN"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Grade</span>
                            <input type="text" class="form-control" id="grad"/>
                            <br/>
                            <span style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">Marks</span>
                            <input type="text" class="form-control" id="mar"/>
                            <br/>
                            <button class="btn btn-success col-3" onclick="addMarks();">Save</button>
                            <button class="btn btn-danger col-3" onclick="c4()">Cancel</button>
                            <br/><br/>
                        </div>
                        <div class="col-12 col-lg-8">
                            <br/>
                            <table class="table table-responsive table-dark text-center animation">
                                <tr>
                                    <th class="bg-secondary">Marks Id</th>
                                    <th class="bg-secondary">Student Id</th>
                                    <th class="bg-secondary">Assignment Id</th>
                                    <th class="bg-secondary">Student Name</th>
                                    <th class="bg-secondary">Grade</th>
                                    <th class="bg-secondary">Marks</th>
                                    <th class="bg-secondary"></th>
                                </tr>
                                <?php
                                
                                $connection = mysqli_connect("localhost","root","Kh@17052002","student_management_system","3306");

                                $select = "SELECT * FROM `student_marks`";

                                if(isset($_GET["id"])){

                                    $id = $_GET["id"];
                                    $delete = mysqli_query($connection, "DELETE FROM `student_marks` WHERE `id`='$id'");

                                }

                                $query = mysqli_query($connection,$select);
                                $num = mysqli_num_rows($query);

                                if($num > 0){

                                    while($result = mysqli_fetch_assoc($query)){

                                        echo "
                                        
                                        <tr>
                                            <td>".$result["m_id"]."</td>
                                            <td>".$result["id"]."</td>
                                            <td>".$result["ass_id"]."</td>
                                            <td>".$result["name"]."</td>
                                            <td>".$result["grade"]."</td>
                                            <td>".$result["marks"]."</td>
                                            <td>
                                            
                                                <a href='addLessonNotes.php?id=".$result["id"]."' class='btn btn-danger'>Remove</a>
                                                
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