<?php
/**
 *
 */
class Coba extends CI_Controller
{

  public function index ()
  {
    // code...
    echo "Hai Selamat Datang Di WebProgramming II <br>";
    echo "Kita belajar framework CodeIgniter 3";
    $this->load->view('V_coba2');
  }
  public function biodata($nama=null, $nip=null){
    //echo "Nama : $nama<br>";
    //echo "NIP : $nip";

    $data['nama']=$nama;
    $data['nip']=$nip;
    $this->load->view('V_coba2',$data);
  }
}
