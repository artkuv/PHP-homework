<pre>

<?php

if (isset($_POST['num1']) and isset($_POST['num2'])) 
{
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2']; 
    switch ($_POST['action']) {
        case 'add':
            $res = $num1 + $num2;
            echo $res;            
            break;
        
        case 'subtract': 
            $res = $num1 - $num2;
            echo $res;            
            break;

        case 'multiply': 
            $res = $num1 * $num2;
            echo $res;            
            break;
        
        case 'divide':
            if ($num2 === 0) 
            {
                $res = 'На ноль делить нельзя!';
                echo $res;
                break;
            } 
            $res = $num1 / $num2;
            echo $res;            
            break;
        
        default:
            # code...
            break;
    }
}    

header('Location:http://localhost/calc.php?res=' . $res);
die();
?>