<?php 

	defined('BASEPATH') OR exit("No direct script access allowed");

	class Pembukaan extends CI_Controller{

		function __construct(){
			parent::__construct();
			$this->load->model('M_database');
			
		}

		public function index(){	

				$data['produkTabungan']	 	= $this->M_database->select('mr_produk_kategori')->result_array();
				$data['tujuanPembukaan'] 	= $this->M_database->select('mr_tujuanpembukaan')->result_array();
				$data['jenisKelamin']		= $this->M_database->select('mr_jenis_kelamin')->result_array();

				$data['provinsi']			= $this->M_database->select('mr_provinsi')->result_array();
				$data['agama']				= $this->M_database->select('mr_agama')->result_array();
				$data['status']				= $this->M_database->select('mr_status')->result_array();
				$data['pendidikan']			= $this->M_database->select('mr_pendidikan')->result_array();
		
				$this->load->view('header');
				$this->load->view('pembukaan-rekening', $data);
				$this->load->view('footer');
			
		}

		public function getkabupaten(){
			$id_provinsi = $this->input->post('id_provinsi');
			$data = $this->M_database->select('mr_kota', array('id_provinsi' => $id_provinsi))->result_array();
			echo json_encode($data);
		}

		public function getkecamatan(){
			$id_kota = $this->input->post('id_kota');
			$data = $this->M_database->select('mr_kecamatan', array('id_kota' => $id_kota))->result_array();
			echo json_encode($data);
		}

		public function getkelurahan(){
			$id_kecamatan = $this->input->post('id_kecamatan');
			$data = $this->M_database->select('mr_kelurahan', array('id_kecamatan' => $id_kecamatan))->result_array();
			echo json_encode($data);
		}

	}
	
 ?>