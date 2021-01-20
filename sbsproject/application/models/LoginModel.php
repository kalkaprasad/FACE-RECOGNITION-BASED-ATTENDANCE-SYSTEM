<?php


/**
 * 
 */
class LoginModel extends CI_model
{
	
	public function checklogin($email,$password,$who)
	{
	    if($who=="Student")
	   {
	   $this->db->where('email',$email);
		$this->db->where('password',$password);
		$value = $this->db->get('studentdetails');
		return $value->num_rows();
	   } 
	   if($who=="Staff")
	   {
	    $this->db->where('email',$email);
		$this->db->where('password',$password);
		$value = $this->db->get('staffdetails');
		return $value->num_rows();
	       
	   }
	   if($who=="Admin")
	   {
	       
	    $this->db->where('email',$email);
		$this->db->where('password',$password);
		$value = $this->db->get('Admin');
		return $value->num_rows();
	   }
		
	}
	
}

?>