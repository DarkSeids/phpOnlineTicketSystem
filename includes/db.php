<?php
$connection = mysqli_connect("localhost",'root','','bus_booking');

if (!$connection) {
	die('unable to connection'. mysqly_error('$connection')); // checking database connection // 
}

?>