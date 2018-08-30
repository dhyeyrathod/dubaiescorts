<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Index extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		redirect('home');
	}
}