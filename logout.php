

<!DOCTYPE html>
<?php

session_start();
unset($_SESSION['valid_name']);
header("Location: ./preLogin.php");

?>

