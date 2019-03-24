<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditIklan extends CI_Controller {

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
		$this->load->model('myiklanmodel');
	}

	public function showData($id){
		$this->db->where('idKosan',$id);
		$data = $this->myiklanmodel->getData();

		$this->load->view('editiklan',array('data' => $data));
	}

	public function editData($id){
		$nama = $_POST["Nama"];
		$harga = $_POST["Harga"];
		$deskripsi = $_POST["Deskripsi"];
		$fasKmr = $_POST["fasKmr"];
		$alamat = $_POST["Alamat"];
		$luas = $_POST['Luas'];
		$fasUmum = $_POST['fasUmum'];
		$parkir = $_POST['Parkir'];
		$data = array(
		       'namaKosan' => $nama,
		       'harga' => $harga,
		       'deskripsi' => $deskripsi,
		       'fasKamar' => $fasKmr,
		       'luasKamar' => $luas,
		       'fasUmum' => $fasUmum,
		       'fasUmum' => $fasUmum,
		       'parkir' => $parkir,
		       'alamatKosan' => $alamat
		);
		$res = $this->myiklanmodel->editData($id,$data);
		if ($res) {
			redirect('myiklan/tampilkos/'.$this->session->userdata('id'));
		}
	}
}
