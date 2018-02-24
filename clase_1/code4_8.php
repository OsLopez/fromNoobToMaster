<?php
$a = 1;
$b = 2;
function Suma()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    $GLOBALS['c'] = 10;
}
Suma();
echo $b."<br>";
echo $c;
?>