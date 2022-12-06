<?php
require 'dbconn.php';

$req = $_SERVER['REQUEST_METHOD'];

if ($req === 'POST') {
	$fn = $_POST['firstName'];
	$ln = $_POST['lastName'];
	$ph = $_POST['phone'];

	$result = $db->query("select * from test where firstName = '$fn' and lastName = '$ln'");
	$rc = $result->num_rows;

	if ($rc <= 0) {
		$jse = array('error' => 'no values found');
		echo json_encode($jse);
		http_response_code(500);
		$db->close();
		exit(1);
	} else {
		$row = $result->fetch_assoc();
		/*$jse = array('firstName' => $GLOBALS['fn'], 'lastName' => $GLOBALS['ln'], 'phone' => $GLOBALS['ph']);*/
		$jse = array('firstName' => $row['firstName'], 'lastName' => $row['lastName'], 'phone' => $row['phone']);
		echo json_encode($jse);
	}
}
##contune else if for other request types

$db->close();
