<?Php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$mobile = $_POST["mobile"];

if(empty($name)){
    echo("Enter the your name.");
}else if(empty($email)){
    echo("Enter your email.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid email address.");
}else if(empty($pwd)){
    echo("Enter your new password");
}elseif(empty($mobile)){
    echo("Please enter your mobile number.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/",$mobile) | strlen($mobile) != 10){
    echo("Invalid Mobile Number.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "UPDATE `students` SET `name`='".$name."', `email`='".$email."', `mobile_number`='".$mobile."', `password`='".$pwd."' WHERE `id`='".$_SESSION["student"]["id"]."'";
    $dbms->query($q);

    echo("Detailes Updated Successful.");

}

?>