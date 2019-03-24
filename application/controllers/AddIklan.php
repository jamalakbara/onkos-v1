<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddIklan extends CI_Controller {

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
		$this->load->model('addiklanmodel');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$this->load->view('tambah iklan',array('error' => ' ' ));
	}

	public function addKosan(){
		if (isset($_POST['submit'])) {
			$ID = $_POST['id'];
			$nama = $_POST["Nama"];
			$harga = $_POST["Harga"];
			$deskripsi = $_POST["Deskripsi"];
			$fasKmr = $_POST["fasKmr"];
			$alamat = $_POST["Alamat"];
			$luas = $_POST['Luas'];
			$fasUmum = $_POST['fasUmum'];
			$parkir = $_POST['Parkir'];
			$idIbuKos = $this->session->userdata('id');
			$img = $this->session->userdata('img');
			$data = array(
		        'idKosan' => $ID,
		        'namaKosan' => $nama,
		        'harga' => $harga,
		        'deskripsi' => $deskripsi,
		        'fasKamar' => $fasKmr,
		        'luasKamar' => $luas,
		        'fasUmum' => $fasUmum,
		        'fasUmum' => $fasUmum,
		        'parkir' => $parkir,
		        'idIbuKos' => $idIbuKos,
		        'alamatKosan' => $alamat,
		        'gambar' => $img
			);

			$res = $this->addiklanmodel->insertData('kosan', $data);
			if ($res) {

				redirect('myiklan/tampilkos/'.$this->session->userdata('id'));
			}else{
				echo "gagal";
			}
		}
	}

	public function aksi_upload(){
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('tambah iklan', $error);
		}else{
			$data= $this->upload->data('file_name');
			$session_data = array('img' => $data);
			$this->session->set_userdata($session_data);
			$this->load->view('tambah iklan');
		}
	}
}
