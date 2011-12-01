<?php
	$db = @new mysqli("localhost", "example", "pass123", "shopcart");
	if($db->connect_errno)
	{
		die("DB connection FAIL: " . $db->connect_error);
	}