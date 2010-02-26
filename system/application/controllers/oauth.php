<?php

class Oauth extends Controller {

	function Oauth()
	{
		parent::Controller();	
		$this->load->model('accounts');
		$this->load->library('tank_auth');		
		if(!$this->tank_auth->is_logged_in()){
			redirect('/');
		}
	}

	function index(){
		redirect('/');
	}
	
	//Adding twitter as a feed
	function twitter(){
		// Set app keys
		$consumer_key = $this->config->item('twitter_key','services');
		$consumer_key_secret = $this->config->item('twitter_secret','services');

		$this->load->library('twitter');
		//Make initial calls to grant access
		$auth = $this->twitter->oauth($consumer_key, $consumer_key_secret, null, null);
		if ( isset($auth['access_token']) && isset($auth['access_token_secret']) )
		{
			//Make sure service ID is correct for correct later processing
			$this->load->model('services');
			$id=$this->services->find('service="twitter"','id');
			$data['service_id']=$id['id'];
			$data['user_id']=$this->tank_auth->get_user_id();
			$data['create']=$data['last']=time();
			$credentials=$this->twitter->call('account/verify_credentials');			
			$data['hash']=sha1($data['user_id'].'twitter'.$credentials->screen_name);

	$data['data']=serialize(array('access_token'=>$auth['access_token'],'access_token_secret'=>$auth['access_token_secret'],'username'=>$credentials->screen_name,'service'=>'twitter'));
			//load model to create a new account
			$existAccount = $this->accounts->findCount('hash = '.$data['hash']);
			if( ! $existAccount){
				$this->accounts->insert($data); // SAVE THE ACCESS TOKENS
				$this->session->set_flashdata('message','<div class="success">Congratulations, you have successfully added a Twitter account to your feed.</div>');
			}else{
				$this->session->set_flashdata('message','<div class="error">You have already associated that account with your account.  If you believe this is in error please <a href="/contact">contact us.</a></div>');	
			}
			redirect('users/services');
		}
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */