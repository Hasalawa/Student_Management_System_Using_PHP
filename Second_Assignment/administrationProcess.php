<?php

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];

if(empty($name)){
    echo("Please enter your Name.");
}else if(empty($email)){
    echo("Please enter your Email");
}else if(strlen($email) > 100){
    echo("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email address");
}else if(empty($password)){
    echo("Please enter your Password.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `admin` (`name`,`email`,`password`) VALUES ('".$name."','".$email."','".$password."')";

    $dbms->query($q);

    echo("Admin Adding Successfull");
}

?>