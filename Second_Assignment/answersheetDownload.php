<?php

$fName  = basename($_GET['upl_path']);
$filePath  = "resource/".$fName;

header("Content-Disposition: attachment; filename=$fName");

readfile($filePath);

?>