

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>Welcome to your homepage.</title>
</head>
<body>
<?php
require_once('authenticate.php');
?>

    <div>
       <?php  echo "Hello  ".$_SESSION['valid_name']; ?> 
	<h1>Want to upload files?</h1>
	<form action="./upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" id="file" /> 
	<input type="submit" name="submit" value="Upload file" />
	</form>

    </div>
    
   
    <div>
        <h2>Want to log off?</h2>
        <form action="./logout.php" method="post" enctype="multipart/form-data">
        <input type="submit" name="submit" value="Logout" />
        </form>

    </div>


 
<?php

  $dir  = "./fileUploaded/".$_SESSION['valid_name']."/";
 if ($handle = opendir($dir)) {
   while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != "..") {
           $thelist .= "<li>$file (<a href='./download.php?filename=$file'>view</a>) (<a href='./delete.php?filename=$file'>Delete</a>)</li>";      
             }
       }
  closedir($handle);
  }
?>
<h3>List of files:</h3>
<ul><?php echo $thelist; ?></ul>


<h4>Adding a text block to a text file:</h4>
	<form action="typeTxt.php" method='post'>
        <label for="saveUs">type words here:</label>
	<textarea name='textblock'></textarea>  <br \>
        <label for="saveUs">save file name:</label>
        <input type="text" name="saveName" id="saveUs" />        
	<input type='submit' value='Add text'>
	</form>


</body>

</html>
