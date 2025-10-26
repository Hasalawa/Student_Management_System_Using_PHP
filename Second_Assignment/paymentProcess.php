<?php

$merchant_id = "1222356";
$order_id = "";
$amount = "1000";
$currency = "LKR";
$merchant_secret = "MjI3MzY4NDQ0NzMzMjY5NzEzNzMzOTM3MzQwNzM3Mjk0MTg3ODU=";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

echo($hash);

?>