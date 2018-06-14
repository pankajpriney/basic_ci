<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage extends CI_Controller
{
	function __construct()
    {
         parent::__construct();
         $this->load->library('session');
         $this->load->model('register'); //load model automatically through constructor
    }
    
	public function index()
	{
		$data['res']=$this->register->get_data();  // call model function get_data in file model name register
        $this->load->view('manage_view',$data);
	}
	
	public function update()
    {
       if(isset($_REQUEST['editid']) && $_REQUEST['editid']!='' && $_REQUEST['editid']!=0)
            { 
				$data['res']=$this->register->update();
				$this->load->view('update_view',$data);
			}
	}
	
	public function updated_data()
    {
	  if(isset($_POST['update']) && $_POST['update']=='Update')
		{
		 $this->register->updated_data();
		 redirect(base_url().'index.php/manage'); 
	  
		}
	}
	
	public function delete()
    {
		if(isset($_REQUEST['deleteid']) && $_REQUEST['deleteid']!='' && $_REQUEST['deleteid']!=0)
		{
		 $this->register->delete_data();
		 redirect(base_url().'index.php/manage'); 
		}
    }

}
?>
