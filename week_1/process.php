<?php
	$msg = "";
	$data = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
	
	foreach($data as $key => $value)
	{
		$msg .= "$key: $value\r\n";
	}
	
	mail("bwallen.aii@gmail.com", "Some data from your site!", $msg);
?>

Thank you! Your random information is valuable to us!
No, really, it&#39;s  worth money $$!