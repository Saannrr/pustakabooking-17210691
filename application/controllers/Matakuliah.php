<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
            'required' => 'Kode Matakuliah harus diisi!',
            'min_length' => 'Kode terlalu pendek!'
        ]);

        $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
            'required' => 'Nama matakuliah harus diisi!',
            'min_length' => 'Nama terlalu pendek!'
        ]);

        $this->form_validation->set_rules('sks[]', 'SKS', 'required', [
            'required' => 'SKS harus dipilih!'
        ]);

        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status MTK harus dipilih!']);

        if ($this->form_validation->run() == false) {
            $this->load->view('form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks'),
                'status' => $this->input->post('status')
            ];
            $this->load->view('data-matakuliah', $data);
        }
    }
}
