<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

//require(APPPATH.'libraries/MY_Model.php');

class Awardsitems extends MY_Model
{
	function Awardsitems()
	{
		parent::Model();
        $this->loadTable('awardsitems');
	}
	
}
