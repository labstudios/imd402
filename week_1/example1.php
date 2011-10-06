<?php

function mult($n1, $n2 = 1)
{
	return $n1 * $n2;
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PHP Example 1</title>
</head>
<body>
	<?php 
		//include("something.php"); 
		echo "This is some text!\r\n";
		echo "\tThis is some more!!!!<br />";
		
		$names = array();
		array_push($names, "Fred", "Wilma");
		$names[] = "Barney";
		$names[] = "Betty";
		var_dump($names);
		
		$employee = array('firstName' => "Bob", 'lastName' => "Parker");
		$employee['job'] = "Paperworker";
		$employee['age'] = 49;
		//echo "<pre>";
		//var_dump($employee);
		//echo "</pre>";
		//echo $employee['firstName'];
		foreach($employee as $emp => $val)
		{
			//echo $emp .": " . $val."<br />\r\n";
			echo "<strong>$emp: </strong>$val<br />\r\n";
		}
		$empObj = (Object) $employee;
		echo "$empObj->firstName $empObj->lastName";
		echo "\r\n".mult(3,5)."<br />";
		echo "\r\n".mult(7);
	?>
</body>
</html>