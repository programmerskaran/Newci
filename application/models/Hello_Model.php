<?php
class Hello_Model extends CI_Model 
{
	public function __construct() {
        parent::__construct();
        $this->load->database();
    }

	public function saverecords($data)
	{
		return $this -> db -> insert('contact',$data);
	}
}
