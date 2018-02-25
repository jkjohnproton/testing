<?php

ob_start();

header("Cache-Control: no-store, no-cache");

set_time_limit (60);



$includePath		= "./";

include_once($includePath."axCommon.php");

include_once($includePath."classes/axUser.cls.php");

$clsaxUser	= new clsaxUser($connect, $includePath);

$pageTitle			= "Logout";	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Untitled Document</title>

</head>

<body>

<?php 

	$clsaxUser->logout();

	header("Location:axUserLogin.php");

?>

</body>

</html>

<?php ob_end_flush();  ?>