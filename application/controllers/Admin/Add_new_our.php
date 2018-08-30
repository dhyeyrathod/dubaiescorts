<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Add_new_our extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_model');
	}
	public function index()
	{
		$this->load->view('admin/add_new_our_view');
	}
	public function process()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('url', 'URL', 'required|valid_url|is_unique[our_site_master.website_url]');
			$this->load->library('upload', $this->file_upload_config());
			if ($this->form_validation->run() && $this->upload->do_upload('image')) {
				$name = $this->security->xss_clean($this->input->post('name'));
				$url = $this->security->xss_clean($this->input->post('url'));
				if ($this->admin_model->storeOurSite($name,$url,$this->upload->data('file_name'))) {
					$this->session->set_flashdata('normal_success', 'Your Post submited Successfully');
					redirect('admin/add_new_our');
				} else {
					$this->session->set_flashdata('normal_error', 'Your Post has not been submited');
					redirect('admin/add_new_our');
				}
			} else {
				$this->session->set_flashdata('validation_name_error', form_error('name','<p class="text-danger">', '</p>'));
				$this->session->set_flashdata('validation_url_error', form_error('url','<p class="text-danger">', '</p>'));
				$this->session->set_flashdata('validation_image_error', $this->upload->display_errors('<p class="text-danger">', '</p>'));
				redirect('admin/add_new_our');
			}
		} else {
			echo "No direct script access allowed";
		}
	}
}