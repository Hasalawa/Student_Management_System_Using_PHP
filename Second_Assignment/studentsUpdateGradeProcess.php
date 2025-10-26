<?Php

$id1 = $_POST["id1"];
$grad1 = $_POST["grad1"];

if(empty($id1)){
    echo("Please enter the students id.");
}else if(empty($grad1)){
    echo("Please enter the student's grade.");
}else{

    $dbms = new mysqli("localhost","root","Kh@17052002","student_management_system","3306");

    $q = "UPDATE `students` SET `grade`='".$grad1."' WHERE `id`='".$id1."'";

    $dbms->query($q);

    echo("Grade Updated Successfull.");

}

?>