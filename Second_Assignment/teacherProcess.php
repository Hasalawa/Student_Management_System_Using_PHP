<?php

$name = $_POST["name1"];
$email = $_POST["email1"];
$mobile = $_POST["mobile1"];
$subject = $_POST["subject1"];
$grade = $_POST["grade1"];
$password = $_POST["password1"];

if(empty($name)){
    echo("Please enter Teacher's Name.");
}else if(empty($email)){
    echo("Please enter your Email.");
}else if(strlen($email) > 100){
    echo("Email must have less than 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email address.");
}else if(empty($mobile)){
    echo("Please enter your Mobile Number.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/",$mobile) | strlen($mobile) != 10){
    echo("Invalid Mobile Number.");
}else if(empty($subject)){
    echo("Please enter subject");
}else if(empty($grade)){
    echo("Please Enter Grade.");
}else if(empty($password)){
    echo("Please enter your Password.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `teachers` (`name`,`email`,`mobile_number`,`subject`,`grade`,`password`) VALUES ('".$name."','".$email."','".$mobile."','".$subject."','".$grade."','".$password."')";

    $dbms->query($q);

    echo("Teachers Adding Successfull.");
    
}

?>