<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Link_m extends CI_Model
{

	function get_url($kode)
	{
		$this->db->from('tb_link');
		$this->db->where('kode', $kode);
		$query = $this->db->get();
		return $query;
	}

	function simpan($post)
	{
		$params['id'] =  "";
		$params['kode'] =  $post['kode'];
		$params['link'] =  $post['link'];
		$params['created'] =  date("Y-m-d H:i:sa");
		$this->db->insert('tb_link', $params);
	}

	function countTotalLink()
	{
		$this->db->from("tb_link");
		$query = $this->db->get()->num_rows();
		return $query;
	}

	function countTotalHits()
	{
		$this->db->from("tmp_link_hits");
		$query = $this->db->get()->num_rows();
		return $query;
	}

	function saveHits($link)
	{
		$this->load->library('user_agent');

		$params['id'] =  "";
		$params['ip'] =  $this->input->ip_address();
		$params['link_id'] =  $link;
		$params['browser'] =  $this->agent->browser();
		$params['platform'] =  $this->agent->platform();
		$params['is_mobile'] =  $this->agent->is_mobile();
		$params['referrer'] =  $this->agent->referrer();
		$params['created'] =  date("Y-m-d H:i:sa");
		$this->db->insert('tmp_link_hits', $params);
	}

	function sendWA($kode = null, $link = null, $ip = null)
	{
		$kalimat = "Seseorang dengan alamat IP " . $ip . " baru saja mengakses link dengan kode *" . $kode . "*\n \nAmati link tersebut " . $link;

		$api_key   = '950b055ac2ac3c32f7f8ea28a5aa3828bc596270'; // API KEY Anda
		$id_device = '7654'; // ID DEVICE yang di SCAN (Sebagai pengirim)
		$url   = 'https://api.watsap.id/send-message'; // URL API
		$no_hp = '081231390340'; // No.HP yang dikirim (No.HP Penerima)
		$pesan = $kalimat; // Pesan yang dikirim

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
		curl_setopt($curl, CURLOPT_TIMEOUT, 0); // batas waktu response
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_POST, 1);

		$data_post = [
			'id_device' => $id_device,
			'api-key' => $api_key,
			'no_hp'   => $no_hp,
			'pesan'   => $pesan
		];
		curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data_post));
		curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		$response = curl_exec($curl);
		curl_close($curl);

		$data = json_decode($response);
		if ($data->kode == 200) {
			// $this->ci->session->set_flashdata('success', 'Pesan Terkirim');
			// redirect($redirect);
		} else {
			$this->ci->session->set_flashdata('warning', $data->message);
			// redirect($redirect);
		}
	}
}
