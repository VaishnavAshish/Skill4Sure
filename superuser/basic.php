<?php
ob_start();
session_start();
if(!isset($_SESSION['usr_nm']))
	{
		$_SESSION['usr_nm']="DEMO";
	}
include_once("../conn.php");
define("WebName","Website Name");
?>