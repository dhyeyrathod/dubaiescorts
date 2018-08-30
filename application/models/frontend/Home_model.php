<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Home_model extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getAllOurSiteData()
	{
		$sql_str = "SELECT * FROM our_site_master ORDER BY id DESC";
		return $this->db->query($sql_str)->result();
	}
	public function getAllCountry()
	{
		$sql_str = "SELECT * FROM countries ORDER BY name ASC";
		return $this->db->query($sql_str)->result();
	}
	public function getAllCities($country_id)
	{
		$sql_str = "SELECT cities.id, cities.name FROM cities INNER JOIN (states INNER JOIN countries ON countries.id=states.country_id) ON cities.state_id=states.id WHERE country_id = ".$this->db->escape($country_id);

		return $this->db->query($sql_str)->result();
	}
	public function CheckCitiesIsPresent($country_id)
	{
		$sql_str = "SELECT cities.id , cities.name FROM cities INNER JOIN (states INNER JOIN countries ON countries.id=states.country_id) ON cities.state_id=states.id WHERE country_id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->num_rows();
	}

	public function banner()
	{
		$sql_str = "SELECT * FROM banners WHERE status = 1 ";
		return $this->db->query($sql_str)->result();
	}
	public function getRegistration($name,$email,$telephone,$website,$provider_type,$gender,$sexual_orientation,$country,$state,$city,$description)
	{
		$sql_str = "INSERT INTO escorts_profile(name, email, telephone, website, provider_type, gender, sexual_orientation, country, state, city, description, created_by, created_date, status) VALUES(".$this->db->escape($name).",".$this->db->escape($email).",".$this->db->escape($telephone).",".$this->db->escape($website).",".$this->db->escape($provider_type).",".$this->db->escape($gender).",".$this->db->escape($sexual_orientation).",".$this->db->escape($country).",".$this->db->escape($state).",".$this->db->escape($city).",".$this->db->escape($description).", 1, NOW(),true)";
		 return $this->db->query($sql_str);

		
	}

}