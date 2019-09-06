<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Master_model extends CI_Model {


    public function user() {
		$q = $this->db->query("SELECT * FROM mst_user 
									LEFT JOIN mst_jabatan ON mst_user.id_jabatan = mst_jabatan.id_jabatan 
									 ORDER BY id_user DESC");
		return $q;
    }
    

	public function jabatan() {
		$q = $this->db->query("SELECT * FROM mst_jabatan  ORDER BY nama_jabatan ASC");
		return $q;
	}
}