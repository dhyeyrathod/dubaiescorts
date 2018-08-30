<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Dashboard extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('admin/dashboard_view');
	}
}