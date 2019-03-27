<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Welcome_model');
		$this->load->helper('id_genrator');
		$this->load->library('session');
		$this->lang->load('english_lang', 'english');
		$this->load->library('cart');

		
	}
	public function index() {
		$param['category_id'] = !empty($_GET['category_id']) ? $_GET['category_id'] : '';
		$param['limit'] = 20;
		$param['offset'] = 0;
		$data['product'] = $this->Welcome_model->get_all_product($param);
		$data['category'] = $this->Welcome_model->get_all_category();
		$data['deal'] = $this->Welcome_model->get_all_events();	
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	}
	public function product_detail(){

		$product_id = !empty($_GET['product_id']) ? $_GET['product_id'] : '';
		$param['limit'] = 6;
		$param['offset'] = 0;
		$param['order_by'] = 'id DESC';
		$data['detail'] = $this->Welcome_model->get_product($product_id);
		$data['product'] = $this->Welcome_model->get_all_product($param);
		$data['category'] = $this->Welcome_model->get_all_category();
		$data['deal'] = $this->Welcome_model->get_all_events();	
		$this->load->view('header');
		$this->load->view('wine_detail', $data);
		$this->load->view('footer');
	}
	public function team(){
        $data = [];
        $this->load->view('header');
        $this->load->view('team', $data);
        $this->load->view('footer');
    }
    public function contact(){
        $data = [];
        $this->load->view('header');
        $this->load->view('contact', $data);
        $this->load->view('footer');
    }
    public function about(){
        $data = [];
        $this->load->view('header');
        $this->load->view('about', $data);
        $this->load->view('footer');
    }

	

}