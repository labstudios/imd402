<?php
	require_once("dbcon.php");
	session_start();
	$loggedin = false;
	$user = null;
	if(isset($_SESSION['user']) && $_SESSION['user'] != null)
	{
		$loggedin = true;
		$user = $_SESSION['user'];
	}
	else
	{
		//redirect to home
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>
<body>
	<?php
		if($loggedin)
		{
			echo "Hello $user->uname! Your id is $user->id.";
		}
	?>
</body>
</html>