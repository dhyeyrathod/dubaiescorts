<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author jay Rathod
*/
class Admin_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function storeOurSite($name,$url,$filename)
	{
		$sql_str = "INSERT INTO our_site_master (name , image , website_url , status , created_by , created_date ) VALUES (". $this->db->escape($name).",". $this->db->escape($filename).",". $this->db->escape($url).", true , 1 , NOW())";
		return $this->db->query($sql_str);
	}

	public function storeBanner($url,$filename)
	{
		$sql_str = "INSERT INTO banners (url, image , created_by , created_date , status ) VALUES (".$this->db->escape($url).",".$this->db->escape($filename).", 1, NOW(), true)";
		return $this->db->query($sql_str);

	}
}