<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsmodel extends CI_Model {

	public function news_insert($input)
	{
		$this->db->insert('news',$input);
		return $this->db->insert_id();
	}
	public function news_edit($input){
		$this->db
		->where('news_id',$input['news_id'])
		->update('news',$input);
	}

	public function newslist(){
		return $this->db
		->select('*')
		->order_by('news_date','desc')
		// ->join('antiques_store','antiques_store.antiques_store_id = antiques.antiques_store_id','left')
		->join('staff','staff.staff_id = news.staff_id','left')
		->get('news')
		->result_array();
	}

	public function news_delete($id){
		$this->db->where('news_id',$id)->delete('news');
	}

	public function newsselect($id){
		return $this->db
		->where('news_id',$id)
		->join('staff','staff.staff_id = news.staff_id','left')
		->get('news')
		->result_array();
	}
}
