<?php
$db = new mysqli('localhost','root','','testapi');

if($db->connect_errno){
	echo 'MySQL connection failed: '.$db->connect_error;
	exit(1);
}
?>