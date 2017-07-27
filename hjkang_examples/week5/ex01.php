<?php

require('./ex01func.php');

$txt = "world";

echo "hello";
echo "<br>";
echo "hello " . $txt . "<br>";

$a = 1;
$b = 2;
echo $a + $b . "<br>";

for($x=1; $x <= 3; $x++)
	echo "test $x <br>";
for($x=1; $x <= 3; $x++)
	echo 'test $x <br>';

echo "<br>";

writeArray();

?>