<?php
defined('BASEPATH') or exit('No direct script access allowed');

    class Api_model extends CI_Model
        {
            function __construct()
            {
                parent::__construct();
            }

            public function products_filter($type, $id = '', $limit = '', $start = '', $brands = '', $min = '', $max = '', $order_by = '', $size = '', $keyword = '', $user_id = 0, $category = 0)
            {
        
            switch ($type) {
                case 'latest_products': {
                    $where = array('cat.status ' => '1');
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->select('cat.category_name');
                    $this->db->select('sub_cat.sub_category_name');
                    $this->db->from('tbl_product product');
                    $this->db->join('tbl_category cat', 'cat.id = product.category_id', 'LEFT');
                    $this->db->join('tbl_sub_category sub_cat', 'sub_cat.id = product.sub_category_id', 'LEFT');
                }
                break;
        
                case 'top_rated_products': {
                    $where = array('product.total_rate >=' => $this->res_setting->min_rate, 'cat.status ' => '1');
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->select('cat.category_name');
                    $this->db->select('sub_cat.sub_category_name');
                    $this->db->from('tbl_product product');
                    $this->db->join('tbl_category cat', 'cat.id = product.category_id', 'LEFT');
                    $this->db->join('tbl_sub_category sub_cat', 'sub_cat.id = product.sub_category_id', 'LEFT');
                }
                break;
        
                case 'productList_cat_sub': {
                    $where = array('product.sub_category_id ' => $id, 'cat.status ' => '1');
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->select('cat.category_name');
                    $this->db->select('sub_cat.sub_category_name');
                    $this->db->from('tbl_product product');
                    $this->db->join('tbl_category cat', 'cat.id = product.category_id', 'LEFT');
                    $this->db->join('tbl_sub_category sub_cat', 'sub_cat.id = product.sub_category_id', 'LEFT');
                }
                break;
        
                case 'productList_cat': {
                    $where = array('product.category_id ' => $id, 'cat.status ' => '1');
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->select('cat.category_name');
                    $this->db->select('sub_cat.sub_category_name');
                    $this->db->from('tbl_product product');
                    $this->db->join('tbl_category cat', 'cat.id = product.category_id', 'LEFT');
                    $this->db->join('tbl_sub_category sub_cat', 'sub_cat.id = product.sub_category_id', 'LEFT');
                }
                break;
        
                case 'banner': {
                    $where = array();
                    $this->db->select('product_ids');
                    $this->db->from('tbl_banner');
                    $this->db->where('id', $id);
                    $res = $this->db->get()->row();
        
                    $ids = explode(',', $res->product_ids);
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->from('tbl_product product');
                    $this->db->where_in('id', $ids);
                }
                break;
        
                case 'brand': {
                    if ($id != 0) {
                    $where = array('product.brand_id ' => $id, 'brand.status ' => '1');
                    } else {
                    $where = array('brand.status ' => '1');
                    }
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->select('brand.brand_name');
                    $this->db->from('tbl_product product');
                    $this->db->join('tbl_brands brand', 'brand.id = product.brand_id', 'LEFT');
                }
                break;
        
                case 'offer': {
                    $where = array('product.offer_id ' => $id);
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->from('tbl_product product');
                }
                break;
        
                case 'today_deal': {
        
                    $pre_date = strtotime(date('d-m-Y h:i:s A', strtotime("-1 days")));
                    $curr_date = strtotime(date('d-m-Y h:i:s A'));
        
                    $where = array("product.`today_deal` >=" => 1, "product.`today_deal_date` >=" => $pre_date, "product.`today_deal_date` <=" => $curr_date);
        
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`today_deal`, product.`today_deal_date`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->select('cat.category_name');
                    $this->db->select('sub_cat.sub_category_name');
                    $this->db->from('tbl_product product');
                    $this->db->join('tbl_category cat', 'cat.id = product.category_id', 'LEFT');
                    $this->db->join('tbl_sub_category sub_cat', 'sub_cat.id = product.sub_category_id', 'LEFT');
                }
                break;
        
                case 'recent_viewed_products': {
                
                    $where = array('recent.user_id' => $user_id);
        
                    $this->db->select('recent.*');
                    $this->db->select('product.id AS `product_id`,product.`product_title`, product.`category_id`, product.`sub_category_id`, product.`brand_id`, product.`offer_id`, product.`product_slug`, product.`product_desc`, product.`featured_image`, product.`featured_image2`, product.`product_mrp`, product.`selling_price`, product.`you_save_amt`, product.`you_save_per`, product.`total_views`, product.`delivery_charge`,product.`max_unit_buy`, product.`product_size`, product.`rate_avg`, product.`total_rate`, product.`status`');
                    $this->db->from('tbl_recent_viewed recent');
                    $this->db->join('tbl_product product', 'recent.`product_id` = product.`id`', 'LEFT');
                }
                break;
        
                case 'search': {
        
                    if ($category == 0) {
                    $where = array();
                    } 
        
                    $this->db->select('p.id_producto AS `id_producto`,p.`nombre_producto`, p.`caract_producto`, p.`cilindraje_producto`, p.`motor`,p.`imagen_producto`,p.`imagen_producto2`,p.`imagen_producto3`');
                    $this->db->select('cat.name_category');
                    $this->db->select('brand.name_marca');
                    $this->db->from('productos p');
                    $this->db->join('categorias cat', 'cat.id_category = p.categoria', 'LEFT');
                    $this->db->join('marcas brand', 'brand.id_marca = p.marca', 'LEFT');
                    $this->db->where($where);
        
                    $this->db->group_start();
                    $this->db->like('p.categoria', $keyword);
                    $this->db->or_like('p.marca', $keyword);
                    $this->db->or_like('p.nombre_producto', $keyword);
                    $this->db->or_like('p.caract_producto', $keyword);
                    $this->db->or_like('p.cilindraje_producto', $keyword);
                    $this->db->or_like('p.motor', $keyword);
                    $this->db->or_like('cat.name_category', $keyword);
                    $this->db->or_like('brand.name_marca', $keyword);
                    $this->db->group_end();
                }
                break;
        
                default:
                    $this->db->select('p.id_producto AS `id_producto`,p.`nombre_producto`, p.`caract_producto`, p.`cilindraje_producto`, p.`motor`,p.`imagen_producto`,p.`imagen_producto2`,p.`imagen_producto3`');
                    $this->db->select('cat.name_category');
                    $this->db->select('brand.name_marca');
                    $this->db->from('productos p');
                    $this->db->join('categorias cat', 'cat.id_category = p.categoria', 'LEFT');
                    $this->db->join('marcas brand', 'brand.id_marca = p.marca', 'LEFT');
                break;
            }
        
            if ($size != '') {
        
                $ids = explode(',', $size);
        
                $column = '(';
                foreach ($ids as $key => $value) {
                $column .= "FIND_IN_SET('" . $value . "', REPLACE(`p`.`product_size`, ' ', ',')) OR ";
                }
        
                $column = rtrim($column, 'OR ') . ')';
        
                $this->db->where($column);
            }
        
            if ($brands != '') {
                $this->db->where_in('p.marca', $brands);
            }
    
        
            $this->db->where($where);
        
            if ($limit) {
                $this->db->limit($limit, $start);
            }
        
            if ($order_by != '') {
                if (strcmp($order_by, 'low-high') == 0) {
                $this->db->order_by("product.selling_price", "ASC");
                } else if (strcmp($order_by, 'high-low') == 0) {
                $this->db->order_by("product.selling_price", "DESC");
                } else if (strcmp($order_by, 'top') == 0) {
                $this->db->order_by("product.total_sale", "DESC");
                } else if (strcmp($order_by, 'newest') == 0) {
                $this->db->order_by("p.id_producto", "DESC");
                }
            } else {
                if ($type == 'recent_viewed_products') {
                $this->db->order_by("recent.created_at", "ASC");
                } else {
                $this->db->order_by("p.id_producto", "ASC");
                }
            }
        
            $resultSet = $this->db->get()->result();
        
            if ($type == 'today_deal') {
                if (empty($resultSet)) {
                $this->db->set(array('today_deal' => 0, 'today_deal_date' => 0));
                $this->db->update('productos');
                }
            }
        
            if ($type == 'search' and $keyword == '') {
                $resultSet = '';
            }
        
            return $resultSet;
            }

        }
