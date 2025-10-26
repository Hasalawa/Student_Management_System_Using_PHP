<?php

$i = $_POST["i"];
$s = $_POST["s"];
$g = $_POST["g"];

if(empty($i)){
    echo("Enter teacher's Id.");
}else if(empty($s)){
    echo("Enter teacher's Subject.");
}else if(empty($g)){
    echo("Enter teacher's Grade.");
}else{
    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "UPDATE `teachers` SET `subject`='".$s."', `grade`='".$g."' WHERE `id`='".$i."'";

    $dbms->query($q);

    echo("Subject and Grade Updated Successfull.");
}

?>