<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class logindata extends CI_Model
{
	public function index()
	{
		    $email=$this->input->post('email');
			$pwd=$this->input->post('password');     
		   
			$this->db->select('*');
			$this->db->from('entries_new');
			$this->db->where('email',$email);
			$this->db->where('password',$pwd);
			$query=$this->db->get();
			// echo $this->db->last_query(); //to check last query
			if($query->num_rows()==1)
			{
			   $result=$query->result(); 
			   $se_data=array('username'=>$result[0]->name,'email'=>$result[0]->email);  
			   $this->session->set_userdata($se_data);
			   echo $_SESSION['username'];  //alternate way of session
			   echo $this->session->username;  //alternate way of session
			   echo $this->session->userdata('username');  //alternate way of session
			   //print_r($this->session->userdata());
			   //echo $this->session->has_userdata('username'); //count the how many user
			   //die;
			   return  $result;
			}
			else
			{ 
				return false; 
			}
		
	}
}
