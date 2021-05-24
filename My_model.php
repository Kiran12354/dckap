<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model
{
    public function save_add(){
         $var=array(
           'seller_name'=>$this->input->post('name'),
           'address'=>$this->input->post('address'),
           'phone'=>$this->input->post('phone'),
           'product_name'=>$this->input->post('pname'),
           'price'=>$this->input->post('price'),
           'brand'=>$this->input->post('brand'),
           'type'=>$this->input->post('type')
       ); 
       $this->db->insert('posts',$var);
        echo '<script>window.location="'.base_url().'"</script>';
    }
    
    public function getpost(){
        $a=1;
    $get_order=$this->db->get_where('filter',array('id',$a))->row();
    if($get_order->price==1){
        $this->db->select('*');
    $this->db->order_by("price","desc");
    $this->db->from('posts');
    $query=$this->db->get();
    return $query->result();
    }  else {
    $this->db->select('*');
    $this->db->order_by("price","asc");
    $this->db->from('posts');
    $query=$this->db->get();
    return $query->result();
    }
    
    }
    
    public function getfilter(){
        $this->db->select();
        $a=$this->db->get('filter');
        return $a->row();
    }

        public function update_filter(){
        $a=1;
        $var=array(
            'price'=>$this->input->post('price'),
           );
        $this->db->where('id',$a);
        $this->db->update('filter',$var);
        echo '<script>window.location="'.base_url().'"</script>';
        
    }
}