<?php
/**
*
*/
class Admin_model extends CI_Model {
	
	public function login($email, $pwd) {
		
		if (!empty($email) ||!empty($pwd) ) {
			$this->db->select('*');
			$this->db->from('admins');
			$this->db->where('username', $email);
			$this->db->where('password', $pwd);
			$query = $this->db->get();
			if ($query->num_rows() > 0) {
				return $query->result_array();
			} else {
				return false;
			}
		}
	}
	public function add_category($insert_data) {
		if (!empty($insert_data)) {
			$this->db->insert('tbl_category', $insert_data);
		}
	}
	public function view_category() {
		$result = $this->db->get('tbl_category');
		return $result->result_array();
	}
	public function delete_category($category_id) {
		if (!empty($category_id)) {
			$this->db->delete('tbl_category', array('cat_id' => $category_id));
		}
	}
	public function edit_category($category_id) {
		if (!empty($category_id)) {
			$this->db->select('*');
			$this->db->from('tbl_category');
			$this->db->where('cat_id', $category_id);
			$query = $this->db->get();
			return $query->row_array();
		}
	}


	public function add_event($insert_data) {
		if (!empty($insert_data)) {
			$this->db->insert('tbl_events', $insert_data);
		}
	}
	public function view_event() {
		$result = $this->db->get('tbl_events');
		return $result->result_array();
	}
	public function delete_event($event_id) {
		if (!empty($event_id)) {
			$this->db->delete('tbl_events', array('event_id' => $event_id));
		}
	}
	public function edit_event($event_id) {
		if (!empty($event_id)) {
			$this->db->select('*');
			$this->db->from('tbl_events');
			$this->db->where('event_id', $event_id);
			$query = $this->db->get();
			return $query->row_array();
		}
	}
	public function update_event($id, $insert_data) {
		if (!empty($id) && !empty($insert_data) ) {
			$this->db->where('event_id', $id);
			$this->db->update('tbl_events', $insert_data);
		}
	}

	public function edit_product($product_id) {
		if (!empty($product_id)) {
			$this->db->select('*');
			$this->db->from('tbl_product');
			$this->db->where('product_id', $product_id);
			$query = $this->db->get();
			return $query->row_array();
		}
	}
	public function edit_product_renovation($product_id) {
		if (!empty($product_id)) {
			$this->db->select('*');
			$this->db->from('tbl_product_renovation');
			$this->db->where('renovation_id', $product_id);
			$query = $this->db->get();
			return $query->row_array();
		}
	}
	public function update_category($id, $insert_data) {
		if (!empty($id) && !empty($insert_data) ) {
			$this->db->where('cat_id', $id);
			$this->db->update('tbl_category', $insert_data);
		}
	}
	public function add_product($data_pro)
	{
		$check_existed = $this->edit_product($data_pro['product_id']);
		if(!empty($check_existed)) {
			$this->db->where('id', $check_existed['id']);
			$this->db->update('tbl_product', $data_pro);
			return  $data_pro['product_id'];
		}
		$this->db->insert('tbl_product', $data_pro);
		return  $data_pro['product_id'];
		
	}

	public function add_product_code($product_id, $product_code) {
		if (!empty($product_id) && !empty($product_code) ) {
			$this->db->set('product_code', $product_code);
			$this->db->where('product_id', $product_id);
			$this->db->update('tbl_product'); 
		}
	}

	public function add_product_renovation($data_renovation)
	{
		if (!empty($data_renovation)) {
			$check_existed = $this->edit_product_renovation($data_renovation['renovation_id']);
			if(!empty($check_existed)) {
				$this->db->where('id', $check_existed['id']);
				$this->db->update('tbl_product_renovation', $data_renovation); 
			}else{
				$this->db->insert('tbl_product_renovation', $data_renovation);					
			}

			
		}
	}

	public function view_product()
	{
		$query=$this->db->get('tbl_product');
		return $query->result_array();
	}

	public function delete_product($id) {
		if (!empty($id)) {
			$this->db->delete('tbl_product', array('product_id' => $id));
		}
	}


	public function add_setting($data)
	{
		if (!empty($data)) {
			$this->db->insert('site_setting', $data);
		}
	}


	public function get_settings()
	{
		$query=$this->db->get('site_setting');
		return $query->result_array();
	}
	public function view_contact()
	{
		$query=$this->db->get('tbl_contact');
		return $query->result_array();
	}

	public function get_id_setting($id)
	{
		if (!empty($id)) 
		{
			$query=$this->db->get_where('site_setting', array('id' => $id));
			return $query->result_array();
		}
	}

	public function update_setting($data,$id)
	{
		if (!empty($data) && !empty($id)) {
			$this->db->where('id', $id);
			$this->db->update('site_setting', $data);
		}
	}

	public function delete_setting($id)
	{
		if (!empty($id)) 
		{
			$this->db->delete('site_setting', array('id' => $id));
		}
	}

	public function get_site_settings()
	{
		$query=$this->db->get('site_setting');
			return $query->row_array();
		
	}
}
?>