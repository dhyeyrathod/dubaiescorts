<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jitendra
*/
class Premium_advertising extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('frontend/premium_advertising_view');
	}
}