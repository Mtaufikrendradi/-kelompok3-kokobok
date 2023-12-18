<?php

class Kategori extends CI_Controller{
	public function minuman_dingin()
	{
		$data['minuman_dingin'] = $this->model_kategori->data_minuman_dingin()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman_dingin',$data);
        $this->load->view('templates/footer');
	}

	public function minuman_panas()
	{
		$data['minuman_panas'] = $this->model_kategori->data_minuman_panas()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman_panas',$data);
        $this->load->view('templates/footer');
	}

	public function makanan_ringan()
	{
		$data['makanan_ringan'] = $this->model_kategori->data_makanan_ringan()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('makanan_ringan',$data);
        $this->load->view('templates/footer');
	}
}