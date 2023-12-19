<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikat extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function search()
	{
		$data = 'Hello';
		$this->templateadmin->load('template/search','sertifikat/search',$data);
	}

	public function cariSertifikat()
	{
		$data = 'Hello';
		$this->templateadmin->load('template/search','sertifikat/carisertifikat',$data);
	}

	public function detail()
	{
		$data = 'Hello';
		$this->templateadmin->load('template/search','sertifikat/detail',$data);
	}

	public function go()
	{
		$this->load->model("sertifikat_m");
		$post = $this->input->post(null, TRUE);
		$kode =  $post['kode'];
		$link = $this->sertifikat_m->validate($kode);

		if ($link->num_rows() != null) {
			$id = $link->row("id");
			$kode = $link->row("kode");
			$nama = $link->row("nama");
			$keperluan = $link->row("keperluan");
			$keterangan = $link->row("keterangan");
			$this->session->set_flashdata('success','<h1>Sertifikat Tervalidasi </h1><br> <small> ID Sertifikat : '.$kode.'</small><br> Nama : '.$nama.'<br> Keperluan : '.$keperluan.'<br><br> Keterangan : <br>'.$keterangan.'<br> <a href="https://logbook.uptkukm.id/printsertifikat/seminar/'.$id.'"> Download Sertifikat</a><br>');
			redirect('cert');
		} else {
			$this->session->set_flashdata('danger','Nomor Sertifikat Tidak Valid');
			redirect('cert');
		}
	}

	public function goCariSertifikat()
	{
		$this->load->model("sertifikat_m");
		$post = $this->input->post(null, TRUE);
		$kode =  $post['kode'];
		$keperluan =  $post['keperluan'];
		$link = $this->sertifikat_m->getByEmail($kode,$keperluan);

		if ($link->num_rows() != null) {
			$id = $link->row("id");
			$kode = $link->row("kode");
			$nama = $link->row("nama");
			$keperluan = $link->row("keperluan");
			$keterangan = $link->row("keterangan");
			$this->session->set_flashdata('success','<h1>Sertifikat Tersedia </h1>Nama : '.$nama.'<br> Keperluan : '.$keperluan.'<br> <a href="https://logbook.uptkukm.id/printsertifikat/seminar/'.$id.'"> Download Sertifikat</a><br>');
			redirect('carisertifikat');
		} else {
			$this->session->set_flashdata('danger','Nomor Sertifikat Tidak Valid');
			redirect('carisertifikat');
		}		
	}
}
