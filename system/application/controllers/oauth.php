<?php

class Oauth extends Controller {

	function Oauth()
	{
		parent::Controller();	
		$this->load->model('accounts');
	}

	function index(){
		redirect('/');
	}
	
	//Adding twitter as a feed
	function twitter(){
		// Set app keys
		$this->load->config('services');
		$consumer_key = $this->config->item('twitter_key');
		$consumer_key_secret = $this->config->item('twitter_secret');

		$this->load->library('twitter');
		//Make initial calls to grant access
		$auth = $this->twitter->oauth($consumer_key, $consumer_key_secret, null, null);
		if ( isset($auth['access_token']) && isset($auth['access_token_secret']) )
		{
			//Make sure service ID is correct for correct later processing
			$this->load->model('services');
			$id=$this->services->find('service="twitter"','id');
			$data['service_id']=$id['id'];
			$data['user_id']=$this->session->userdata('user_id');
			$data['create']=$data['last']=time();
	$data['data']=serialize(array('access_token'=>$auth['access_token'],'access_token_secret'=>$auth['access_token_secret']));
			//load model to create a new account
			$this->accounts->insert($data); // SAVE THE ACCESS TOKENS
			$this->session->set_flashdata('message','<div class="success">Congratulations, you have successfully added a Twitter account to your feed.</div>');
			redirect('users/services');
		}/*else{
	//		$this->session->set_flashdata('message','<div class="error">Sorry, but we weren\'t able to add that Twitter account to your account, please try again.  If this problem persists please <a href="/contact">contact us.</a></div>');
	//		redirect('users/services');
		}/**/
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */