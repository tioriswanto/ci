<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class barang extends CI_Controller {


	public function index()
	{
        $this->load->model('model_barang');
        $judul          = "daftar barang";
        $data['judul']  = $judul;
        $data['barang'] = $this->model_barang->list_barang();
        $this->load->view('list_barang', $data);
    }
    
    public function edit()
    {
       echo $this->uri->segment(2);
    }
}
