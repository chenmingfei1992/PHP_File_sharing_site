
<?php
$file = fopen("users.txt","a")or die("Unable to open file!");

$mess = $_POST['field1']." ".$_POST['field2'];
fwrite($file,$mess);
fclose($file);
mkdir("./fileUploaded/".$_POST['field1'], 0777);
header('Location: preLogin.php');
?>
