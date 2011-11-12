<?php

class Employee
{
	protected static $numInstances = 0;
	const COMPANY = "Bob's Widgets";
	protected $_name;
	protected $_id;
	protected $_socNum;
	protected $_address;
	protected $_title;
	protected $_salary;
	
	public function Employee($name = "")
	{
		$this->_name = $name;
		self::$numInstances++;
		$this->_id = self::$numInstances;
	}
	
	public function addSocNum($socNum)
	{
		$this->_socNum = $socNum;
		echo "$this->_name's social security number is :  $this->_socNum \r\n Thier id is $this->_id \r\n\r\n";
	}
	
	public static function setStartPoint($start)
	{
		self::$numInstances = $start;
	}
	
	public function __get($key)
	{
		switch($key)
		{
			case "name":
				return $this->_name;
			break;
			default:
				
			break;
		}
	}
	
	public function __set($key, $val)
	{
		switch($key)
		{
			case "name":
				$this->_name = $val;
			break;
			default:
				$this->$key = $val;
			break;
		}
	}
}