<?Php

$stu_name = $_POST["sN"];
$stu_email = $_POST["sE"];
$stu_mobile = $_POST["sM"];
$stu_grade = $_POST["sG"];
$stu_pwd = $_POST["sP"];

if(empty($stu_name)){
    echo("Please enter Student's Name.");
}else if(empty($stu_email)){
    echo("Please enter Student's Email.");
}else if(strlen($stu_email) > 100){
    echo("Email must have less than 100 characters.");
}else if(!filter_var($stu_email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email address.");
}else if(empty($stu_mobile)){
    echo("Please enter Student's Mobile Number.");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]{7}/",$stu_mobile) | strlen($stu_mobile) != 10){
    echo("Invalid Mobile Number.");
}else if(empty($stu_grade)){
    echo("Please enter Student's Grade.");
}else if(empty($stu_pwd)){
    echo("Please enter Student's Password.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `students` (`name`,`email`,`mobile_number`,`grade`,`password`) VALUES ('".$stu_name."','".$stu_email."','".$stu_mobile."','".$stu_grade."','".$stu_pwd."')";
    $dbms->query($q);

    echo("Student Adding Successful.");

}

?>