<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. Selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($nilai1, $nilai2)
    {
        $this->load->model('Model_latihan1');
        // $hasil = $this->Model_Latihan1->jumlah($nilai1, $nilai2);
        // echo "Hasil Penjumlahan Dari". $nilai1 ."+". $nilai2 ."=". $hasil;

        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $this->Model_latihan1->jumlah($nilai1, $nilai2);

        $this->load->view('view-latihan', $data);
        
    }
}