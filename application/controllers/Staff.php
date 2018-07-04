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


}
