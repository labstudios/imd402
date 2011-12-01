<?php
	session_start();
	$loggedin = false;
	if(isset($_SESSION['user']) && $_SESSION['user'] != null)
	{
		$loggedin = true;
		$user = $_SESSION['user'];
	}