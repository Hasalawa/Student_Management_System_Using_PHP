<?php

$stId = $_POST["stId"];
$asiId = $_POST["asiId"];
$sName = $_POST["sN"];
$grade = $_POST["grad"];
$mar = $_POST["mar"];

if(empty($stId)){
    echo("Enter the student id.");
}else if(empty($asiId)){
    echo("Enter the assignment id.");
}else if(empty($sName)){
    echo("Enter the student name.");
}else if(empty($grade)){
    echo("Enter the grade.");
}else if(empty($mar)){
    echo("Enter the marks.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `student_marks` (`id`,`ass_id`,`name`,`grade`,`marks`) VALUES ('".$stId."','".$asiId."','".$sName."','".$grade."','".$mar."')";
    $dbms->query($q);

    echo("success");

}

?>