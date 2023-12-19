<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search()
	{
		$data = 'Hello';
		$this->templateadmin->load('template/search','page/search',$data);
	}

	public function go()
	{
		$this->load->model("link_m");
		$post = $this->input->post(null, TRUE);
		$kode =  $post['kode'];
		$link = $this->link_m->get_url($kode)->row("link");
		$link_id = $this->link_m->get_url($kode)->row("id");

		if ($link != null) {
			$this->link_m->saveHits($link_id);
			redirect($link);
		} else {
			$this->session->set_flashdata('danger','<h1 class="text-danger">Link Tidak Ditemukan</h1>');
			redirect('s');
		}
	}
}
