<?php

class Kategori extends CI_Controller
{
	public function kaos()
	{
		$data['kaos'] = $this->model_kategori->data_kaos()->result_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kaos', $data);
		$this->load->view('templates/footer');
	}

	public function kemeja_surfing()
	{
		$data['kemeja_surfing'] = $this->model_kategori->data_kemeja_surfing()->result_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kemeja_surfing', $data);
		$this->load->view('templates/footer');
	}

	public function kemeja_flanel()
	{
		$data['kemeja_flanel'] = $this->model_kategori->data_kemeja_flanel()->result_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('kemeja_flanel', $data);
		$this->load->view('templates/footer');
	}

	public function celana_boxer()
	{
		$data['celana_boxer'] = $this->model_kategori->data_celana_boxer()->result_array();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('celana_boxer', $data);
		$this->load->view('templates/footer');
	}
}