<?php

$ai = $_POST["ai"];
$to = $_POST["to"];
$sd = $_POST["sd"];
$ed = $_POST["ed"];
$sub = $_POST["sub"];
$gra = $_POST["gra"];
$upA = $_FILES["upA"];

if(empty($ai)){
    echo("Please enter the assignment id.");
}else if(empty($to)){
    echo("Please enter the topic.");
}else if(empty($sd)){
    echo("Please enter the start date.");
}else if(empty($ed)){
    echo("Please enter the end date.");
}else if(empty($sub)){
    echo("Please enter the subject.");
}else if(empty($gra)){
    echo("Please enter the grade.");
}else if(mime_content_type($upA["tmp_name"]) != "application/pdf") {
    echo("File must be a PDF.");
}else{

    $path = "resource//".uniqid().".pdf";
    move_uploaded_file($upA["tmp_name"],$path);

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `add_new_assignments` (`assignment_id`,`topic`,`start_date`,`end_date`,`subject`,`grade`,`path`) VALUES ('".$ai."','".$to."','".$sd."','".$ed."','".$sub."','".$gra."','".$path."')";

    $dbms->query($q);

    echo("success");

}

?>