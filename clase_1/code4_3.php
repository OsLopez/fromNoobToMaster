<?php
var_dump(isset($a));
$a=null;
echo "<br> existe a? <br>";
var_dump(isset($a));
$a=1;
print("<br>");
var_dump(isset($a));
echo "<br> ahora si existe<br>";
unset($a);
var_dump(isset($a));
echo "<br>ahh ya se fue x_x<br>";

?>