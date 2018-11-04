<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antiquesmodel extends CI_Model {


	public function antiques_insert($input){
		$this->db->insert('antiques',$input);
	}
	public function antiques_edit($input){
		$this->db->where('antiques_id',$input['antiques_id'])->update('antiques',$input);
	}



	public function antiqueslist(){
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
		// ->where('media.media_type_id',$id)
		->order_by('antiques_date','desc')
		->join('antiques_store','antiques_store.antiques_store_id = antiques.antiques_store_id','left')
		->join('staff','staff.staff_id = antiques.staff_id','left')
		->get('antiques')
		->result_array();
	}

	public function antiqueslist_search($input){
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
		// ->where('media.media_type_id',$id)
		->like('antiques_title',$input['search'])
		->or_like('antiques_code',$input['search'])
		->or_like('antiques_detail',$input['search'])
		->or_like('antiques_type',$input['search'])
		->or_like('antiques_material',$input['search'])
		->or_like('antiques_size',$input['search'])
		->or_like('antiques_quality',$input['search'])
		->or_like('antiques_source_history',$input['search'])
		->or_like('antiques_store_name',$input['search'])
		->or_like('antiques_note',$input['search'])
		->or_like('staff_fullname',$input['search'])
		->order_by('antiques_date','desc')
		->join('antiques_store','antiques_store.antiques_store_id = antiques.antiques_store_id','left')
		->join('staff','staff.staff_id = antiques.staff_id','left')
		->get('antiques')
		->result_array();
	}


	public function antiques_one($id){
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
		// ->where('media.media_type_id',$id)
		->where('antiques_id',$id)
		->join('antiques_store','antiques_store.antiques_store_id = antiques.antiques_store_id','left')
		->join('staff','staff.staff_id = antiques.staff_id','left')
		->get('antiques')
		->result_array();
	}


	public function antiques_delete($id){
		$this->db->where('antiques_id',$id)->delete('antiques');
	}


	public function antiques_store_list(){
		return $this->db
		->select('*')
    ->get('antiques_store')
    ->result_array();
	}

	public function antiques_store_select($id){
		return $this->db
		->select('*')
		->where('antiques_store_id',$id)
    ->get('antiques_store')
    ->result_array();
	}


	public function antiques_store_insert($input){
		$this->db->insert('antiques_store',$input);
	}

	public function antiques_store_delete($id){
		$this->db->where('antiques_store_id',$id)->delete('antiques_store');
	}
	public function antiques_store_edit($input){
		$this->db->where('antiques_store_id',$input['antiques_store_id'])->update('antiques_store',$input);
	}





















	public function mediatypeselect($id){
		return $this->db
		->select('*')
		->where('media_type_id',$id)

    ->get('media_type')
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





	public function mediaUpdate($input){
		$this->db->where('media_id', $input['media_id']);
		$this->db->update('media',$input);
	}


}
