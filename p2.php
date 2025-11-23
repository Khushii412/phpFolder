S<?php
echo"strict case use- only int data , otherwise throw error";
declare(strict_types=1);
function add(int $a, int $b)
{
    return $a + $b;
}
echo(add(5, "3"));
?>