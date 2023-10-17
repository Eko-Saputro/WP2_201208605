<?php
class Matakuliah extends CI_Controller{
  public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
  public function cetak()
    {
      $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'trim|required|numeric|min_length[3]',
      array('required' => '%s Wajib diisi.',
            'numeric' => '%s Wajib diisi angka.',
            'min_length' => '%s 3 Karakter.'));
      $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|alpha',
      array('required' => '%s Wajib diisi.',
            'alpha' => '%s Wajib diisi huruf.'
            ));
      $this->form_validation->set_rules('sks', 'SKS', 'required',
      array('required' => '%s Wajib diisi.'
            ));

      if ($this->form_validation->run() == FALSE)
                      {
                              $this->load->view('view-form-matakuliah');
                      }
                      else
                      {
                        $data = [
                                  'kode' => $this->input->post('kode'),
                                  'nama' => $this->input->post('nama'),
                                  'sks' => $this->input->post('sks')
                                          ];

                          $this->load->view('view-data-matakuliah', $data);
                      }





    /*  $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required');
      $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required');
      $this->form_validation->set_rules('sks', 'SKS', 'required');

      if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('view-form-matakuliah');
                }
                else
                {
                  $data = [
                            'kode' => $this->input->post('kode'),
                            'nama' => $this->input->post('nama'),
                            'sks' => $this->input->post('sks')
                                    ];

                    $this->load->view('view-data-matakuliah', $data);
                }*/


}
}
