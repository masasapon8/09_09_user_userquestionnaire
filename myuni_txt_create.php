<?php
var_dump($_POST);

$gender1 = $_POST['gender1'];
$gender2 = $_POST['gender2'];
$brand = $_POST['brand'];
$favorite = $_POST['favorite'];
$design = $_POST['design'];
$write_data = "{$gender1} {$gender2} {$brand} {$favorite} {$design}\n";
$file = fopen('data/myuni.csv', 'a');
flock($file, LOCK_UN);
fwrite($file, $write_data);
fclose($file);
header("Location:myuni_txt_input.php");
