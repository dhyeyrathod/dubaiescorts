<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @author Jitendra
*/
class Registration extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('frontend/home_model');
	}

	public function index()
	{
		$this->load->view('frontend/registration_view');	
	}

	public function process()
	{
		if($this->input->server('REQUEST_METHOD') == 'POST') {
			if($this->form_validation->run('registration')) {
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$telephone = $this->input->post('telephone');
				$website = $this->input->post('website');
				$provider_type = $this->input->post('provider_type');
				$gender = $this->input->post('gender');
				$sexual_orientation = $this->input->post('sexual_orientation');
				$country = $this->input->post('country');
				$state = $this->input->post('state');
				$city = $this->input->post('city');
				$description = $this->input->post('description');
				
				if($this->home_model->getRegistration($name,$email,$telephone,$website,$provider_type,$gender,$sexual_orientation,$country,$state,$city,$description)) {
					$this->session->set_flashdata('registration_success','Your post has been submitted successfully');
					redirect('registration');
				} else {
					$this->session->set_flashdata('registration_error','Error occured while submitting post!!');
					redirect('registration');
				}
				
			} else {
				$this->session->set_flashdata('name_error',form_error('name'));
				$this->session->set_flashdata('email_error',form_error('email'));
				$this->session->set_flashdata('telephone_error',form_error('telephone'));
				$this->session->set_flashdata('website_error',form_error('website'));
				$this->session->set_flashdata('provider_type_error',form_error('provider_type'));
				$this->session->set_flashdata('gender_error',form_error('gender'));
				$this->session->set_flashdata('sexual_orientation_error',form_error('sexual_orientation'));
				$this->session->set_flashdata('country_error',form_error('country'));
				$this->session->set_flashdata('state_error',form_error('state'));
				$this->session->set_flashdata('city_error',form_error('city'));
				$this->session->set_flashdata('description_error',form_error('description'));
				redirect('registration');
			}

		} else {
			echo "No direct script access allowed";
		}	
	}
}