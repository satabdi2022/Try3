<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
     parent::__construct();
     $this->load->helper('url');
     $this->load->helper('form');
     $this->load->database();
     $this->load->library('upload');
     $this->load->helper(array('array','string','form','url'));
     $this->load->model("upload_new_m");

	}
	public function index()
	{
		$this->load->view('page_one');
	}
	
	public function new_upload()
	{
		//echo('I am here ');
		//die();
		$r=$this->upload_new_m->upload_mvc();
		if($r)
		{
			echo("Sucessfully inserted!!");
		}
	}
	public function show_bus()
	{
		//echo('I am here ');
		//die();
		$result['all_user']=$this->upload_new_m->show_bus();
		//echo("I am here");
		//die();
		//print_r($result);
		$this->load->view('page_three',$result);
	}
}
