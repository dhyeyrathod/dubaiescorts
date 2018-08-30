<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function file_upload_config()
	{
		$config['upload_path'] = './upload/our_site/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '0';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
		$config['encrypt_name']  = TRUE;
		return $config ;
	}
	public function banner_image_upload()
	{
		$config['upload_path'] = './upload/banner/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '0';
		$config['max_width'] = '0';
		$config['max_height'] = '0';
		$config['encrypt_name'] = TRUE;
		return $config;
	}
}