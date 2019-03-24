<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyIklan extends CI_Controller {

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

	public function index()
	{
		$data = $this->myiklanmodel->getData();
		$this->load->view('iklansaya',array('data' => $data));
	}

	public function do_delete($id){
		$res = $this->myiklanmodel->deleteData($id);
		if ($res) {
			redirect('myiklan/tampilkos/'.$this->session->userdata('id'));
		}
	}

	public function tampilKos($id)
	{
		$data = $this->myiklanmodel->showKos($id);
		$doto = $this->myiklanmodel->showAkun($id);
		$this->load->view('iklansaya',array('data' => $data, 'doto' => $doto));
	}
}
