<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mediamodel extends CI_Model {

	public function mediatype(){
		return $this->db
		->select('*')
    ->get('media_type')
    ->result_array();
	}

	public function mediatypeselect($id){
		return $this->db
		->select('*')
		->where('media_type_id',$id)

    ->get('media_type')
    ->result_array();
	}

	public function medialist($id){
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
		->where('media.media_type_id',$id)
		->join('media_type','media_type.media_type_id = media.media_type_id','left')
		// ->join('department','department.department_id = staff.department_id','left')
		->get('media')
		->result_array();
	}

	public function medialistMy($id,$idmy){
		return $this->db
		->select('*')
		->where('media.media_type_id',$id)
		->where('media.staff_id',$idmy)
		->join('media_type','media_type.media_type_id = media.media_type_id','left')
		// ->join('department','department.department_id = staff.department_id','left')
		->get('media')
		->result_array();
	}



	public function medialistOne($id){
		return $this->db
		->select('*')
		->where('media.media_id',$id)
		->join('media_type','media_type.media_type_id = media.media_type_id','left')
		// ->join('department','department.department_id = staff.department_id','left')
		->get('media')
		->result_array();
	}

	public function medialistsearch($search,$id){
		return $this->db
		->select('*')
		->group_start()
		->where('media.media_type_id',$id)
		->group_end()
		->group_start()
		->like('media.media_name',$search)
		->or_like('media.media_detail',$search)
		->group_end()
		->join('media_type','media_type.media_type_id = media.media_type_id','left')
		// ->join('department','department.department_id = staff.department_id','left')
		->get('media')
		->result_array();
	}

	public function mediaInsert($input){
		$this->db->insert('media',$input);
	}

	public function mediaDelete($id){
		$this->db->where('media_id',$id)->delete('media');
	}

	public function mediaUpdate($input){
		$this->db->where('media_id', $input['media_id']);
		$this->db->update('media',$input);
	}


}
