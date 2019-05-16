<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('home/home');
	}
	public function index1()
	{
		
		// $this->load->view('template/head');
		$this->load->view('index/index');
		// $this->load->view('template/footer');
	}
	public function register()
	{
		$this->load->view('register/register');
		$this->load->view('register/script');
		$this->load->view('template/head');
		$this->load->view('template/footer');
	}
	public function detail()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header');
		$this->load->view('detail/detail');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}
	public function example()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->load->view('template/head');
		// $this->load->view('template/header');
		$this->load->view('login/login');
		// $this->load->view('template/foot');
		$this->load->view('template/footer');
	}

}
