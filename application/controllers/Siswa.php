<?php
class Siswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-siswa');
    }
        
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'tempat' => $this->input->post('tempat'),
            'tanggal' => $this->input->post('tanggal'),
            'alamat' => $this->input->post('alamat'),
            'jekel' => $this->input->post('jekel'),
            'agama' => $this->input->post('agama')
        ];

            $this->load->view('view-data-siswa', $data);
    }
}