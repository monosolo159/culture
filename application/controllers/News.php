<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function news_insert($value)
	{
		$input = $this->input->post();

		$input['news_date'] = date("Y-m-d H:i:s");
		$input['staff_id'] = $_SESSION['STAFF_ID'];

		$id = $this->Newsmodel->news_insert($input);

		$this->load->library('image_lib');

		$target_path = "./assets/images/news/";

		$ext = pathinfo($_FILES["imgfiles"]["name"],PATHINFO_EXTENSION);

		$target_path = $target_path . basename( $id.'.'.$ext);

		if (move_uploaded_file($_FILES['imgfiles']['tmp_name'], $target_path)) {
			$config['image_library'] = 'gd2';
			$config['source_image'] = $target_path;
			$config['create_thumb'] = true;
			$config['maintain_ratio'] = TRUE;
			$config['width']     = 500;
			$config['height']   = 500;
			$config['new_image']   = $target_path;
			$this->image_lib->clear();
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
		}

		$value = array(
			'news_id' => $id,
			'news_pic_cover' => basename( $id.'.'.$ext),
			// 'product_thumbnail' => basename( $id.'_thumb.'.$ext),
		);

		$this->Newsmodel->news_edit($value);

		redirect('Home/news/success');
	}


	public function news_delete(){
		$id = $this->uri->segment(3);
		$this->Newsmodel->news_delete($id);
		redirect('Home/news');
	}


}
