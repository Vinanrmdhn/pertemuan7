<?php 
class Sepatu extends CI_Controller{
    public function index()
    {
        $this->load->view('form_sepatu.php');
    }
    public function cetak()
    {
        $nama = $this->input->post('nama',true);
        $telp = $this->input->post('telp',true);
        $merk = $this->input->post('merk',true);
        $ukuran = $this->input->post('ukuran',true);
        $data = [
            'nama' =>$nama,
            'telp' => $telp,
            'merk' => $merk,
            'ukuran' => $ukuran
        ];
        $this->load->view('data_sepatu.php', $data);
    }
}
?>