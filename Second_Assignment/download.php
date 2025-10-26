<?php

$fName  = basename($_GET['path']);
$filePath  = "resource/".$fName;

header("Content-Disposition: attachment; filename=$fName");

readfile($filePath);

?>