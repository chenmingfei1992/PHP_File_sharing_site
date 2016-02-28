

<!DOCTYPE html>

<?php
require_once('authenticate.php');
?>


<?php

$filename = isset($_REQUEST['filename'])?$_REQUEST['filename']:NULL;

$file_delete = "./fileUploaded/".$_SESSION['valid_name']."/".$filename;


if(file_exists($file_delete))
{
    if(unlink($file_delete))
    {
	echo $filename." has been deleted successfully";
    }
    else
    {
	echo "can not delete ".$filename;
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

</html>
