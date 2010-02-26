<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

//require(APPPATH.'libraries/MY_Model.php');

class Accounts extends MY_Model
{
	function Accounts()
	{
		parent::Model();
        $this->loadTable('accounts');
	}
	
}
