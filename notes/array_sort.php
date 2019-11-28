<?php

$array = array('8','9','4','2','5','6','1','35','74','11','28','658','0');
$count = count($array);


for($x=0;$x<$count;$x++)
{
	for($y=0;$y<$count-1;$y++)
	{
		if($array[$y]<$array[$y+1])
		{
			//$temp = $array[$y+1];
			//$array[$y+1] = $array[$y];
			//$array[$y] = $temp;
			$temp = $array[$y];
			$array[$y] = $array[$y+1];
			$array[$y+1] = $temp;
		} 
	}
}

echo"<pre>";print_r($array);
?>