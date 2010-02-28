<?php 
class twitterentries
{
//	private $_service_id;
	private $CI;
	private $account_id;
	function __construct()
	{
//		$this->_conn = $CI->twitter->
/*		$CI->load->model('services');
		$id = $CI->services->find('service="twitter"','id');
		$this->_service_id = $id['id'];
		$CI =& get_instance();
		$CI->tank_auth->get_user_id();
		$CI->load->library('twitter');
		$CI->load->model('accounts'); /**/
	}
	
	function getEntries($account_id, $initial=FALSE){
		//Get instance of current project
		$this->account_id = $account_id;
		$this->CI =& get_instance();
		//Load accounts model and get specific account info
		$this->CI->load->model('accounts');
		$account_info = $this->CI->accounts->find('id = "'.$account_id.'"');
		if($account_info){
			//Get twitter library, secrets, and make oauth authentication calls
			$this->CI->load->library('twitter');
			$consumer_key = $this->CI->config->item('twitter_key','services');
			$consumer_key_secret = $this->CI->config->item('twitter_secret','services');
			$account_data = unserialize($account_info['data']);
			$this->CI->twitter->oauth($consumer_key, $consumer_key_secret, $account_data['access_token'], $account_data['access_token_secret']);
			//update with all new entries
			$this->CI->load->model('entries');
			$this->getNewTweets($initial);
//			$this->getNewMentions($initial);
//			$this->getNewRetweets($inital);
//			$this->getNewRetweeted($initial);
		}
		
	}
	//Make this tweet type 
	function getNewTweets($initial=false){
		if($initial){
			//Get last 200 tweets?  Maybe set a config variable for this?
			$newTweetData = $tweetData = $this->CI->twitter->call('statuses/user_timeline',array('count'=>'200'));
		}else{
			//Get last tweet from account id of this tweet type
			$last = $this->CI->entries->find('account_id="'.$this->account_id.'"','*',array('create','desc'));
			$last_data = unserialize($last['data']);
			$since_id = $last_data['id'];
			$newTweetData = $tweetData = $this->CI->twitter->call('statuses/user_timeline',array('since_id'=>$since_id,'count'=>'200'));
		}
		$page=2;
		while(count($newTweetData)==200){
			if(isset($since_id)){
				$newTweetData=$this->CI->twitter->call('statuses/user_timeline',array('count'=>'200','page'=>"$page"));
			}else{
				$newTweetData=$this->CI->twitter->call('statuses/user_timeline',array('count'=>'200','page'=>"$page",'since_id'=>"$since_id"));				
			}
			$tweetData = array_merge($tweetData,$newTweetData);
			$page++;
			usleep(1000);
		}
		$tweetData = array_reverse($tweetData);
		foreach($tweetData as $tweet){
			$data = array('')
		}
		echo count($tweetData);
	}
	
	function getNewMentions($initial=false){
		
	}
	
	function getNewRetweets($iniial=false){
		
	}
	
	function getNewRetweeted($initial=false){
		
	}
}
