<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Master {

	public function action_index()
	{
		$this->title = "My Home page";
		$this->content = View::factory("home");
		$this->content->extra = "";
		$users = ORM::factory("user")->order_by("uname", "ASC")->find_all();
		
		
		foreach($users as $user)
		{
			$this->content->extra .= $user->uname." "."<br />\r\n";
			echo $user->roles->find_all()->count();
			foreach($user->roles->find_all() as $role)
			{
				$this->content->extra .= $role->role."<br />\r\n";	
			}
			$this->content->extra .= "<hr />\r\n";
		}
	}
	
	public function action_test($id = null)
	{
		$testPage = View::factory("home");
		if($id)
		{
			$this->title = $id;
		}
		else
		{
			$this->title = "??";
		}
		$testPage->extra = "TEST";
		$this->content = $testPage;
	}
	
	public function action_create()
	{
		$role = ORM::factory("role");
		$role->role = "New";
		$role->description = "This is a new role";
		$role->save();
	}

} // End Welcome
