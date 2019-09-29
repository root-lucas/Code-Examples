<?php 

$t = isset($_GET['t'])?$_GET['t']:'num';
$callback=isset($_GET['callbackg'])?$_GET['callbackg']:'fn1';

$arr1 = array('1111','2222','3333','44444','55555');
$arr2 = array('aaaa','bbbb','ccccc','ddddd','eeeee');

if($t=='num'){
	$data = json_encode($arr1);
	echo $callback.'('.$data.')';
}else{
	$data = json_encode($arr2);
	echo $callback.'('.$data.')';
}

// echo 'fn('.json_encode($arr2).');';
 ?>