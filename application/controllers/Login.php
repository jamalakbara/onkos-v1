<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		$this->load->view('login');
	}

	public function validationLogIn(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('Username','Username','required');
		$this->form_validation->set_rules('Password','Password','required');
		if ($this->form_validation->run()) {
			$username = $this->input->post('Username');
			$password = $this->input->post('Password');

			$this->load->model('loginmodel');
			$this->loginmodel->can_login($username,$password);
			if ($query = $this->loginmodel->can_login($username,$password)) {
				foreach ($query as $d) {
					$session_data = array(
						'username' => $username,
						'logged_in' => TRUE,
						'akun' => $d['jenisAkun'],
						'id' =>$d['noId']
					);
				}
				$this->session->set_userdata($session_data);
				$akun = $this->session->userdata('akun');
				if ($akun == 'Pemilik Kos') {
					redirect('profile/tampilprofile/'.$this->session->userdata('id'));
				}elseif ($akun == 'Penyewa') {
					redirect('profile/tampilprofile/'.$this->session->userdata('id'));
				}
				
			}else{
				$this->session->set_flashdata('error', 'invalid username and password');
				redirect('login/index');
			}
		}else{
			$this->load->view('login');
		}
	}

	public function loggedInPlus(){
		if ($this->session->userdata('logged_in')) {
			redirect('addIklan/index');
		}else{
			redirect('login/index');
		}
	}

	public function loggedIn($id){
		if ($this->session->userdata('logged_in')) {
			redirect('iklan/showIklan/'.$id);
		}else{
			redirect('login/index');
		}
	}
}
