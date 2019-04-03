<?php 
header("content-type:text/html;charset=utf-8");

//折半查找  输入任意数字  返回数字在该数组中的下标

$n = 123;

$arr = [1,2,3,4,5];
// print_r(array_keys($arr));

$len = count($arr);

for ($i=0; $i <$len/2 ; $i++) { 
	for ($i=0; $i <$len-($len/2) ; $i++) { 
		echo $i;
	}
}
function demo()
{
	
}






 ?>