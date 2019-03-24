<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditProfile extends CI_Controller {

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
	function __construct(){
		parent::__construct();
		$this->load->model('myprofilemodel');
	}

	public function showData($id){
		$this->db->where('username',$id);
		$data = $this->myprofilemodel->getData();

		$this->load->view('editprofile',array('data' => $data));
	}

	public function editData($id){
		$nama = $_POST["Nama"];
		$email = $_POST["Email"];
		$password = $_POST["password"];
		$idibu = $_POST["idIbu"];
		$data = array(
		       'nama' => $nama,
		       'email' => $email,
		       'password' => $password
		);
		$res = $this->myprofilemodel->editData($id,$data);
		$ros = $this->myprofilemodel->editDoto($idibu,array('namaIbuKos'=>$nama));
		if ($res) {
			redirect('profile/tampilprofile/'.$this->session->userdata('id'));
		}
	}
}
