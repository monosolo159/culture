<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function LoadPage($value){
		if(isset($value['Result'])){
			$data = $value['Result'];
			$this->load->view('front/template/header', $data);
		}else{
			$this->load->view('front/template/header');
		}
		$this->load->view($value['View']);
		$this->load->view('front/template/sidebar');

		$this->load->view('front/template/footer');
	}

	public function index(){
		// $menu = $this->Mediamodel->mediatype();
		// $value = array(
		// 	'Result' => array(
		// 		// 'menu' => $menu
		// 	),
		// 	'View' => 'front/body'
		// );
		// $this->LoadPage($value);
		redirect('Front/antiques/');
	}

	public function antiques(){
		if($this->input->post()){
			$antiques_list = $this->Antiquesmodel->antiqueslist_search($this->input->post());
		}else{
			$antiques_list = $this->Antiquesmodel->antiqueslist();
		}

		$value = array(
			'Result' => array(
				'antiques_list' => $antiques_list,
				// 'usertype' => $usertype
			),
			'View' => 'front/antiques_list'
		);
		$this->LoadPage($value);
	}

	public function antiques_detail(){
		$id = $this->uri->segment(3);
		$antiques_one = $this->Antiquesmodel->antiques_one($id);
		$mediatypeall = $this->Mediamodel->mediatype();
		$medialist = $this->Mediamodel->medialist($id);

		$value = array(
			'Result' => array(
				'antiques_one' => $antiques_one,
				'mediatypeall' => $mediatypeall,
				'medialist' => $medialist
			),
			'View' => 'front/antiques_detail'
		);
		$this->LoadPage($value);
	}


	public function media(){

		// $checksearch = empty($this->uri->segment(3));
		// print_r($checksearch);
		if($this->uri->segment(3)!=0){
			$id = $this->uri->segment(3);
			$medialist = $this->Mediamodel->medialist($id);
			$mediatype = $this->Mediamodel->mediatypeselect($id);

		}else{
			$input = $this->input->post();
			// print_r($input);
			$medialist = $this->Mediamodel->medialistsearch($input['search'],$input['media_type_id']);
			$mediatype = $this->Mediamodel->mediatypeselect($input['media_type_id']);

		}
		// $id = $this->uri->segment(3);
		// $medialist = $this->Staffmodel->medialist($id);
		$mediatypeall = $this->Mediamodel->mediatype();
		// $mediatype = $this->Staffmodel->mediatypeselect($id);
		$value = array(
			'Result' => array(
				'medialist' => $medialist,
				'mediatype' => $mediatype,
				'mediatypeall' => $mediatypeall
			),
			'View' => 'front/media_list'
		);
		$this->LoadPage($value);
	}

	public function profileEdit(){
		$id = $this->uri->segment(3);
		$user = $this->Staffmodel->userselect_id($id);
		$usertype = $this->Staffmodel->usertype();
		$userDepartment = $this->Staffmodel->userDepartment();

		$value = array(
			'Result' => array(
				'user' => $user,
				'userDepartment' => $userDepartment,
				'usertype' => $usertype
			),
			'View' => 'front/member_edit'
		);
		$this->LoadPage($value);
	}

	public function profilePassword(){
		$id = $this->uri->segment(3);
		$user = $this->Staffmodel->userselect_id($id);
		// $usertype = $this->Staffmodel->usertype();
		// $userDepartment = $this->Staffmodel->userDepartment();

		$value = array(
			'Result' => array(
				'user' => $user,
				// 'userDepartment' => $userDepartment,
				// 'usertype' => $usertype
			),
			'View' => 'front/member_password'
		);
		$this->LoadPage($value);
	}

	public function myMedia(){
		$myid = $_SESSION['MEMBER_ID'];
		$id = $this->uri->segment(3);
		$medialist = $this->Mediamodel->medialistMy($id,$myid);
		$mediatype = $this->Mediamodel->mediatypeselect($id);
		// $id = $this->uri->segment(3);
		// $medialist = $this->Staffmodel->medialist($id);
		$mediatypeall = $this->Mediamodel->mediatype();
		// $mediatype = $this->Staffmodel->mediatypeselect($id);
		$value = array(
			'Result' => array(
				'medialist' => $medialist,
				'mediatype' => $mediatype,
				'mediatypeall' => $mediatypeall
			),
			'View' => 'front/media_list_my'
		);
		$this->LoadPage($value);
	}


	public function mediaInsert(){
		$mediatypeall = $this->Mediamodel->mediatype();
		$value = array(
			'Result' => array(
				'mediatypeall' => $mediatypeall
			),
			'View' => 'front/media_insert'
		);
		$this->LoadPage($value);
	}

	public function mediaEdit(){
		$id = $this->uri->segment(3);
		$media = $this->Mediamodel->medialistOne($id);
		$mediatypeall = $this->Mediamodel->mediatype();

		$value = array(
			'Result' => array(
				'media' => $media,
				'mediatypeall' => $mediatypeall

			),
			'View' => 'front/media_edit'
		);
		$this->LoadPage($value);
	}

	public function about(){
		// $mediatypeall = $this->Mediamodel->mediatype();
		$value = array(
			'Result' => array(
				// 'mediatypeall' => $mediatypeall
			),
			'View' => 'front/about'
		);
		$this->LoadPage($value);
	}

}
