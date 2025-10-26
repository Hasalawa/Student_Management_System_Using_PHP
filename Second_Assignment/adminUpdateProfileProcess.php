<?php

session_start();

$n = $_POST["n"];
$e = $_POST["e"];
$p = $_POST["p"];

if(empty($n)){
    echo("Enter the your name.");
}else if(empty($e)){
    echo("Enter your email.");
}else if(!filter_var($e,FILTER_VALIDATE_EMAIL)){
    echo("Invalid email address.");
}else if(empty($p)){
    echo("Enter your new password");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "UPDATE `admin` SET `name`='".$n."', `email`='".$e."', `password`='".$p."' WHERE `id`='".$_SESSION["a"]["id"]."'";
    $dbms->query($q);

    echo("success");

}

?>