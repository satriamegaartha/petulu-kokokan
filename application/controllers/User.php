<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function sejarah()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $query = "SELECT `user`.* , `sejarah`.*
                    FROM `user` JOIN `sejarah`
                      ON `user`.`id` = `sejarah`.`user_id`                                                            
            ";
        $data['sejarah'] = $this->db->query($query)->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/sejarah', $data);
        $this->load->view('templates/footer');
    }

    public function sejarahedit($id)
    {
        $data['title'] = 'Edit Data Sejarah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {

            $query = "SELECT `user`.* , `sejarah`.*
                    FROM `user` JOIN `sejarah`
                    ON `user`.`id` = `sejarah`.`user_id` 
                    WHERE `sejarah`.`id` = $id                                                           
            ";
            $data['sejarah'] = $this->db->query($query)->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/sejarahedit', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('id');
            $judul = $this->input->post('judul');
            $deskripsi = $this->input->post('deskripsi');

            // check jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/galeri/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    // hapus gambar lama 
                    $old_image = $data['sejarah']['image'];
                    // if ($old_image != 'sejarah.jpg') {
                    unlink(FCPATH . 'assets/img/galeri/' . $old_image);
                    unlink(FCPATH . 'assets/img/galeri/thumbnail/' . $old_image);
                    // }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('judul', $judul);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->where('id', $id);
            $this->db->update('sejarah');
            if ($upload_image) {
                $this->upload_image();
            }

            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect('user/sejarah');
        }
    }

    public function lokasi()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $query = "SELECT `user`.* , `lokasi`.*
                    FROM `user` JOIN `lokasi`
                      ON `user`.`id` = `lokasi`.`user_id`                                                            
            ";
        $data['lokasi'] = $this->db->query($query)->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/lokasi', $data);
        $this->load->view('templates/footer');
    }

    public function lokasiedit($id)
    {
        $data['title'] = 'Edit Data lokasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required|trim');
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');
        $this->form_validation->set_rules('desa', 'Desa', 'required|trim');
        $this->form_validation->set_rules('latitude', 'Latitude', 'required|trim');
        $this->form_validation->set_rules('longitude', 'Longitude', 'required|trim');

        if ($this->form_validation->run() == false) {

            $query = "SELECT `user`.* , `lokasi`.*
                    FROM `user` JOIN `lokasi`
                    ON `user`.`id` = `lokasi`.`user_id`                                                            
                    ";
            $data['lokasi'] = $this->db->query($query)->row_array();


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/lokasiedit', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('id');
            $provinsi = $this->input->post('provinsi');
            $kabupaten = $this->input->post('kabupaten');
            $kecamatan = $this->input->post('kecamatan');
            $desa = $this->input->post('desa');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');

            $this->db->set('provinsi', $provinsi);
            $this->db->set('kabupaten', $kabupaten);
            $this->db->set('kecamatan', $kecamatan);
            $this->db->set('desa', $desa);
            $this->db->set('latitude', $latitude);
            $this->db->set('longitude', $longitude);
            $this->db->where('id', $id);
            $this->db->update('lokasi');

            $this->session->set_flashdata('success', 'Data berhasil diubah');
            redirect('user/lokasi');
        }
    }

    public function upload_image()
    {
        $config['upload_path'] = './assets/img/galeri/thumbnail/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan        

        $this->upload->initialize($config);

        if (!empty($_FILES['image']['name'])) {

            if ($this->upload->do_upload('image')) {
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/galeri/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                // $config['width'] = 350;
                // $config['height'] = 350;
                $config['width'] = 384;
                $config['height'] = 256;
                $config['new_image'] = './assets/img/galeri/thumbnail/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
            }
        } else {
            //            
        }
    }
}
