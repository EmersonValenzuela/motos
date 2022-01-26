<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motos extends CI_Controller {

    private $page_limit=6;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Common_model','common_model');
        $this->load->model('Api_model','api_model');
    }


    public function index(){

        $keyword= "s";

        $data = array();
        $data['page_title'] = 'Motos';
        $data['body'] = 'page-store';
        $data['current_page'] = 'Resultado de la búsqueda de '.' '.$keyword;

        $base_url=base_url() . 'motos';

        $row_all = $this->api_model->products_filter('search','','','','','','','','',$keyword,'');

        $id=0;

        $this->get_product_list('search', $row_all, $id, $base_url, $data, $keyword,'');
    }


    private function get_product_list($type, $row_all, $id=0, $base_url, $data, $keyword='', $user_id='',$category=''){

        if(empty($row_all)){
            $this->template->load('template2', 'no_productos', $data);
            return;
        }

  

        $price_arr=array();


        $row=array();

        $this->load->library('pagination');

        $config = array();
        $config["base_url"] = $base_url;
        $config["per_page"] = $this->page_limit;
        $config['use_page_numbers'] = TRUE;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';

        $page = ($this->input->get('page')) ? $this->input->get('page') : 1;

        $page=($page-1) * $config["per_page"];

        $page2 = ($this->input->get('page')) ? $this->input->get('page') : 1;

        if(!empty($this->input->get('sortByBrand'))){

            $brands_ids=$this->input->get('sortByBrand');

            $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids,'','','','', $keyword, $user_id,$category);

            $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, $brands_ids,'','','','', $keyword, $user_id,$category);

            if($this->input->get('price_filter')!=''){

                $price_filter=(explode('-', $this->input->get('price_filter')));

                $min_price=$price_filter[0];
                $max_price=$price_filter[1];

                $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids, $min_price, $max_price,'','', $keyword, $user_id,$category);

                $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, $brands_ids, $min_price, $max_price,'','', $keyword, $user_id,$category);

                if($this->input->get('sort')!=''){

                    $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids, $min_price, $max_price, $this->input->get('sort'),'', $keyword, $user_id,$category);

                    $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, $brands_ids, $min_price, $max_price, $this->input->get('sort'),'', $keyword, $user_id,$category);

                    if(!empty($this->input->get('sortBySize'))){

                        $sizes=implode(',', $this->input->get('sortBySize'));

                        $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids, $min_price, $max_price, $this->input->get('sort'),$sizes, $keyword, $user_id,$category);

                        $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, $brands_ids, $min_price, $max_price, $this->input->get('sort'),$sizes, $keyword, $user_id,$category);
                    }

                }
                else if(!empty($this->input->get('sortBySize'))){

                    $sizes=implode(',', $this->input->get('sortBySize'));

                    $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids, $min_price, $max_price,'',$sizes, $keyword, $user_id,$category);

                    $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, $brands_ids, $min_price, $max_price,'',$sizes, $keyword, $user_id,$category);
                }
            }
            else if(!empty($this->input->get('sortBySize'))){

                $sizes=implode(',', $this->input->get('sortBySize'));

                $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids,'','','',$sizes, $keyword, $user_id,$category);

                $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, $brands_ids,'','','',$sizes, $keyword, $user_id,$category);

                if($this->input->get('sort')!=''){

                    $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids, '', '', $this->input->get('sort'),$sizes, $keyword, $user_id,$category);

                    $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, $brands_ids, '', '', $this->input->get('sort'),$sizes, $keyword, $user_id,$category);
                }
            }
            else if($this->input->get('sort')!=''){

                $row_all=$this->api_model->products_filter($type, $id,'','',$brands_ids, '', '', $this->input->get('sort'),'', $keyword, $user_id,$category);

                $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page,$brands_ids,'','', $this->input->get('sort'),'', $keyword, $user_id,$category);

            }
        }
        else if($this->input->get('price_filter')!=''){
            $price_filter=(explode('-', $this->input->get('price_filter')));

            $min_price=$price_filter[0];
            $max_price=$price_filter[1];

            $row_all=$this->api_model->products_filter($type, $id,'','','',$min_price,$max_price,'','', $keyword, $user_id,$category);

            $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page,'',$min_price,$max_price,'','', $keyword, $user_id,$category);

            if($this->input->get('sort')!=''){

                $row_all=$this->api_model->products_filter($type, $id,'','','', $min_price, $max_price, $this->input->get('sort'),'', $keyword, $user_id,$category);

                $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, '', $min_price, $max_price, $this->input->get('sort'),'', $keyword, $user_id,$category);

                if(!empty($this->input->get('sortBySize'))){

                    $sizes=implode(',', $this->input->get('sortBySize'));

                    $row_all=$this->api_model->products_filter($type, $id,'','','', $min_price, $max_price, $this->input->get('sort'),$sizes, $keyword, $user_id,$category);

                    $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, '', $min_price, $max_price, $this->input->get('sort'),$sizes, $keyword, $user_id,$category);
                }
            }
            else if(!empty($this->input->get('sortBySize'))){

                $sizes=implode(',', $this->input->get('sortBySize'));

                $row_all=$this->api_model->products_filter($type, $id,'','','', $min_price, $max_price,'',$sizes, $keyword, $user_id,$category);

                $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, '', $min_price, $max_price,'',$sizes, $keyword, $user_id,$category);
            }
        }
        else if(!empty($this->input->get('sortBySize'))){

            $sizes=implode(',', $this->input->get('sortBySize'));

            $row_all=$this->api_model->products_filter($type, $id,'','','','','','',$sizes, $keyword, $user_id,$category);

            $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page,'','','','',$sizes, $keyword, $user_id,$category);

            if($this->input->get('sort')!=''){

                $row_all=$this->api_model->products_filter($type, $id,'','','', '', '', $this->input->get('sort'),$sizes, $keyword, $user_id,$category);

                $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page, '', '', '', $this->input->get('sort'),$sizes, $keyword, $user_id,$category);
            }
        }
        else if(!empty($this->input->get('sort')))
        {
            $row_all=$this->api_model->products_filter($type, $id,'','','','','',$this->input->get('sort'),'', $keyword, $user_id,$category);

            $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page,'','','',$this->input->get('sort'),'',$keyword, $user_id,$category);
        }
        else{
            $row=$this->api_model->products_filter($type, $id, $config["per_page"], $page,'','','','','',$keyword, $user_id,$category);
        }


        if($type!='brand' AND !empty($brands)){
            $data['brand_count_items']=array_count_values($brands);
            $data['brand_list']=$this->common_model->selectByidsIN(array_unique($brands), 'marcas');
        }

        $config["total_rows"] = count($row_all);

        $config['num_links'] = 2;
        $config['reuse_query_string'] = TRUE;

        $config['full_tag_open'] = ' <ul class="uk-pagination uk-flex-center">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = '<span data-uk-pagination-previous></span>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = '<span data-uk-pagination-next></span>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '';
        $config['next_tag_open'] = '<span class="nextlink">';
        $config['next_tag_close'] = '</span>';

        $config['prev_link'] = '';
        $config['prev_tag_open'] = '<span class="prevlink">';
        $config['prev_tag_close'] = '</span>';

        $config['cur_tag_open'] = '<li class="uk-active"><a href="#">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';

        $config['num_tag_open'] = '<li data-uk-pagination-previous>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data["links"] = $this->pagination->create_links();

        $data['product_list']=$row;

        $start_count=($page2==1) ? 1 : ($this->page_limit*($page2-1)+1);

        $total_count=count($row_all);
        $count=count($row)*$page2;

        $end_count=($count < $this->page_limit) ? $total_count : $count;

        $data['category_list'] = $this->consultas->category_list();
        $data['brand_list'] = $this->consultas->brand_list();

        $data["show_result"] = 'Mostrando '.$start_count.'–'.$end_count.' de '.count($row_all).' Resultados';

        $this->template->load('template2', 'motos', $data);
    }
}
?>