<?php
echo"about static variable \n";
function staticVar()
{
    
    static $a = 1;
    $b= 10;
    $a++;
    $b++;
    echo"$a \n";
    echo"$b \n";
}
staticVar();
staticVar();
?>