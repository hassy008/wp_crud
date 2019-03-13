<?php
/**
 * 
 */
class OpsCrudUser extends AbstractModule
{
	
    protected $table;
	function __construct()
	{
		parent::__construct();
      $this->table   = $this->db->prefix . 'crud_user';
	}

}