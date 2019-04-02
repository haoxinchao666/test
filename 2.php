<?php 
$n = 11;

function NumberOf1($n){
	for ($i=0; $i <=$n ; $i++) { 
        if($n%2 == 0){
          $sum = $n%2;
        }else{
        	$sum = $n%2;
        }           		
	}
	return $sum;
}
echo NumberOf1($n);







 ?>