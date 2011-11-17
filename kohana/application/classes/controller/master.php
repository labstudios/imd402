<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Master extends Controller {
	
	protected $title = "My Site";
	protected $content = "";
	protected $ajaxCall = false;
	protected $page;
	
	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
	}
	
	public function before()
	{
		$this->page = View::factory("skeleton");
	}
	
	public function after()
	{
		if(!$this->ajaxCall)
		{
			$this->page->title = $this->title;
			$this->page->content = $this->content;
			$this->response->body($this->page);
		}
		else
		{
			$this->response->body($this->content);
		}
	}
}