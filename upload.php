
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <title>uploading result page</title>
</head>
<body>
<?php
require_once('authenticate.php');
?>

<?php

echo "<br>";
echo "<br>";
$target_dir  = "./fileUploaded/".$_SESSION['valid_name']."/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);


if(file_exists($target_dir.$target_file))
      { 
        echo $_FILES["file"]["name"]. "is already existing.";
    }

else
    {  
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
            {
            
           echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded."."<br />";
           }
        else
            {
            echo "Sorry, there was an error uploading your file.";
              }
          
        
    }
  


?>

<script type="text/javascript">
var t= 5;
setInterval("refer()",1000); 
function refer(){
    if(t==0){
     location= "homePage.php";
    }
    document.getElementById('show').innerHTML=""+t+"seconds back to home page";
    t--; 
}
</script>
<span id="show"></span>

 </body>
</html>
