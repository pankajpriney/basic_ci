<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registeration extends CI_Controller
{
	/*
	function __construct()
    {
         parent::__construct();
         $this->load->model('register'); //load model automatically through constructor
    }
    */
	public function index() //by default index function will call 
	{
		$this->load->view('registeration_view'); // load view from controller
	}
	
	public function register()
	{
      echo "<pre>"; print_r($this->input->post('register')); echo "</pre>";
      /*if($this->input->post('register'))
      {
		$this->register->insertdata();    //call model function	
        redirect(base_url().'index.php/manage');      //after insert redirect to manage function in admin controller
      }*/
	}
}
?>
