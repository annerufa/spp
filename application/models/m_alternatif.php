<?php 

class M_alternatif extends CI_Model{
	function tampil_data(){
		return $this->db->get('alternatif');
	}
	public function jumlah_lahan(){
		$query = $this->db->query("SELECT * FROM alternatif");
		return $query->num_rows();
	}
}
