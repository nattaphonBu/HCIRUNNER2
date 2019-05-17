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
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('home/home');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
		
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
		$this->load->view('template/header_user');
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
	public function AdminHome()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header');
		$this->load->view('AdminHome/AdminHome.php');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}
	public function ListActivity()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('ListActivity/ListActivity.php');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}
	public function LA2()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('ListActivity/LA2.php');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}
	public function report()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('ReportJoin/report.php');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}
	public function createActivity()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('createActivity/createActivity');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
		
	}

	public function login()
	{
		$this->load->view('template/head');
		// $this->load->view('template/header');
		$this->load->view('login/login');
		$this->load->view('login/script');
		// $this->load->view('template/foot');
		$this->load->view('template/footer');
	}

	public function payment()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('notification/payment');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
		
	}
	public function approve()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('approve/approve');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}
	public function profile_screen()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('profile/profile_screen');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
		
	}
	
	public function editprofile_screen()
	{
		
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('profile/edit_profile_screen');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
		
	}
	public function approvePayment()
	{
		// $this->load->view('home/home');
		$this->load->view('template/head');
		$this->load->view('template/header_user');
		$this->load->view('approvePayment/approvePayment');
		$this->load->view('template/foot');
		$this->load->view('template/footer');
	}
	
}
