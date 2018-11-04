<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffmodel extends CI_Model {
	public function login($input)
	{
		return $this->db
		->where('staff_username',$input['staff_username'])
		->where('staff_password',$input['staff_password'])
		->get('staff')->result_array();
	}

	public function userlist($id){
		return $this->db
		->select('*')
    // ->select('*,(select count(book_page_id) from book_page where book.book_id = book_page.book_id) as book_all_page,(select count(book_read_id) from book_read where book_read.book_id = book.book_id) as book_all_read,(select sum(book_like_score) from book_like where book_like.book_id = book.book_id)/(select count(book_like_id) from book_like where book_like.book_id = book.book_id) as book_score')
    // ->like('book_name',$searchword)
    // ->or_like('book_code',$searchword)
    // ->or_like('book_detail',$searchword)
    // ->or_like('book_author',$searchword)
    // ->or_like('category_name',$searchword)
    // ->or_like('book_publisher',$searchword)
    // ->or_like('shelf_name',$searchword)
    // ->or_like('member_fname',$searchword)
    // ->or_like('member_lname',$searchword)
		->where('staff.staff_type_id',$id)

    ->join('staff_type','staff_type.staff_type_id = staff.staff_type_id','left')
    ->join('department','department.department_id = staff.department_id','left')
    ->get('staff')
    ->result_array();
	}

	public function usertype(){
		return $this->db
		->select('*')
		->order_by('staff_type_order','asc')
    ->get('staff_type')
    ->result_array();
	}

	public function usertypeselect($id){
		return $this->db
		->select('*')
		->where('staff_type_id',$id)
		->get('staff_type')
		->result_array();
	}
	public function userDelete($id){
		$this->db->where('staff_id',$id)->delete('staff');
	}

	public function userDepartment(){
		return $this->db
		->select('*')
    ->get('department')
    ->result_array();
	}

	public function userInsert($input){
		$this->db->insert('staff',$input);
	}
	public function userselect($username){
		return $this->db
		->select('*')
		->where('staff_username',$username)
		->get('staff')
		->result_array();
	}
	public function userselect_id($id){
		return $this->db
		->select('*')
		->where('staff_id',$id)
		->get('staff')
		->result_array();
	}

	public function userUpdate($input){
		$this->db->where('staff_id',$input['staff_id'])->update('staff',$input);
	}



}
