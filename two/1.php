<?php 
header("content-type:text/html;charset=utf-8");

function demo($n)
{
	$hundreds = floor($n/100);
	$tens = floor($n/10)%10;
	$one = floor($n%10);
	return (pow($hundreds,3)+pow($tens,3)+pow($one,3) ==$n);
}
echo "水仙花数为:";
for ($i=100; $i <1000 ; $i++) { 
	if(demo($i)){
       echo $i."\n";
	}
}



 ?>