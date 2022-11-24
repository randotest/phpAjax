<?php 
require 'dbconn.php';

$fn=$_POST['firstName'];
$ln=$_POST['lastName'];
$ph=$_POST['phone'];

$result = $db->query("select * from test where firstName = '$fn' and lastName = '$ln'");
$rc = $result->num_rows;

if($rc<=0){
	$jse = array('error'=>'no values found');
	exit(1);
}else{
	$row = $result->fetch_assoc();
	/*$jse = array('firstName' => $GLOBALS['fn'], 'lastName' => $GLOBALS['ln'], 'phone' => $GLOBALS['ph']);*/
	$jse = array('firstName' => $row['firstName'], 'lastName' => $row['lastName'], 'phone' => $row['phone']);
}

$db->close();

echo json_encode($jse);
