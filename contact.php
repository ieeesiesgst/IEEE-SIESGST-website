<?php


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$fp=fopen('contact.txt', 'a');
fwrite($fp, $name."\n".$email."\n".$phone."\n".$message."\n\n\n");
fclose($fp);
header('Location: contact.html');


?>