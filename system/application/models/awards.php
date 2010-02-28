<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

//require(APPPATH.'libraries/MY_Model.php');

class Awards extends MY_Model
{
	function Awards()
	{
		parent::Model();
        $this->loadTable('awards');
	}
	
}
