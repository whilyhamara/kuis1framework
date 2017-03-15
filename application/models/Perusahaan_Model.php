<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getPerusahaan()
		{
			$query = $this->db->query("Select * from perusahaan");
			return $query->result_array();
		}

		public function getProduk($id)
		{
			$query = $this->db->query("Select perusahaan.namaPerusahaan, produk.namaProduk, produk.tanggalProduksi, produk.tanggalKadaluarsa FROM perusahaan INNER JOIN produk ON perusahaan.id = produk.fk_perusahaan where perusahaan.id='$id' ");
			return $query->result_array();
					}
		public function getLokasi($id)
					{
						$query = $this->db->query("Select lokasi.namaLokasi, perusahaan.namaPerusahaan, lokasi.tanggalBerdiri FROM perusahaan INNER JOIN lokasi ON lokasi. fk_perusahaan = perusahaan.id where perusahaan.id='$id' ");
			return $query->result_array();
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>