<?php

$name = $_POST["name2"];
$email = $_POST["email2"];
$mobile = $_POST["mobile2"];
$password = $_POST["password2"];

if(empty($name)){
    echo("Please enter the Acadamic Officer's name.");
}else if(empty($email)){
    echo("Please enter the Acadamic Officer's email.");
}else if(strlen($email) > 100){
    echo("Email must have less than 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email address.");
}else if(empty($mobile)){
    echo("Please enter the Acadamic Officer's mobile number.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/",$mobile) | strlen($mobile) != 10){
    echo("Invalid Mobile Number.");
}else if(empty($password)){
    echo("Please enter the Acadamic Officer's Password.");
}else{
    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `acadamic_officer` (`name`,`email`,`mobile_number`,`password`) VALUES ('".$name."','".$email."','".$mobile."','".$password."')";

    $dbms->query($q);

    echo("Acadamic Officer Adding Successfull.");
}

?>