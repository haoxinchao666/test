<?php 
//定义变量
$n = 5;
//输出变量
echo demo($n);
function demo($n)
{
	// $result=$n+($n+1);
	$result = '';
	$result = $n+demo($n-1);

	return $result;
}








 ?>