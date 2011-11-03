<?php require_once("dbcon.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Database Example</title>
</head>
<body>
	<div>
	<h3>Login</h3>
	<form action="login.php" method="post" enctype="multipart/form-data">
			User name: <input type="text" name="uname" /><br />
			Password: <input type="password" name="pass" /><br />
			<input type="submit" />
	</form>
	</div>
	
	<div>
		<h3>Why don't you sign up!</h3>
		<form action="signup.php" method="post" enctype="multipart/form-data">
			User name: <input type="text" name="uname" /><br />
			Password: <input type="password" name="pass" /><br />
			Confirm: <input type="password" name="pass2" /><br />
			<input type="submit" />
		</form>
	</div>
</body>
</html>