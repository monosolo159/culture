<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function checkLogin(){
		// redirect('Home/productlist');
		$input = $this->input->post();
		$query = $this->Staffmodel->login($input);
		if (empty($query))
		{
			redirect($this->agent->referrer(), 'refresh');
		} else {
			$_SESSION['STAFF_ID'] = $query[0]['staff_id'];
			$_SESSION['STAFF_NAME'] = $query[0]['staff_fname'].' '.$query[0]['staff_lname'];
			$_SESSION['STAFF_TYPE'] = $query[0]['staff_type_id'];
			redirect('Home/admin');
		}
	}
	public function logout(){
		session_destroy();
		redirect('Home/login');
	}

	public function userDelete(){
		$id = $this->uri->segment(4);
		$type = $this->uri->segment(3);
		$this->Staffmodel->userDelete($id);
		redirect('Home/user/'.$type);
	}

	public function userInsert(){
		$input = $this->input->post();
		$input['staff_reg_date'] = date("Y-m-d H:i:s");
		$query = $this->Staffmodel->userselect($input['staff_username']);
		if(!empty($query)){
			redirect('Home/userInsert/error');
		}else{
			if($input['staff_password_confirm']!=$input['staff_password']){
				redirect('Home/userInsert/errorPassword');
			}else{
				unset($input['staff_password_confirm']);
				$this->Staffmodel->userInsert($input);
				redirect('Home/user/'.$input['staff_type_id']);
			}


		}

	}

	public function userUpdate(){
		$input = $this->input->post();
		$this->Staffmodel->userUpdate($input);
		// print_r($input);
		redirect('Home/user/'.$input['staff_type_id']);
	}


}
