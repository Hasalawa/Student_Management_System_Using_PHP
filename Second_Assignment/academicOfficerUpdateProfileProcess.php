<?php

session_start();

$nameA = $_POST["nameA"];
$emailA = $_POST["emailA"];
$mobileA = $_POST["mobileA"];
$passwordA = $_POST["passwordA"];

if(empty($nameA)){
    echo("Enter the your name.");
}else if(empty($emailA)){
    echo("Enter your email.");
}else if(!filter_var($emailA,FILTER_VALIDATE_EMAIL)){
    echo("Invalid email address.");
}else if(empty($mobileA)){
    echo("Please enter your mobile number.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/",$mobileA) | strlen($mobileA) != 10){
    echo("Invalid Mobile Number.");
}else if(empty($passwordA)){
    echo("Enter your new password");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "UPDATE `acadamic_officer` SET `name`='".$nameA."', `email`='".$emailA."', `mobile_number`='".$mobileA."', `password`='".$passwordA."' WHERE `id`='".$_SESSION["academic"]["id"]."'";
    $dbms->query($q);

    echo("success");

}

?>