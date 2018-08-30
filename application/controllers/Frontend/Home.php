<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/home_model');
	}
	public function index()
	{
		$data['our_site_key'] = $this->home_model->getAllOurSiteData();
		$data['country_key'] = $this->home_model->getAllCountry();
		$data['banner_key'] = $this->home_model->banner();

		$this->load->view('frontend/home_view',$data);
	}
	public function get_city_data()
	{
		$country_id = $this->security->xss_clean($this->input->post('country_id'));
		if ($this->home_model->CheckCitiesIsPresent($country_id)) {
			header('Content-Type: application/json');
    		echo json_encode(array('status' => 'success','message'=>'fetch data successfully','data'=>$this->home_model->getAllCities($country_id)));
		} else {
			header('Content-Type: application/json');
    		echo json_encode(array('status' => 'failed','message'=>'Data is not Present'));	
		}
		
	}


}