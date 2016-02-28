

<?php
session_start();
if(empty($_SESSION['valid_name']))
{
    header('Location: preLogin.php');
}
?>
