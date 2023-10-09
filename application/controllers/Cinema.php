<?php
class Cinema extends CI_Controller{
  public $harga, $total;
  public function index()
    {
        $this->load->view('view-input-cinema');
    }

    public function cetak()
    {
       

    $data= [
            'nama'=>$this->input->post('nama'),
            'judul'=>$this->input->post('judul'),
            'pukul'=>$this->input->post('pukul'),
            'tipe'=>$this->input->post('tipe'),
            'jumlah'=>$this->input->post('jumlah'),

          ];


            $this->load->view('view-output-cinema', $data);
    }
}
