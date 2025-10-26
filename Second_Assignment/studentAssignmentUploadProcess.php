<?php

$i = $_POST["id"];
$n = $_POST["name"];
$s = $_POST["subject"];
$g = $_POST["grade"];
$f = $_FILES["file"];

if(empty($i)){
    echo("Please enter your id.");
}else if(empty($n)){
    echo("Please enter your name.");
}else if(empty($s)){
    echo("Please enter the subject.");
}else if(empty($g)){
    echo("Please enter the grade.");
}else if(mime_content_type($f["tmp_name"]) != "application/zip") {
    echo("File must be a Zip.");
}else{

    $path = "resource//".uniqid().".zip";
    move_uploaded_file($f["tmp_name"],$path);

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `stu_upload_assignment` (`stu_id`,`name`,`subject`,`grade`,`upl_path`) VALUES ('".$i."','".$n."','".$s."','".$g."','".$path."')";
    $dbms->query($q);

    echo("Your assigment uploaded successfully");

}

?>