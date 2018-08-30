<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class MY_Model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
}