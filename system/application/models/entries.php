<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

//require(APPPATH.'libraries/MY_Model.php');

class Entries extends MY_Model
{
	function Entries()
	{
		parent::Model();
        $this->loadTable('entries');
	}
	
}
