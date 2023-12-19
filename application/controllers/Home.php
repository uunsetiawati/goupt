<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("link_m");
	}

	public function index()
	{
		$this->load->library('form_validation');
		$data['total_link'] = $this->link_m->countTotalLink();
		$data['total_hits'] = $this->link_m->countTotalHits();
		$this->templateadmin->load('template/home', 'page/home', $data);
	}

	public function go()
	{
		$kode =  $this->uri->segment(1);
		$link = $this->link_m->get_url($kode)->row("link");
		$link_id = $this->link_m->get_url($kode)->row("id");

		if ($link != null) {
			$this->link_m->saveHits($link_id);
			// $this->link_m->sendWa($kode, $link, $this->input->ip_address());
			redirect($link);
		} else {
			redirect('');
		}
	}

	public function simpan()
	{
		//Load librarynya dulu
		$this->load->library('form_validation');

		//Atur validasinya
		$this->form_validation->set_rules('kode', 'kode', 'min_length[3]|max_length[100]|is_unique[tb_link.kode]');
		$this->form_validation->set_rules('link', 'link', 'min_length[3]|valid_url');

		//Pesan yang ditampilkan
		$this->form_validation->set_message('min_length', '{field} Setidaknya  minimal {param} karakter.');
		$this->form_validation->set_message('max_length', '{field} Seharusnya maksimal {param} karakter.');
		$this->form_validation->set_message('is_unique', 'Data sudah ada');
		$this->form_validation->set_message('valid_url', 'Hanya bisa menyederhanakan Link');
		//Tampilan pesan error
		$this->form_validation->set_error_delimiters('<span class="badge badge-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['total_link'] = $this->link_m->countTotalLink();
			$data['total_hits'] = $this->link_m->countTotalHits();
			$this->templateadmin->load('template/home', 'page/home', $data);
		} else {
			$post = $this->input->post(null, TRUE);

			if ($post['keyaccess'] != "root") {
				$this->session->set_flashdata(
					'success',
					'<h1 class="text-danger">Key Access Salah</h1>'
				);
				redirect('');
			}

			$this->link_m->simpan($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata(
					'success',
					'<h1 class="text-success">Berhasil Disimpan</h1>
        		<h4>Link Kamu : <b id="link-hasil">' . base_url() . $post['kode'] . '</b></h4>'
				);
			}
			redirect('');
		}
	}
}
