<?php 
echo"1st program \n";
function add(int $a, int $b)
{
    return $a+$b;
}
function multiply(& $a, & $b)
{
    $a = $a * $b;
    return $a;
}
echo "sum ";
echo(add(5,"2"));
$a = 9;$b=7;
echo "\nmultiply";
$mult = multiply( $a,$b);
echo "\n";  
echo($mult);
?>