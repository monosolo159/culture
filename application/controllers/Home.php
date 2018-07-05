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
	function convert_time($strDate){
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		return "$strDay/$strMonth/$strYear $strHour:$strMinute";;
	}

	public function login(){
		$this->load->view('back/login');
	}

	public function user(){
		$id = $this->uri->segment(3);
		$userlist = $this->Staffmodel->userlist($id);
		$usertype = $this->Staffmodel->usertypeselect($id);
		foreach ($userlist as $key => $value) {
			$userlist[$key]['staff_reg_date'] = $this->convert_time($value['staff_reg_date']);
		}
		$value = array(
			'Result' => array(
				'userlist' => $userlist,
				'usertype' => $usertype
			),
			'View' => 'back/user_list'
		);
		$this->LoadPage($value);
	}
	public function userInsert(){
		// $usertype = $this->uri->segment(3);
		//
		$usertype = $this->Staffmodel->usertype();
		$userDepartment = $this->Staffmodel->userDepartment();

		$value = array(
			'Result' => array(
				'userDepartment' => $userDepartment,
				'usertype' => $usertype
			),
			'View' => 'back/user_insert'
		);
		$this->LoadPage($value);
	}
	public function userEdit(){
		$id = $this->uri->segment(3);
		// $id_usertype = $this->uri->segment(3);
		$user = $this->Staffmodel->userselect_id($id);
		$usertype = $this->Staffmodel->usertype();
		$userDepartment = $this->Staffmodel->userDepartment();

		$value = array(
			'Result' => array(
				'user' => $user,
				'userDepartment' => $userDepartment,
				'usertype' => $usertype
			),
			'View' => 'back/user_edit'
		);
		$this->LoadPage($value);
	}

	public function media(){
		// $setting = $this->Settingmodel->getSetting();
		$value = array(
			'Result' => array(
				// 'setting' => $setting
			),
			'View' => 'back/media_list'
		);
		$this->LoadPage($value);
	}



}
