<?php

$title = $_POST["ti"];
$grade = $_POST["gr"];
$subject = $_POST["su"];
$note = $_FILES["up"];

if(empty($title)){
    echo("Please Enter the title.");
}else if(empty($grade)){
    echo("Please enter the grade.");
}else if(empty($subject)){
    echo("Please enter the subject.");
}else if(empty($note)){
    echo("Choose pdf document.");
}else if(mime_content_type($note["tmp_name"]) != "application/pdf") {
    echo("File must be a PDF.");
} else{

    $path = "resource//".uniqid().".pdf";
    move_uploaded_file($note["tmp_name"],$path);

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "INSERT INTO `add_lesson_notes` (`title`,`grade`,`subject`,`path`) VALUES ('".$title."','".$grade."','".$subject."','".$path."')";

    $dbms->query($q);

    echo("success");
    
}

?>