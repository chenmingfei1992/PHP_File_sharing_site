

<?php

session_start();

$dir = "/home/chenmingfei/web/html/fileUploaded/".$_SESSION['valid_name'];

      
	$f = fopen($dir."/".$_POST['saveName'].".txt", "w") or die("Unable to open file!");

	fwrite($f, $_POST["textblock"]); 

	fclose($f);
       header("Location: homePage.php");


	?>
