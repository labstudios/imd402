<?php 
	session_start();
	require_once("dbcon.php");
	$signedUp = true;
	$data = (Object) filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	if(strlen($data->username) > 0 &&
		strlen($data->pass) > 0 &&
		$data->pass == $data->pass2)
	{
		$res = $db->query("SELECT `username` FROM `users` WHERE `username` = '$data->username'");
		if($res->num_rows > 0)
		{
			$signedUp = false;
		}
		else
		{
			//Add the user to the database
			$db->query("INSERT INTO `users` (`username`,`pass`) VALUES ('$data->username', SHA1('$data->pass'));");
			//Check to make sure there was no problem
			$signedUp = $db->errno ? false:$signedUp;
			if($signedUp)
			{
				//get the user I've just added'
				$res = $db->query("SELECT `id`,`username` FROM `users` WHERE `username` = '$data->username'");
				$user = (Object) $res->fetch_assoc();
				//get the role the user will have
				$res = $db->query("SELECT `id`,`role` FROM `roles` WHERE `role` = 'user'");
				$role = (Object) $res->fetch_assoc();
				//match the user to their role
				$db->query("INSERT INTO `users_has_roles` (`users_id`,`roles_id`) VALUES ('$user->id', '$role->id')");
				$signedUp = $db->errno ? false:$signedUp;
				$_SESSION['user'] = $user;
			}
			
		}
	}
	else
	{
		$signedUp = false;
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Thanks!</title>
</head>
<body>
	<?php
		if($signedUp)
		{
			?>Thank you! You are now registered as <?php echo $user->username; ?>! 
			<a href="index.php">Go back</a> to see you!<?php
		}
		else
		{
			?>Sorry. There was some MASSIVE failure. <a href="index.php">Go back</a> to try again.<?php
		}
	?>
	
</body>
</html>










