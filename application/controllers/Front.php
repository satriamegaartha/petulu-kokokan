<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Petulu';
		$data['sejarah'] = $this->db->get('sejarah')->row_array();
		$data['lokasi'] = $this->db->get('lokasi')->row_array();
		$query = "SELECT `jenis_burung`.* , `galeri`.*
					FROM `jenis_burung` JOIN `galeri`
					ON `jenis_burung`.`id` = `galeri`.`jenis_burung_id`  
					LIMIT 8                                                          
				";
		$data['galeri'] = $this->db->query($query)->result_array();





		$periode = 'Harian';

		$query_date = date('Y-m-d');
		$tanggal_awal = date('Y-m-01', strtotime($query_date));
		$tanggal_akhir = date('Y-m-t', strtotime($query_date));

		if ($periode == 'Harian') {
			$pengunjung = $this->db->order_by('tanggal', 'ASC')->get_where('pengunjung', ['tanggal >=' => $tanggal_awal, 'tanggal <=' => $tanggal_akhir])->result_array();
			$tanggal_pengunjung = [];
			$jumlah_pengunjung = [];
			foreach ($pengunjung as $p) {
				array_push($tanggal_pengunjung, date('d M Y', strtotime($p['tanggal'])));
				array_push($jumlah_pengunjung, intval($p['jumlah']));
			}

			$data['tanggal_pengunjung'] = json_encode($tanggal_pengunjung);
			$data['jumlah_pengunjung'] = json_encode($jumlah_pengunjung);

			$data['subtitle'] = 'Periode: ' . date('d F Y', strtotime($tanggal_awal)) . ' - ' .  date('d F Y', strtotime($tanggal_akhir));
			$data['periode'] = $periode;
		}


		$this->load->view('templates_front/header', $data);
		$this->load->view('front/index', $data);
		$this->load->view('templates_front/footer_grafik');
		$this->load->view('templates_front/footer', $data);
	}
}
