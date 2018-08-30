<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @author Jitendra
*/
class Create_free_escort_profile extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('frontend/create_free_escort_profile_view');
	}
}