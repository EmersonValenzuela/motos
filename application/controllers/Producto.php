<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model','common_model');
        $this->load->model('Api_model','api_model');
    }

    public function index(){

        $product_slug = addslashes(trim($this->input->get('n')));

        $where=array('nombre_producto' => $product_slug);

        $product_id =  $this->common_model->getIdBySlug($where, 'productos');

        $row_pro=$this->common_model->selectByid($product_id,'productos p');

        if(empty($row_pro)){
            $this->template->load('template2', 'site/pages/404');
            return;
        }

        $data = array();
        $data['page_title'] = $row_pro->nombre_producto;
        $data['current_page'] = $row_pro->nombre_producto;
        $data['product'] = $row_pro;


        $where=array('categoria' => $data['product']->categoria, 'marca' => $data['product']->marca, 'id_producto !=' => $data['product']->id_producto);

        $data['related_products'] = $this->common_model->selectByids($where,'productos p');

        $data['body'] = 'page-store';

        $this->template->load('template2', 'producto', $data);

 
    }
}
?>