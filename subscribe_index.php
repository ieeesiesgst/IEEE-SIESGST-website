<?php


$data=$_POST['email'];
$fp=fopen('subscribe.txt', 'a');
fwrite($fp, $data."\n");
fclose($fp);
header('Location: index.html');


?>