<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
			// $this->load->view('navbar');
		    $this->load->model('Perusahaan_Model');
			$data['perusahaan_array']=$this->Perusahaan_Model->getPerusahaan();
			$this->load->view('perusahaan',$data);
			// $this->load->view('footer');

	}
}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */

 ?>