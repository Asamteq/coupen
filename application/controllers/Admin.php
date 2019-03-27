<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('id_genrator');
		$this->load->model('admin_model');
	}
	public function index($page = 'index') {
		if ($this->session->userdata('user')) {
			if (!file_exists(APPPATH . 'views/admin/pages/' . $page . '.php')) {
				show_404();
			}
			if ($page == 'index') {
				$data['currentPage'] = 'index';
			}
			$data['title'] = ucfirst($page);
			$this->load->model('admin_model');

			if ($page=='view_category') {
				$data['view_category'] = $this->admin_model->view_category();
			}elseif ($page=='addpost') {
				// 
				$data['view_category'] = $this->admin_model->view_category();
				$data['view_user_group'] = $this->admin_model->view_user_group();
				$data['view_group'] = $this->admin_model->view_group();

			}elseif ($page=='view_posts') {
				$data['view_post'] = $this->admin_model->view_post();

			}elseif ($page=='dashboard') {
	
			}
			elseif ($page=='view_contact') {
				$data['view_contact'] = $this->admin_model->view_contact();
			}elseif($page=='view_setting')
			{
				$data['site_setting'] = $this->admin_model->get_settings();
			}
			$this->load->view('admin/headerfooter/header', $data);
			$this->load->view('admin/pages/' . $page, $data);
			$this->load->view('admin/headerfooter/footer');

		} else {
			redirect('Admin/login');
		}

	}
	public function user_login() {

		$email = $this->input->post('username');
		$pwd = md5($this->input->post('password'));
		$v = $this->admin_model->login($email, $pwd);
		$userdata = $v[0];
		$userdata['pwd'] = $pwd;
		if ($v == false) {
			echo "<script> alert('Your Email and Password is not Correct..!!')</script>";
			$this->load->view('admin/pages/login');
		}else {
			
			$this->session->set_userdata('user', $userdata);
			$this->load->view('admin/headerfooter/header');
			$this->load->view('admin/pages/index' );
			$this->load->view('admin/headerfooter/footer');
		}

	}
	public function logout() {
		
		$this->session->sess_destroy();
		redirect('Admin/login' ,'refresh');


		$this->load->view('pages/login' );

	}
	public function login() {
		$this->load->view('admin/pages/login');
	}
	public function category() {
		if ($this->session->userdata('user')) {
            // $data1['site_setting']=$this->admin_model->get_site_settings();
			$category_id = $this->uri->segment(3);
			$data['edit_category'] = $this->admin_model->edit_category($category_id);
			$data['view_category'] = $this->admin_model->view_category();

			$data['edit_id'] = $category_id;
			$this->load->view('admin/headerfooter/header');
			$this->load->view('admin/pages/category', $data);
			$this->load->view('admin/headerfooter/footer');
		} else {
			redirect('Admin/login');
		}
	}

	

	public function add_category() {
		if ($this->session->userdata('user')) {

			$id = $this->input->post('category_id');
			$category_id=$id;
			if (empty($category_id)) 
			{
			$category_id = genUuid() . time();
			}
			$insert_data = array(
				'cat_id' => $category_id,
				'cat_name' => $this->input->post('category')
			);
			if (!empty($id)) 
			{
				$this->admin_model->update_category($id, $insert_data);
			} 
			else 
			{
				$this->admin_model->add_category($insert_data);
			}
			redirect('Admin/category');
		} 
		else 
		{
			redirect('Admin/login');
		}
	}
	

	public function delete_category($category_id) {
		$this->admin_model->delete_category($category_id);
		redirect('Admin/category');
	}

	public function events() {
		if ($this->session->userdata('user')) {
            // $data1['site_setting']=$this->admin_model->get_site_settings();
			$event_id = $this->uri->segment(3);
			$data['edit_event'] = $this->admin_model->edit_event($event_id);
			$data['view_event'] = $this->admin_model->view_event();

			$data['event_id'] = $event_id;
			$this->load->view('admin/headerfooter/header');
			$this->load->view('admin/pages/events', $data);
			$this->load->view('admin/headerfooter/footer');
		} else {
			redirect('Admin/login');
		}
	}
	public function add_event() {
		if ($this->session->userdata('user')) {

			$id = $this->input->post('event_id');
			$event_id=$id;
			if (empty($event_id)) 
			{
				$event_id = genUuid() . time();
			}
			$config['upload_path'] = 'assets/img/products/'; //Use relative or absolute path
	        $config['allowed_types'] = 'gif|jpg|JPG|png'; 
	        $config['encrypt_name'] = TRUE;
	        $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended

	        //Initialize
	        $file_name = '';
	        if(!empty($_FILES['userfile']['name'])) {
	        	$this->upload->initialize($config);
			    if( ! $this->upload->do_upload("userfile")){
			        echo $this->upload->display_errors();
	            }
	            $file_name = $this->upload->file_name;	
	        }

			$insert_data = array(
				'event_id' => $event_id,
				'description' => $this->input->post('description'),
				'name' => $this->input->post('name')
			);
			if(!empty($file_name)) {
				$insert_data['image'] = $file_name;
			}
			if (!empty($id)) 
			{
				$this->admin_model->update_event($id, $insert_data);
			} 
			else 
			{
				$this->admin_model->add_event($insert_data);
			}
			redirect('Admin/events');
		} 
		else 
		{
			redirect('Admin/login');
		}
	}
	public function delete_event($event_id) {
		$this->admin_model->delete_event($event_id);
		redirect('Admin/events');
	}

	public function product()
	{		
		$product_id = $this->uri->segment(3);
		$data = [];
		
		if(!empty($product_id)) {
			$data['edit_post'] = $this->admin_model->edit_product($product_id);
			$data['post_id'] = $product_id;	
		}
		$data['categories'] = $this->admin_model->view_category();
		$this->load->view('admin/headerfooter/header');
		$this->load->view('admin/pages/addPost', $data);
		$this->load->view('admin/headerfooter/footer');
	
	}

	public function add_product(){
		$product_id = $this->input->post('product_id');
		if (empty($product_id)) 
		{
			$product_id = genUuid() . time();
		}
		$config['upload_path'] = 'assets/img/products/'; //Use relative or absolute path
        $config['allowed_types'] = 'gif|jpg|JPG|png'; 
        $config['encrypt_name'] = TRUE;
        $config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended

        //Initialize
        $file_name = '';
        if(!empty($_FILES['userfile']['name'])) {
        	$this->upload->initialize($config);
        	if( ! $this->upload->do_upload("userfile")){
		        echo $this->upload->display_errors();
            }
            $file_name = $this->upload->file_name;	
        }

        $data_pro = array(
			'product_id'=>$product_id,
			'product_name'=>$this->input->post('title'),
			'product_price'=>$this->input->post('price'),
			'product_currency'=>$this->input->post('currency'),
			'product_category'=>$this->input->post('category'),
			'product_type'=>$this->input->post('type'),
			'product_description'=>$this->input->post('description')
        );
        if(!empty($file_name)) {
        	$data_pro['product_img'] = $file_name;
        }
        $last_id=$this->admin_model->add_product($data_pro);
		$category=$this->input->post('category');
		redirect('Admin/view_product');

	}

	public function view_product()
	{
		$data['view_products']=$this->admin_model->view_product();
		$this->load->view('admin/headerfooter/header');
		$this->load->view('admin/pages/view_product',$data);
		$this->load->view('admin/headerfooter/footer');
	}


	public function delete_product()
	{
		$id=$this->input->post('id');
		$this->admin_model->delete_product($id);
		redirect('Admin/view_product');
	}


	
	public function setting(){
		$id=$this->uri->segment(3);
		$data['site_setting']=$this->admin_model->get_site_settings();
		$data['settings']=$this->admin_model->get_id_setting($id);
		$this->load->view('admin/headerfooter/header',$data);
		$this->load->view('admin/pages/setting',$data);
		$this->load->view('admin/headerfooter/footer');
	}

	public function add_setting(){
		$id=$this->input->post('id');
		
		if(!empty($_FILES['userfile']['name'])) {

			$this->load->library('upload');
			$config['upload_path'] = 'assets/images/logo/';//Use relative or absolute path
			$config['allowed_types'] = 'gif|jpg|JPG|png|jpeg';
			$config['encrypt_name'] = TRUE;
			$config['overwrite'] = FALSE; //If the file exists it will be saved with a progressive number appended

			$this->upload->initialize($config);
			if (!$this->upload->do_upload("userfile")) {
				//echo the errors
				echo $this->upload->display_errors();
				exit;
			}

			$file_name = $this->upload->file_name;
		}

		if (!empty($file_name)) {
			$data = array(
				'title' =>$this->input->post('title') , 
				'email' =>$this->input->post('email') , 
				'description' =>$this->input->post('description'),
				'logo' =>$file_name 
			);	


		}else{
			$data = array(
				
				'title' =>$this->input->post('title') ,
				'email' =>$this->input->post('email') ,
				'description' =>$this->input->post('description') 
			);
		}

		if (!empty($id)) 
		{
			$this->admin_model->update_setting($data,$id);
			
		}else
		{
			$this->admin_model->add_setting($data);
		}
		redirect("Admin/index/view_setting");
	}

	public function delete_setting(){
		$id=$this->uri->segment(3);
		$this->admin_model->delete_setting($id);
		redirect('Admin/index/view_setting');


	}
}?>
