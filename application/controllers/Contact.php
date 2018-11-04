<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function contact_insert(){
		$input = $this->input->post();
		$input['contact_date'] = date("Y-m-d H:i:s");
		$this->Contactmodel->contact_insert($input);
		redirect('Front/contact/success');
	}

	public function contact_delete(){
		$id = $this->uri->segment(3);
		$this->Contactmodel->contact_delete($id);
		redirect('Home/contact/');
	}

}
