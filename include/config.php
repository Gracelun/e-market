<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'emarket';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);//建立連線

if ($conn->connect_error) {
	die("Connection failed:" .$conn->connrct_error);
}

/* change character set to utf8 */
if (!$conn->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $conn->error);
    exit();
}

?>