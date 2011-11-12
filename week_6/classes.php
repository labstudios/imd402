<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<body>
<pre>
<?php
require_once("employee.php");
require_once("administrator.php");
echo "Employees for ".Employee::COMPANY."\r\n\r\n";
Employee::setStartPoint(20);
$emp = new Employee("Bob Sanders");
$emp->addSocNum("999-99-9999");
$emp2 = new Employee("Sandra");
$emp2->addSocNum("999-99-9999");
$emp->res = "asdfnjkebrnjk ";
echo $emp->name." ".$emp2->name." ".$emp->res;
$admin = new Administrator("Fred Flinstone");
$admin->addSocNum("000-00-0000");

echo "\r\n\r\n $admin->name makes $admin->salary";
?>
</pre>    
</body>
</html>