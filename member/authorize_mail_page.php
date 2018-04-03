<?php
	$C_name = 'Bing';
	$C_email = 'Bing';
	$token = '123456addffsgndsgnsdf5484';
	$content = "親愛的 ".$C_name."(".$C_email.")，您好：<br /><br />";
	$url = $_SERVER["HTTP_HOST"]."/e-market/member/authorize.php?authorize=$token";
	$content .= "<a href='$url'>$url</a><br/>";
	$content2 = "
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		$content
	</body>
	</html>
	"
?>
