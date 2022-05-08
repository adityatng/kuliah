<?php 
    class Datamahasiswa extends CI_Controller {
        public function index() {
            $this->load->view('form-data-mahasiswa');
        }
        public function cetak(){
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'ttl' => $this->input->post('ttl'),
                'alamat' => $this->input->post('alamat'),
                'jenkel' => $this->input->post('jenkel'),
                'agama' => $this->input->post('agama')

            ];

            $this->load->view('view-data-mahasiswa', $data);
        }
    }
?>