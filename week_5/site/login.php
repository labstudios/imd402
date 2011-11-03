<?php
	require_once("dbcon.php");
	session_start();
	$_SESSION['user'] = null;
	$loggedin = false;
	$data = (Object) filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	$user = $db->query("SELECT * FROM `users` WHERE `uname` = '$data->uname'");
	if($user->num_rows > 0)
	{
		$user = (Object) $user->fetch_assoc();
		$encRes = $db->query("SELECT SHA1('$data->pass') AS `encpass`");
		$encpass = $encRes->fetch_assoc();
		if($user->pass == $encpass['encpass'])
		{
			$loggedin = true;
			$_SESSION['user'] = $user;
		}
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
			?>
			<a href="nextpage.php">Go on to view stuff</a>
			<?php
		}
		else
		{
			echo "Login failed!";
		}
	?>
</body>
</html>