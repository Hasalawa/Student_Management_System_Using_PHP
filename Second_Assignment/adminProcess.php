<?php

session_start();

$email = $_POST["email"];
$password = $_POST["password"];

if(empty($email)){
    echo("Please enter your Email.");
}else if(strlen($email) > 100){
    echo("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email address");
}else if(empty($password)){
    echo("Please enter your Password.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "SELECT * FROM `admin` WHERE `email`='".$email."' AND `password`='".$password."'";

    $rs = $dbms->query($q);
    $num = $rs->num_rows;

    if($num == 1){

        $d = $rs->fetch_assoc();
                         
        $_SESSION["a"] = $d;

        echo ("success");

    }else{

        echo ("Invalid Email or Password");

    }

}

?>