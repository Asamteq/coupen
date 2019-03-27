<?php
/**
*
*/
class Welcome_model extends CI_Model {

	public function site_setting() {
		$result = $this->db->get('site_setting');
		return $result->row_array();
	}

	public function record_count_posts()
	{
		$query = $this->db->get('tbl_product');
		return $query->num_rows();
	}
	public function get_all_product($params) {

		$this->db->select('*');
		$this->db->from('tbl_product');
		if(!empty($params['category_id'])) {
			$this->db->where('category_id', $params['category_id']);	
		}
		$this->db->where('product_type', 'Top');
		$this->db->limit($params['limit'],$params['offset']);
		if(!empty($params['order_by'])) {
			$orde = explode(' ', $params['order_by']);
			$this->db->order_by($orde[0], $orde[1]);
		}
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_product($product_id) {

		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('product_id', $product_id);	
		$query = $this->db->get();
		return $query->row_array();
	}

	public function get_all_category() {

		$this->db->select('*');
		$this->db->from('tbl_category');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_all_events() {

		$this->db->select('*');
		$this->db->from('tbl_events');
		$this->db->limit(1);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	
}?>