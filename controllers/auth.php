<?php

class Auth extends CI_Controller 
{
	public function login()
	{
		$this->form_validation->set_rules('username', 'Username','required');
		$this->form_validation->set_rules('password', 'Password','required');

		if ($this->form_validation->run() == false)
		{
			$this->load->view('templates/header');
	 		$this->load->view('form_login');
	 		$this->load->view('templates/footer');
		} else {
			$auth = $this->model_auth->cek_login();

			if($auth == false)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Username atau Password Salah !
  					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('auth/login');
			} else {
				$this->session->set_userdata('username',$auth->username);
				$this->session->set_userdata('role_id',$auth->role_id);

				switch($auth->role_id){
					case 1 : redirect('admin/dashboard_admin');
								break;
					case 2 : redirect('dashboard');
								break;
					default: break;
				}
			}
		}
	}
}