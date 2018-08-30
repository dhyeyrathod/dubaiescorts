<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* @author Jitendra
*/
class Add_banner extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/admin_model');
	}
	public function index()
	{
		$this->load->view('admin/add_banner_view');	
	}

	public function process()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('url', 'URL', 'required|valid_url|is_unique[banners.url]');
			$this->load->library('upload', $this->banner_image_upload());
			if ($this->form_validation->run() && $this->upload->do_upload('image')) {
				$url = $this->security->xss_clean($this->input->post('url'));
				if ($this->admin_model->storeBanner($url, $this->upload->data('file_name'))) {
					$this->session->set_flashdata('banner_success','Your banner posted Successfully');
					redirect('admin/add_banner');
				} else {
					$this->session->set_flashdata('banner_error','Error occured while posting banner!!');
				}

			} else {
				$this->session->set_flashdata('url_error', form_error('url','<p class="text-danger">', '</p>'));
				$this->session->set_flashdata('image_error', $this->upload->display_errors('<p class="text-danger">', '</p>'));
				redirect('admin/add_banner');
			}

		} else {
			echo "No direct script access allowed";
		}
	}
}