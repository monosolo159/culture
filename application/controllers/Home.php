<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function LoadPage($value){
		if(isset($value['Result'])){
			$data = $value['Result'];
			$this->load->view('back/template/header', $data);
		}else{
			$this->load->view('back/template/header');
		}
		$this->load->view('back/template/sidebar');
		$this->load->view($value['View']);
		$this->load->view('back/template/footer');
	}
	public function admin(){
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'back/body'
		);
		$this->LoadPage($value);
		// print_r($_SESSION);
	}
	public function login(){
		$this->load->view('back/login');
	}

	public function user(){
		$id = $this->uri->segment(3);
		$userlist = $this->Staffmodel->userlist($id);
		$usertype = $this->Staffmodel->usertype();
		$value = array(
			'Result' => array(
				'userlist' => $userlist,
				'usertype' => $usertype
			),
			'View' => 'back/user_list'
		);
		$this->LoadPage($value);
	}

	public function media(){
		// $setting = $this->Settingmodel->getSetting();
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'back/body'
		);
		$this->LoadPage($value);
	}



}
