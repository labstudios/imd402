<?php
require_once("employee.php");

class Administrator extends Employee
{
	
	public function Administrator($name = "")
	{
		parent::Employee($name);
		$this->_salary = "50000";
	}
	
	public function __get($key)
	{
		switch($key)
		{
			case "salary":
				return $this->_salary;
			break;
			default:
				return parent::__get($key);
			break;
		}
	}
}
