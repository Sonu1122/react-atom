<?php
include ('functions.php');
if(isset($_REQUEST['data'])){
	$request = $_REQUEST['data'];
	if($request == ''){
		echo"Please provide some data";
	}
	else{
		return abc();
	}
}
else{
	echo"Please call some method";
}
?>