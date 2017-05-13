<?php 

class M_kriteria extends CI_Model{
	function tampil_data(){
		return $this->db->get('kriteria');
	}
	public function jumlah_kriteria(){
		$query = $this->db->query("SELECT * FROM kriteia	");
		return $query->num_rows();
	}
}
