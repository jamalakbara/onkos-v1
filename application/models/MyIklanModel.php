<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyIklanModel extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	public function getData(){
		$query = $this->db->get('kosan')->result_array();
		return $query;
	}

	public function deleteData($id){
		return $this->db->delete('kosan', array('idKosan' => $id));
	}

	public function editData($id,$data){
		return $this->db->update('kosan', $data,array('idKosan' => $id));
	}

	public function showKos($id){
		$this->db->where('idIbuKos',$id);
		$query = $this->db->get('kosan')->result_array();
		return $query;
	}

	public function showAkun($id){
		$this->db->where('noId',$id);
		$query = $this->db->get('akun')->result_array();
		return $query;
	}
}
