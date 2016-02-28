

<!DOCTYPE html>
<head><title>Calculation results</title></head>
<body>
<?php

$first = (float)$_GET['firstNum'];
$second =(float) $_GET['secondNum'];
$op = $_GET['operation'];
switch($op)
{
case "add": $result = $first + $second;
            echo $first." +  ".$second." = ".$result;
            break;
case "sub": $result = $first - $second;
            echo $first." -  ".$second." = ".$result;
            break;
case "mul": $result = $first * $second;
            echo $first." *  ".$second." = ".$result;
            break;
case "div": if($second==0)
             {echo "error, cannot be divided by zero";}
            else 
              { $result = $first/ $second;
            echo $first." / ".$second." = ".$result;
              }
            break;

}
?>
</body>
</html>








