<?php 
	function isPrime($num){
		for($x=2;$x<$num;$x++){
			if($num%$x==0){
				return 0;
			}
		}
		return 1;
	}
	
	$num = $_GET['number'];
	$flag = isPrime($num);
	if($flag == 1){
		echo $num." is a prime number";
	}else{
		echo $num." is a not a prime number";
	}
?>