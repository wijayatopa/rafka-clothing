<?php

class Model_kategori extends CI_Model
{
	public function data_kaos()
	{
		return $this->db->get_where("tb_barang", array('
			kategori' => 'kaos'));
	}

	public function data_kemeja_surfing()
	{
		return $this->db->get_where("tb_barang", array('
			kategori' => 'kemeja surfing'));
	}

	public function data_kemeja_flanel()
	{
		return $this->db->get_where("tb_barang", array('
			kategori' => 'kemeja flanel'));
	}

	public function data_celana_boxer()
	{
		return $this->db->get_where("tb_barang", array('
			kategori' => 'celana boxer'));
	}
}