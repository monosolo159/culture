<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactmodel extends CI_Model {


	public function contact_list(){
		return $this->db
		->select('*')
		->order_by('contact_date','desc')
		->get('contact')
		->result_array();
	}


	public function contact_delete($id){
		$this->db->where('contact_id',$id)->delete('contact');
	}


	public function contact_insert($input){
		$this->db->insert('contact',$input);
	}


}
