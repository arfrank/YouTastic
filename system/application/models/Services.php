<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

//require(APPPATH.'libraries/MY_Model.php');

class Services extends MY_Model
{
	function Services()
	{
		parent::Model();
        $this->loadTable('services');
	}
	
}
