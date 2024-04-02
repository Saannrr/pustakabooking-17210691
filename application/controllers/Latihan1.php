<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan1 extends CI_Controller
{

    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('latihan1Model');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->latihan1Model->jumlah($n1, $n2);
        $this->load->view('view1', $data);
    }
}
