<?php
class Pages extends CI_Controller{
	
	public function bodymatter($page='home')
	{
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) 	//if home view not find
		{
			show_404();
		}
		$data['title']=ucfirst($page);
		$this->load->view('templates/header',$data);		//call body header view
		$this->load->view('pages/'.$page,$data); 			//call body matter view
		$this->load->view('templates/footer',$data); 		//call body footer view
		// Note: Each value in the $data array is assigned to a variable with the name of its key. 
		// So the value of $data['title'] in the controller is equivalent to $title in the view.
		// so $data['title'](in controller) == $title(in view)
		
	}
	
}
?>
