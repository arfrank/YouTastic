<?php

class Users_controller extends Controller {

	function Users_controller()
	{
		parent::Controller();	
		
	}
	
	function profile(){
		redirect('/users/services');
	}
	
	function index()
	{
		redirect('/users/profile');
	}
	
	function services()
	{
		$this->load->library('tank_auth');		
		if(! $this->tank_auth->is_logged_in())
		{
			redirect('/');
		}
		$this->load->model('accounts');
		$data['services']=$this->accounts->findAll("user_id = '1'");//".$this->session->userdata('user_id')."'");
		$data['content']='base/plus_sidebar';
		$data['main_content']='users/services';
		$data['sidebar']='users/sidebars/profile';
		$data['flashmessage'] = ($this->session->flashdata('message') ? $this->session->flashdata('message') : FALSE );
		$this->load->view('base/base',$data);
	}
	
	function register()
	{
		$this->load->library('form_validation');
		if($this->form_validation->run()==false){
			$data['content']='users/register';
		}else{
			$data['content']='users/register_success';			
		}
		$this->load->view('base/base',$data);		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */