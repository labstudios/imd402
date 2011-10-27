<?php require_once("dbcon.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Database Example</title>
</head>
<body>
	This is some text.<br />
	<h3>The user names on this site are:</h3>
	<?php 
		$res = $db->query("SELECT `uname` FROM `users`");
		
		while($row = $res->fetch_assoc())
		{
			$row = (Object) $row;
			echo "$row->uname <br />\r\n"; // use when object type casting
			//echo $row['uname']."<br />\r\n"; //use when not object typer cast
		}
	?>
	
	<div>
		<h3>Why don't you sign up too!</h3>
		<form action="signup.php" method="post" enctype="multipart/form-data">
			User name: <input type="text" name="uname" /><br />
			Password: <input type="password" name="pass" /><br />
			Confirm: <input type="password" name="pass2" /><br />
			Upload a file: <input type="file" name="upfile" /><br />
			<input type="submit" />
		</form>
	</div>
</body>
</html>