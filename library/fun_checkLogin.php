<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
if(!isset($_SESSION['isLogin'])){
		header('Location: /e-market');
		exit;
	}
?>