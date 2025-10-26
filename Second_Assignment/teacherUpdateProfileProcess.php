<?php

session_start();

$tName = $_POST["tName"];
$tEmail = $_POST["tEmail"];
$tMobile = $_POST["tMobile"];
$tPassword = $_POST["tPassword"];

if(empty($tName)){
    echo("Enter the your name.");
}else if(empty($tEmail)){
    echo("Enter your email.");
}else if(!filter_var($tEmail,FILTER_VALIDATE_EMAIL)){
    echo("Invalid email address.");
}else if(empty($tMobile)){
    echo("Please enter your mobile number.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/",$tMobile) | strlen($tMobile) != 10){
    echo("Invalid Mobile Number.");
}else if(empty($tPassword)){
    echo("Enter your new password");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "UPDATE `teachers` SET `name`='".$tName."', `email`='".$tEmail."', `mobile_number`='".$tMobile."', `password`='".$tPassword."' WHERE `id`='".$_SESSION["teacher"]["id"]."'";
    $dbms->query($q);

    echo("success");

}

?>