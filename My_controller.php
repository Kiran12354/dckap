<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('My_model');
    }

    public function index()
	{       
                $data['title']= "Add Lists";
                $data['get_filter']=$this->My_model->getfilter();
                $data['get_posts']=$this->My_model->getpost();
                $this->load->view('add_list',$data);
	}
        
        public function create_add(){ 
                $data['title']= "Create add";
                $this->load->view('add_create',$data);
        }
         
        public function save_add(){
            $this->My_model->save_add();
        }
        
        public function filter(){
            $this->My_model->update_filter();
        }
       
 }


