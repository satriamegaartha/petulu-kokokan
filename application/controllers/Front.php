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

	public function pengunjung()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['provinsi'] = $this->db->get('provinsi')->result_array();

		// SELECT SUM(jumlah),bulan,tahun
		// FROM `pengunjung`
		// GROUP BY tanggal
		// SELECT SUM(jumlah),bulan,tahun FROM `pengunjung` WHERE `tanggal` > '2020-01-01' AND `tanggal` < '2020-12-31' GROUP BY bulan

		$this->form_validation->set_rules('periode', 'Periode', 'required');
		$this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
		$this->form_validation->set_rules('tanggal_awal', 'Tanggal Awal', 'required');
		$this->form_validation->set_rules('tanggal_akhir', 'Tanggal Akhir', 'required');

		if ($this->form_validation->run() == false) {
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
			$this->load->view('front/pengunjung', $data);
			$this->load->view('templates_front/footer_grafik');
			$this->load->view('templates_front/footer', $data);
		} else {
			$periode = $this->input->post('periode');
			$provinsi = $this->input->post('provinsi');
			$tanggal_awal = $this->input->post('tanggal_awal');
			$tanggal_akhir = $this->input->post('tanggal_akhir');

			$data_provinsi = $this->db->get_where('provinsi', ['id' => $provinsi])->row_array();
			$data['nama_provinsi'] = $data_provinsi['nama_provinsi'];

			if ($periode == 'Harian') {
				if ($provinsi == 'All') {
					$pengunjung = $this->db->order_by('tanggal', 'ASC')->get_where('pengunjung', ['tanggal >=' => $tanggal_awal, 'tanggal <=' => $tanggal_akhir])->result_array();
				} else {
					$pengunjung = $this->db->order_by('tanggal', 'ASC')->get_where('pengunjung', ['tanggal >=' => $tanggal_awal, 'tanggal <=' => $tanggal_akhir, 'provinsi_id' => $provinsi])->result_array();
				}

				$tanggal_pengunjung = [];
				$jumlah_pengunjung = [];
				foreach ($pengunjung as $p) {
					array_push($tanggal_pengunjung, date('d M Y', strtotime($p['tanggal'])));
					array_push($jumlah_pengunjung, intval($p['jumlah']));
				}

				$data['tanggal_pengunjung'] = json_encode($tanggal_pengunjung);
				$data['jumlah_pengunjung'] = json_encode($jumlah_pengunjung);

				$data['subtitle'] = 'Periode: ' . date('d F Y', strtotime($tanggal_awal)) . ' - ' .  date('d F Y', strtotime($tanggal_akhir));
			}


			if ($periode == 'Bulanan') {
				if ($provinsi == 'All') {
					$query = "SELECT SUM(jumlah),bulan,tahun
                            FROM `pengunjung` 
                            WHERE `tanggal` >= '$tanggal_awal' AND `tanggal` <= '$tanggal_akhir' 
                            GROUP BY bulan
                            ORDER BY bulan DESC";
					$pengunjung = $this->db->query($query)->result_array();
				} else {
					$query = "SELECT SUM(jumlah),bulan,tahun,provinsi_id
                            FROM `pengunjung` 
                            WHERE `tanggal` >= '$tanggal_awal' AND `tanggal` <= '$tanggal_akhir' AND `provinsi_id` = $provinsi
                            GROUP BY bulan, provinsi_id 
                            ORDER BY bulan DESC";
					$pengunjung = $this->db->query($query)->result_array();
				}
				// var_dump($pengunjung);
				// die;
				$tanggal_pengunjung = [];
				$jumlah_pengunjung = [];
				foreach ($pengunjung as $p) {
					array_push($tanggal_pengunjung, $p['bulan']);
					array_push($jumlah_pengunjung, intval($p['SUM(jumlah)']));
				}
				$data['tanggal_pengunjung'] = json_encode($tanggal_pengunjung);
				$data['jumlah_pengunjung'] = json_encode($jumlah_pengunjung);

				$data['subtitle'] = 'Periode: ' . date('d F Y', strtotime($tanggal_awal)) . ' - ' .  date('d F Y', strtotime($tanggal_akhir));
			}

			if ($periode == 'Tahunan') {
				if ($provinsi == 'All') {
					$query = "SELECT SUM(jumlah),bulan,tahun 
                            FROM `pengunjung` 
                            WHERE `tanggal` >= '$tanggal_awal' AND `tanggal` <= '$tanggal_akhir' 
                            GROUP BY tahun
                            ORDER BY tahun ASC";
					$pengunjung = $this->db->query($query)->result_array();
				} else {
					$query = "SELECT SUM(jumlah),bulan,tahun,provinsi_id
                            FROM `pengunjung` 
                            WHERE `tanggal` >= '$tanggal_awal' AND `tanggal` <= '$tanggal_akhir' AND `provinsi_id` = $provinsi
                            GROUP BY tahun, provinsi_id 
                            ORDER BY tahun ASC";
					$pengunjung = $this->db->query($query)->result_array();
				}
				// var_dump($pengunjung);
				// die;
				$tanggal_pengunjung = [];
				$jumlah_pengunjung = [];
				foreach ($pengunjung as $p) {
					array_push($tanggal_pengunjung, $p['tahun']);
					array_push($jumlah_pengunjung, intval($p['SUM(jumlah)']));
				}
				$data['tanggal_pengunjung'] = json_encode($tanggal_pengunjung);
				$data['jumlah_pengunjung'] = json_encode($jumlah_pengunjung);

				$data['subtitle'] = 'Periode: ' . date('d F Y', strtotime($tanggal_awal)) . ' - ' .  date('d F Y', strtotime($tanggal_akhir));
			}


			$data['periode'] = $periode;


			$this->load->view('templates_front/header', $data);
			$this->load->view('front/pengunjung', $data);
			$this->load->view('templates_front/footer_grafik');
			$this->load->view('templates_front/footer', $data);
		}
	}

	public function galeri()
	{

		$this->form_validation->set_rules('jenis_burung', 'jenis_burung', 'required');


		if ($this->form_validation->run() == false) {
			$data['jenis_burung'] = $this->db->get('jenis_burung')->result_array();

			$query = "SELECT `jenis_burung`.* , `galeri`.*
					FROM `jenis_burung` JOIN `galeri`
					ON `jenis_burung`.`id` = `galeri`.`jenis_burung_id`  					                  
				";
			$data['galeri'] = $this->db->query($query)->result_array();


			$this->load->view('templates_front/header', $data);
			$this->load->view('front/galeri', $data);
			$this->load->view('templates_front/footer', $data);
		} else {
			$jenis_burung = $this->input->post('jenis_burung');

			$data['jenis_burung'] = $this->db->get('jenis_burung')->result_array();

			if ($jenis_burung == 'All') {
				$query = "SELECT `jenis_burung`.* , `galeri`.*
							FROM `jenis_burung` JOIN `galeri`
							ON `jenis_burung`.`id` = `galeri`.`jenis_burung_id`  					                  
						";
				$data['galeri'] = $this->db->query($query)->result_array();
			} else {
				$query = "SELECT `jenis_burung`.* , `galeri`.*
						FROM `jenis_burung` JOIN `galeri`
						ON `jenis_burung`.`id` = `galeri`.`jenis_burung_id`  
						WHERE `galeri`.`jenis_burung_id` = $jenis_burung					                  
					";
				$data['galeri'] = $this->db->query($query)->result_array();
			}

			$data['jenis_selected'] = $jenis_burung;
			$this->load->view('templates_front/header', $data);
			$this->load->view('front/galeri', $data);
			$this->load->view('templates_front/footer', $data);
		}
	}

	public function lokasi()
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
		$this->load->view('front/lokasi', $data);
		$this->load->view('templates_front/footer_grafik');
		$this->load->view('templates_front/footer', $data);
	}
}
