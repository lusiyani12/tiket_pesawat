<?php
class Tiket extends CI_controller{
    function __construct() {
        parent ::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');
    }
    function index() {
        $data['penumpang'] =$this->m_data->tampil_data()->result();
        $this->load->view('tampil_data', $data);
    }
    function tambah() {
        $this->load->view('input_data');
    }
    function tambah_aksi() {
        $nama = $this->input->post('nama');
        $pesawat = $this->input->post('pesawat');
        $kelas = $this->input->post('kelas');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');

    if ($pesawat =='Garuda' && $kelas == 'Eksekutif') {
        $harga = 3500000;
    }elseif ($pesawat =='Garuda' && $kelas == 'Bisnis') {
        $harga = 2500000;
    }elseif ($pesawat =='Garuda' && $kelas == 'Ekonomi') {
        $harga = 1000000;
    }elseif ($pesawat =='Airlane' && $kelas == 'Eksekutif') {
            $harga = 2800000;
    }elseif ($pesawat =='Airlane' && $kelas == 'Bisnis') {
        $harga = 3000000;
    }elseif ($pesawat =='Airlane' && $kelas == 'Ekonomi') {
        $harga = 1500000;
    }elseif ($pesawat =='Batavia' && $kelas == 'Eksekutif') {
        $harga = 4000000;
    }elseif ($pesawat =='Batavia' && $kelas == 'Bisnis') {
        $harga = 3500000;
    }elseif ($pesawat =='Batavia' && $kelas == 'Ekonomi') {
        $harga = 2500000;
    }

    $data = array(
        'nama' => $nama,
        'pesawat' => $pesawat,
        'kelas' => $kelas,
        'harga' => $harga,
        'jumlah' => $jumlah,
    );
    $this->m_data->input_data($data, 'penumpang');
    redirect('tiket/index');
}
    function edit($id) {
        $where = array('id' => $id);
        $data['penumpang'] =$this->m_data->edit_data($where, 'penumpang')->result();
        $this->load->view('edit_data', $data);
    }
    function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $pesawat = $this->input->post('pesawat');
        $kelas = $this->input->post('kelas');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
    
    if ($pesawat =='Garuda' && $kelas == 'Eksekutif') {
        $harga = 3500000;
    }elseif ($pesawat =='Garuda' && $kelas == 'Bisnis') {
        $harga = 2500000;
    }elseif ($pesawat =='Garuda' && $kelas == 'Ekonomi') {
        $harga = 1000000;
    }elseif ($pesawat =='Airlane' && $kelas == 'Eksekutif') {
            $harga = 2800000;
    }elseif ($pesawat =='Airlane' && $kelas == 'Bisnis') {
        $harga = 3000000;
    }elseif ($pesawat =='Airlane' && $kelas == 'Ekonomi') {
        $harga = 1500000;
    }elseif ($pesawat =='Batavia' && $kelas == 'Eksekutif') {
        $harga = 4000000;
    }elseif ($pesawat =='Batavia' && $kelas == 'Bisnis') {
        $harga = 3500000;
    }elseif ($pesawat =='Batavia' && $kelas == 'Ekonomi') {
        $harga = 2500000;
    }
    $data = array(
        'nama' => $nama,
        'pesawat' => $pesawat,
        'kelas' => $kelas,
        'harga' => $harga,
        'jumlah' => $jumlah,
    );

    $where = array(
        'id' => $id
    );

    $this->m_data->update_data($where, $data, 'penumpang');
    redirect('tiket');
}

    function hapus($id) {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'penumpang');
        redirect('tiket');
    }
}
?>