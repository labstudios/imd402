<?php
	$db = @new mysqli("localhost", "example", "pass123", "example");
	if($db->connect_errno)
	{
		die("DB connection FAIL: " . $db->connect_error);
	}