

<!DOCTYPE html>
<html>
<head>
    <title>User log in check</title>
</head>
<body>

<?php

$username = isset($_POST['username'])?$_POST['username']:NULL;
$password = isset($_POST['password'])?$_POST['password']:NULL;

$nameList  =array();

$nameCheck = False;
$user_info  =  file('users.txt');
foreach($user_info as $line=>$content)
{
$pieces = explode(" ",$content);
$nameCheck = $nameCheck||($username==$pieces[0]);
$nameList[$pieces[0]] = $pieces[1];
}
$length = strlen($nameList[$username]);
$length = $length-1;
$correctPass = substr($nameList[$username],0,$length);

     if(!$nameCheck)
       { 
          echo " invalid username!! Please input again";
           header( "refresh:3;url= preLogin.php" );
       }
     elseif($correctPass!=$password)
{
 echo " invalid password!! Please input again";
  header( "refresh:3;url= preLogin.php" );
         }
    else
      {
        session_start();
       
         $_SESSION['valid_name'] = $username;
        echo " Login in successfully! now go to your home page!";
header( "refresh:3;url= homePage.php" );
      }

?>
</body>
</html>
