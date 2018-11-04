<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {

	public function mediaInsert(){
		$this->load->library('image_lib');

		$input = $this->input->post();
		$mediatypeselect = $this->Mediamodel->mediatypeselect($input['media_type_id']);
		$target_path = "assets/uploads/".$mediatypeselect[0]['media_type_folder'].'/';
		$input['staff_id'] = $_SESSION['STAFF_ID'];

    // $input['riskpoint_pic_date'] = date("Y-m-d H:i:s");
    $input['media_link'] = date("YmdHis").basename( $_FILES['file']['name']);
		$input['media_insert_date'] = date("Y-m-d H:i:s");

    // $this->Riskpointmodel->insertRiskpointPic($input);
    $target_path = $target_path .  date("YmdHis").basename( $_FILES['file']['name']);
    // unlink($target_path);
		unset($input['file']);
		$this->Mediamodel->mediaInsert($input);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {

      $config['image_library'] = 'gd2';
      $config['source_image'] = $target_path;
      $config['create_thumb'] = false;
      $config['maintain_ratio'] = TRUE;
      $config['width']     = 800;
      $config['height']   = 800;
      $config['new_image']   = $target_path;

      $this->image_lib->clear();
      $this->image_lib->initialize($config);
      $this->image_lib->resize();

      echo "Upload and move success";
    } else {
      echo $target_path;
      echo "There was an error uploading the file, please try again!";
    }
		redirect('Home/media/'.$input['antiques_id']);
		// print_r($input);
	}

	public function mediaInsertMember(){
		$this->load->library('image_lib');

		$input = $this->input->post();
		$mediatypeselect = $this->Mediamodel->mediatypeselect($input['media_type_id']);
		$target_path = "assets/uploads/".$mediatypeselect[0]['media_type_folder'].'/';

		$input['staff_id'] = $_SESSION['MEMBER_ID'];

    // $input['riskpoint_pic_date'] = date("Y-m-d H:i:s");
    $input['media_link'] = date("YmdHis").basename( $_FILES['file']['name']);
		$input['media_insert_date'] = date("Y-m-d H:i:s");

    // $this->Riskpointmodel->insertRiskpointPic($input);
    $target_path = $target_path .  date("YmdHis").basename( $_FILES['file']['name']);
    // unlink($target_path);
		unset($input['file']);
		$this->Mediamodel->mediaInsert($input);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {

      $config['image_library'] = 'gd2';
      $config['source_image'] = $target_path;
      $config['create_thumb'] = false;
      $config['maintain_ratio'] = TRUE;
      $config['width']     = 800;
      $config['height']   = 800;
      $config['new_image']   = $target_path;

      $this->image_lib->clear();
      $this->image_lib->initialize($config);
      $this->image_lib->resize();

      echo "Upload and move success";
    } else {
      echo $target_path;
      echo "There was an error uploading the file, please try again!";
    }
		redirect('Front/myMedia/'.$input['media_type_id']);
	}


	public function mediaDelete(){
		$id = $this->uri->segment(4);
		$antiques_id = $this->uri->segment(3);
		$this->Mediamodel->mediaDelete($id);
		redirect('Home/media/'.$antiques_id);
	}
	public function mediaDeleteMember(){
		$id = $this->uri->segment(4);
		$type = $this->uri->segment(3);
		$this->Mediamodel->mediaDelete($id);
		redirect('Front/myMedia/'.$type);
	}

	public function mediaUpdate(){
		$this->load->library('image_lib');
		$input = $this->input->post();
		if(!empty($_FILES["file"]['name'])){
			//มี
			$mediatypeselect = $this->Mediamodel->mediatypeselect($input['media_type_id']);
			$target_path = "assets/uploads/".$mediatypeselect[0]['media_type_folder'].'/';
			$input['media_link'] = date("YmdHis").basename( $_FILES['file']['name']);
			$target_path = $target_path .  date("YmdHis").basename( $_FILES['file']['name']);
			unset($input['file']);
			$input['media_last_update'] = date("Y-m-d H:i:s");

			$this->Mediamodel->mediaUpdate($input);

	    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {

	      $config['image_library'] = 'gd2';
	      $config['source_image'] = $target_path;
	      $config['create_thumb'] = false;
	      $config['maintain_ratio'] = TRUE;
	      $config['width']     = 800;
	      $config['height']   = 800;
	      $config['new_image']   = $target_path;

	      $this->image_lib->clear();
	      $this->image_lib->initialize($config);
	      $this->image_lib->resize();

	      echo "Upload and move success";
	    } else {
	      echo $target_path;
	      echo "There was an error uploading the file, please try again!";
	    }
		}else{
			$input['media_last_update'] = date("Y-m-d H:i:s");
			$this->Mediamodel->mediaUpdate($input);

		}
		redirect('Home/media/'.$input['media_type_id']);
	}

	public function mediaUpdateMember(){
		$this->load->library('image_lib');
		$input = $this->input->post();
		if(!empty($_FILES["file"]['name'])){
			//มี
			$mediatypeselect = $this->Mediamodel->mediatypeselect($input['media_type_id']);
			$target_path = "assets/uploads/".$mediatypeselect[0]['media_type_folder'].'/';
			$input['media_link'] = date("YmdHis").basename( $_FILES['file']['name']);
			$target_path = $target_path .  date("YmdHis").basename( $_FILES['file']['name']);
			unset($input['file']);
			$input['media_last_update'] = date("Y-m-d H:i:s");

			$this->Mediamodel->mediaUpdate($input);

	    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {

	      $config['image_library'] = 'gd2';
	      $config['source_image'] = $target_path;
	      $config['create_thumb'] = false;
	      $config['maintain_ratio'] = TRUE;
	      $config['width']     = 800;
	      $config['height']   = 800;
	      $config['new_image']   = $target_path;

	      $this->image_lib->clear();
	      $this->image_lib->initialize($config);
	      $this->image_lib->resize();

	      echo "Upload and move success";
	    } else {
	      echo $target_path;
	      echo "There was an error uploading the file, please try again!";
	    }
		}else{
			$input['media_last_update'] = date("Y-m-d H:i:s");
			$this->Mediamodel->mediaUpdate($input);

		}
		redirect('Front/myMedia/'.$input['media_type_id']);
	}


}
