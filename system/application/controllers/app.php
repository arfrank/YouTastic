<?php

class App extends Controller {

	function App()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$data['content']='app/index';
		$this->load->view('base/base',$data);
	}
	function about()
	{
		$data['content']='app/about';
		$this->load->view('base/base',$data);		
	}
	function contact(){
		$data['content']='app/contact';
		$this->load->view('base/base',$data);		
		
	}
	
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */