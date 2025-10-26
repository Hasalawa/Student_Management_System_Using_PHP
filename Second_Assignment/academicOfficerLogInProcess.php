<?PHP

session_start();

$email = $_POST["email4"];
$password = $_POST["password4"];
$rememberMe = $_POST["rememberme1"];

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

    $q = "SELECT * FROM `acadamic_officer` WHERE `email`='".$email."' AND `password`='".$password."'";

    $result = $dbms->query($q);
    $num = $result->num_rows;

    if($num == 1){
        $d = $result->fetch_assoc();

        $_SESSION["academic"] = $d;

        echo("success");

        if($rememberMe == "true"){

            setcookie("email4",$email,time()+(60*60*24));
            setcookie("password4",$password,time()+(60*60*24));

        }

    }else{

        echo("Invalid Email Address or Password.");


    }

}

?>