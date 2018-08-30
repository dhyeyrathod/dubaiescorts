<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jitendra
*/
class New_escorts extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('frontend/new_escorts_view');
	}
}