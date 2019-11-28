<?php
function abc(){
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$data = $fname." ".$lname;
	echo json_encode(["data"=>$data,"status"=>200]);
}
?>