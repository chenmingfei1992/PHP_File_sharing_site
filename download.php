

<?php

session_start();
$filename = isset($_GET['filename'])?$_GET['filename']:NULL;
$file = "/home/chenmingfei/web/html/fileUploaded/".$_SESSION['valid_name']."/".$filename;

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    ob_clean();
    flush();
    readfile($file);


?>


