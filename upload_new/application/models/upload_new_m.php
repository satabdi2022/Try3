<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class upload_new_m extends CI_model {
	public function __construct()
	{
     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->database();
  // $this->load->library('upload');
     $this->load->helper(array('array','string','form','url'));
	}
public function upload_mvc()
    {
        //echo("i am here in model");
        //die();
      $bname=$this->input->post('bname');
        $noplate=$this->input->post('noplate');
        $lisence=$this->input->post('lisence');
        $name=$this->input->post('name');
        $cost=$this->input->post('cost');
        //echo($name);
        $array=array('bus_name'=>$bname,'number_plate'=>$noplate,'lisence'=>$lisence,'driver_name'=>$name,'cost'=>$cost);

      //  print_r($array);
        $this->db->insert("upload_new",$array);
        return 1;
    }
    public function show_bus()
    {
       //echo("i am here in model");
        //die(); 
     $result=$this->db->get("upload_new")->result_array();
     //print_r($result);
     //die();
     return $result;
    }
 }