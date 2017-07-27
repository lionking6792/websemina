<?php
function writeArray(){
	$arr1 = array("apple", "pineapple", "pen");
	$arr2 = array("arr1"=>1, "arr2"=>2, "arr3"=>3);
	$i = 0;
	$len = count($arr1);
	while($i < $len){
		echo $arr1[$i];
		echo "<br>";
		$i++;
	}

	echo "<br>";

	foreach($arr2 as $val){
		echo "$val <br>";
	}
}

?>