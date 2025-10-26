<?Php

session_start();

$email = $_POST["email5"];
$password = $_POST["password5"];
$rememberMe = $_POST["rememberme2"];

if(empty($email)){
    echo("Please Enter Your Email.");
}else if(strlen($email) > 100){
    echo("Email must have less than 100 characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email Address.");
}else if(empty($password)){
    echo("Enter your password");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "SELECT * FROM `students` WHERE `email`='".$email."' AND `password`='".$password."'";

    $rs = $dbms->query($q);
    $num = $rs->num_rows;

    if($num == 1){
        $d = $rs->fetch_assoc();

        $_SESSION["student"] = $d;

        echo("success");

        if($rememberMe = "true"){
            setcookie("email5",$email,time()+(60*60*24*365));
            setcookie("password5",$password,time()+(60*60*24*365));
        }

    }else{
        echo("Invalid Email Address or Password.");
    }

}

?>