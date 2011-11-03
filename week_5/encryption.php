<pre>
<?php
	
	$salt1 = "salt";
	$salt2 = "tlas";
	$db = new mysqli("localhost", "example", "pass123", "example");
	$cryptRes = $db->query("SELECT AES_ENCRYPT('bob', '$salt1') AS `enc1`, AES_ENCRYPT('bob', '$salt2') AS `enc2`");
	$cryptions = (Object) $cryptRes->fetch_assoc();
	var_dump($cryptions);
	echo "\r\n\r\n";
	
	$decryptRes = $db->query("SELECT AES_DECRYPT('$cryptions->enc1', '$salt1') AS `dec1`, AES_DECRYPT('$cryptions->enc2', '$salt2') AS `dec2`");
	$decryptions = (Object) $decryptRes->fetch_assoc();
	var_dump($decryptions);
?>
</pre>