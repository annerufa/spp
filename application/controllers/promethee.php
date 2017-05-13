<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class promethee extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_alternatif');
	}
 
	function index(){
		$data['alternatif'] = $this->m_alternatif->tampil_data()->result();
		$this->load->view('alternatif',$data);
	}
 
	public function tambah_lahan(){
		$this->load->view('form_tambah_lahan');
	}

	public function pilih_lahan(){
		$data['jml'] = $this->m_alternatif->jumlah_lahan();
		$this->load->view('form_rekomendasi',$data);
	}

}
