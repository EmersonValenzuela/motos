<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	  public function category_list($sortBy='id_category', $sort='ASC', $limit='', $start='', $keyword=''){

		$this->db->select('*');
		$this->db->from('categorias'); 
		if($limit!=''){
		  $this->db->limit($limit, $start);
		}
		if($keyword!=''){
		  $this->db->like('name_category',stripslashes($keyword));
		}
		
		$this->db->order_by($sortBy,$sort);
		return $this->db->get()->result();
	  }

	  public function brand_list($sortBy='id_marca', $sort='ASC', $limit='', $start='', $keyword=''){

		$this->db->select('*');
		$this->db->from('marcas'); 
		if($limit!=''){
		  $this->db->limit($limit, $start);
		}
		if($keyword!=''){
		  $this->db->like('name_marca',stripslashes($keyword));
		}
		
		$this->db->order_by($sortBy,$sort);
		return $this->db->get()->result();
	  }
	  public function _set_view($id){
		$this->db->set('total_views', 'total_views+1', FALSE);
		$this->db->where('id', $id);
		$this->db->update('tbl_product');
	  }
}
?>