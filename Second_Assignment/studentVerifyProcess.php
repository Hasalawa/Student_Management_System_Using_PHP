<?php

$verify = $_POST["verification2"];

if(empty($verify)){
    echo("Please enter the verification code.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "SELECT * FROM `verification_codes_students` WHERE `code`='".$verify."'";

    $rs = $dbms->query($q);
    $num = $rs->num_rows;

    if($num == 1){
        $d = $rs->fetch_assoc();

        echo("success");
    }else{
        echo("Invalid OTP");
    }

}

?>