<?php

class Users extends Controller {

	function Users()
	{
		parent::Controller();	
	}
	
	function index()
	{

	}
	
	function services(){
		$this->load->model('Accounts');

		$data['services']=$this->Accounts->findAll("user_id = '1'");//".$this->session->userdata('user_id')."'");
		$data['content']='users/services';
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