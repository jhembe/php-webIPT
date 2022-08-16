<?php
	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);

	$arr = array("2","yes","now");
	$arr2 = array("they","love","meat");
	array_push($arr,"her");
	print_r($arr);

	echo count($arr);
	echo "\n";
	$pieces = [1, "2", "three", 4.0];
	$glue = " and a ";

	echo implode($glue, $pieces);
	echo "\n";

	$meinfo = array("name"=>"Joseph Gabriel","age"=>20,"mom"=>"Jesca Joseph Canisius","dad"=>"Gabriel Anthon Mahembega");
	$elseinfo = array("name"=>"Loistracy Andrew","age"=>19,"mom"=>"Aneez Akbar","dad"=>"Andrew Reuben Shimba");
	print_r($meinfo);
	print_r($elseinfo);

	print_r($meinfo + $elseinfo);
	echo $meinfo["name"];

	echo "\n";
?>
