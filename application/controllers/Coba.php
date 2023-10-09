<?php
class Coba extends CI_Controller
{

  public function index ()
  {
    // code...
    echo "Selamat Datang di Weprograming II";
  }

  public function biodata($nama=null,$nim=null)
  {
    //echo "Nama : $nama <br>";
    //echo "NIM : $nim";
    $data['nama1']=$nama;
    $data['nim1']=$nim;
    $this->load->view('v_coba',$data);
  }
}
