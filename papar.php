<?php
$name=$_POST['name'];
$email=$_POST['email'];
$age=$_POST['age'];

$datastudent= "\r\n $name, $email, $age\r\n";

$myfile = fopen("webdictionary.txt", "a") or die("Unable to open file!");
echo fwrite($myfile, $datastudent);
fclose($myfile);
header ('location:index.php');
?>

