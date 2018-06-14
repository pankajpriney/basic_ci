<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registeration extends CI_Controller
{
	
	function __construct()
    {
         parent::__construct();
         $this->load->model('register'); //load model automatically through constructor
    }
    
	public function index() //by default index function will call 
	{
		$this->load->view('registeration_view'); // load view from controller
	}
	
	public function register()
	{
      //echo "<pre>"; print_r($this->input->post('submit')); echo "</pre>"; //get post value $this->input->post('submit')
      if($this->input->post('submit'))
      {
		$this->register->insertdata();    //before call model function you have to load model please see in constructor
        redirect(base_url().'/manage');      //after insert redirect to manage function in admin controller
      }
	}
}
?>
