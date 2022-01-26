<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function get_count($table){
        return $this->db->count_all($table);
    }

    public function getIdBySlug($where,$table){

        $this->db->select('id_producto');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        $row=$query->result();

        if(!empty($row)){
            return $row[0]->id_producto;    
        }
        else{
            return '';
        }
    }

    public function getMaxId($table,$where=''){
        if($where==''){
            $this->db->select_max('id');
            $this->db->from($table);
            $query = $this->db->get();
            $row=$query->result();
            if(!empty($row)){
                return $row[0]->id;    
            }
            else{
                return '';
            }
        }
        else{
            $this->db->select_max('id');
            $this->db->from($table);
            $this->db->where($where);
            $query = $this->db->get();
            $row=$query->result();
            if(!empty($row)){
                return $row[0]->id;    
            }
            else{
                return '';
            }
        }
    }

    public function get_count_by_ids($where,$table){
        $this->db->from($table);
        $this->db->where($where);
        return $num_rows = $this->db->count_all_results();
    }


    public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    public function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    public function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        $updatedId = $this->db->get($table)->row()->id;
        return $updatedId;

    } 

    public function updateByids($data, $ids, $table){
        $this->db->where($ids);
        $this->db->update($table,$data);
        $updatedId = $this->db->get($table)->row()->id;
        return $updatedId;
    } 

    public function updateByIn($data, $ids, $table, $column='id'){
        $this->db->where_in($column, $ids);
        $this->db->update($table,$data);
        return true;
    } 

    public function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
        return true;
    }

    public function deleteByids($where,$table){
        $this->db->delete($table, $where);

        if($this->db->affected_rows()){
            return true;  
        }
        else{
            return false;
        }
    }

    public function select($table,$sort='ASC'){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id',$sort);
        $query = $this->db->get();
        $row=$query->result();  
        return $row;
    }

    public function selectWhere($table,$where,$sort='ASC',$selectByidssort_by='id'){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by($sort_by,$sort);
        $query = $this->db->get();
        $row=$query->result();  
        return $row;
    }

    public function selectByid($id,$table){

        $this->db->select('p.*');
        $this->db->select('cat.name_category');
        $this->db->select('brand.name_marca');
        $this->db->from($table);
        $this->db->join('categorias cat', 'cat.id_category = p.categoria', 'LEFT');
        $this->db->join('marcas brand', 'brand.id_marca = p.marca', 'LEFT');
        $this->db->where('id_producto', $id);
        $query = $this->db->get();
        $row=$query->result();
        if(!empty($row))
            return $row[0];
        else
            return false;
    }

    public function selectByidsIN($ids,$table, $limit='', $start='', $brands='',$order_by=''){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where_in('status', '1');
        $this->db->where_in('id', $ids);
        
        if($brands!=''){
            $ids=explode(',', $brands);
            $this->db->where_in('brand_id', $ids);
        }

        if ($limit != '' && $limit != 0) {
          $this->db->limit($limit, $start);
        }
        
        $query = $this->db->get();

        /*echo $this->db->last_query();*/

        return $row=$query->result();
    }

    function selectByidsINWhere($ids,$table, $limit='', $start=''){
        $this->db->select('*');
        $this->db->from($table);
        if($limit!=0){
          $this->db->limit($limit, $start);
        }
        $query = $this->db->get();
        
        // echo $this->db->last_query();

        return $row=$query->result();
    }

    function selectByidParam($id,$table,$param){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $row=$query->result();
        if($row)
            return $row[0]->$param;
        else
            return '';
    }

    function selectByidsParam($ids,$table,$param){
        $this->db->select();
        $this->db->from($table);
        $this->db->where($ids);
        $query = $this->db->get();
        $row=$query->result();
        if($row)
            return $row[0]->$param;
        else
            return '';
        
    }

    function selectByids($ids,$table,$sort_by='',$sort='DESC', $limit=0, $start=''){
        $this->db->select('p.*');
        $this->db->select('cat.name_category');
        $this->db->select('brand.name_marca');
        $this->db->from($table);
        $this->db->join('categorias cat', 'cat.id_category = p.categoria', 'LEFT');
        $this->db->join('marcas brand', 'brand.id_marca = p.marca', 'LEFT');
        $this->db->where($ids);
        if($sort_by!=''){
            $this->db->order_by($sort_by,$sort);
        }
        if($limit!=0){
          $this->db->limit($limit, $start);
        }
        $query = $this->db->get();
        $query = $query->result(); 

        // echo $this->db->last_query();

        return $query;
    } 

    public function check_email($email, $type='Normal', $auth_id=NULL){

        if(is_null($auth_id)){
            $sql = "SELECT * FROM `tbl_users` WHERE `user_type` LIKE '$type' AND `user_email` = '$email' LIMIT 1";
        }
        else{
            $sql = "SELECT * FROM `tbl_users` WHERE `user_type` LIKE '$type' AND (`user_email` = '$email' OR `auth_id` = '$auth_id') LIMIT 1";
        }

        $query = $this->db->query($sql);
        if($query->num_rows() == 1) {
            return $query->result();
        }else{
            return false;
        }
    }

    public function get_addresses($user_id,$is_default=false){

        if($is_default)
            $where = array('user_id' => $user_id,'is_default' => 'true');
        else
            $where = array('user_id' => $user_id);

        $this->db->select('*');
        $this->db->from('tbl_addresses');
        $this->db->where($where);
        $this->db->order_by('is_default','ASC');
        $query = $this->db->get();

        // echo $this->db->last_query();
        
        return $query->result();
    }

    public function check_cart($cart_ids){

        $this->db->select('*');
        $this->db->from('tbl_cart');
        $this->db->where_in('id', $cart_ids);
        $query = $this->db->get();
        return $row=$query->result();
    }

    public function cart_items($product_id, $user_id){

        $where = array('product_id ' => $product_id , 'user_id' => $user_id);

        $this->db->select('*');
        $this->db->from('tbl_cart');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function cart_item($cart_id){
        $where = array('id' => $cart_id);
        $this->db->select('*');
        $this->db->from('tbl_cart');
        $this->db->where($where);
        $query = $this->db->get();
        if($row=$query->result()){
            return $row[0];    
        }
        else
            return false;
        
    }

    public function cart_tmp_item($cart_id){
        $where = array('id' => $cart_id);
        $this->db->select('*');
        $this->db->from('tbl_cart_tmp');
        $this->db->where($where);
        $query = $this->db->get();
        $row=$query->result();
        if($row=$query->result()){
            return $row[0];    
        }
        else
            return false;
    }
}