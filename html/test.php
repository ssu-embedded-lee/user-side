<?php
ob_start();
$data = file_get_contents("http://192.168.0.25/lightoff.php");
echo $data;
?>
