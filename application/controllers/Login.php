<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller
{
	public function __construct()
    {
         parent::__construct();
         $this->load->library('session');
    }
    
	public function index() //by deafult index function call
	{
		$this->load->view('login_view'); // to view the login view on frontend
	}
	
	public function logindata()
	{
		if(isset($_POST['login']) && $_POST['login']!='')
         { 
			$this->load->model('logindata');
            $data['res']=$this->logindata->index();
            //echo "<pre>"; print_r($data['res']); die;
			  if($data['res'])
			  {
				  redirect( base_url().'manage');
				 
			  }
			  else
			  {
				 redirect( base_url().'login');
				
			  }
         }
	}
	
}
?>
