<?php

$stu_id = $_POST["sid"];
$ass_id = $_POST["aid"];
$name = $_POST["aName"];
$grade = $_POST["sGrade"];
$mark = $_POST["sMark"];

if(empty($stu_id)){
    echo("Enter the student id.");
}else if(empty($ass_id)){
    echo("Enter the assignment id.");
}else if(empty($name)){
    echo("Enter the student name.");
}else if(empty($grade)){
    echo("Enter the grade.");
}else if(empty($mark)){
    echo("Enter the marks.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `release_assignment_marks` (`stu_id`,`ass_id`,`stu_name`,`stu_grade`,`stu_marks`) VALUES ('".$stu_id."','".$ass_id."','".$name."','".$grade."','".$mark."')";
    $dbms->query($q);

    echo("Marks Adding Successful");

}

?>