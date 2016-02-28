
<?php
$file = fopen("users.txt","a")or die("Unable to open file!");

$mess = $_POST['field1']." ".$_POST['field2']."\n";
fwrite($file,$mess);
fclose($file);
mkdir("./fileUploaded/".$_POST['field1'], 0777);


 echo " Sign up successfully! Your folder has been created!"."<br \>";
echo "        Now back to login please!"."<br \>";
  header( "refresh:3;url= preLogin.php" );

?>

