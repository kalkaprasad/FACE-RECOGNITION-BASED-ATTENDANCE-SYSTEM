<?php

class MainModel extends CI_model
{
	
	

public	function  fetchtoken()
{

$data=$this->db->get('tokens');
return $data->result();

}


public function studentdetails($data,$rollno)

{
     $this->db->where('rollno',$rollno);
    $query = $this->db->get('studentdetails');
    if ($query->num_rows() > 0){
        return false;
    }
    else{
        $status=$this->db->insert("studentdetails",$data);
	    return $status;
    }
    
    

   
}

public function staffdetails($data,$idno)
{
    
    
    $this->db->where('idno',$idno);
    $query = $this->db->get('staffdetails');
    if ($query->num_rows() > 0){
        return false;
    }
    else{
        $status=$this->db->insert("staffdetails",$data);
	    return $status;
    }
    
    
}


// train staff data

public function stafftraindata($data,$idno)
{
    
    $this->db->where('idno',$idno);
    $query = $this->db->get('trainstaffdata');
    if ($query->num_rows() > 0){
        return false;
    }
    else{
        $status=$this->db->insert("trainstaffdata",$data);
    	return $status;
    }
    
}


// get staff email 
public function getstaffdetails($idno)
{
     $this->db->select('email');
     $this->db->from('staffdetails');
    $this->db->where('idno',$idno);
    $data=$this->db->get();
	return $data->result();
    
}



public function saveattendance($data,$rollno)
{

    $this->db->where('rollno',$rollno);
    $query = $this->db->get('studentattendance');
    if ($query->num_rows() > 0){
        return false;
    }
    else{
       $status=$this->db->insert("studentattendance",$data);
	  return $status;
    }
    


}

public function staffsaveattandance($data,$idno)
{
    
     $this->db->where('idno',$idno);
    $query = $this->db->get('staffattendance');
    if ($query->num_rows() > 0){
        return false;
    }
    else{
       $status=$this->db->insert("staffattendance",$data);
	  return $status;
    }
}

public function getdetails($roll)
{

    $this->db->select('email');
     $this->db->from('studentdetails');
    $this->db->where('rollno',$roll);
    $data=$this->db->get();
	return $data->result();
}


public function savetraindata($data,$rollno)
{
    
    $this->db->where('rollno',$rollno);
    $query = $this->db->get('trainstudentdata');
    if ($query->num_rows() > 0){
        return false;
    }
    else{
        $status=$this->db->insert("trainstudentdata",$data);
    	return $status;
    }
    
    
    
    
}



/// show users

public function fetchuser($email,$who)

{
    if($who=="Student")
    {
    $this->db->select('name');
    $this->db->select('email');
    $this->db->select('rollno');
    $this->db->select('password');
    $this->db->where('email',$email);
     $this->db->from('studentdetails');
    $data=$this->db->get();
    return $data->result();
    }
    elseif($who=="Staff")
    {
    $this->db->select('name');
    $this->db->select('email');
    $this->db->select('idno');
    $this->db->select('password');
    $this->db->where('email',$email);
     $this->db->from('staffdetails');
    $data=$this->db->get();
    return $data->result();
    
    }
    elseif($who=="Admin")
    {
        
    $this->db->select('name');
    $this->db->select('email');
    $this->db->select('idno');
    $this->db->select('password');
    $this->db->where('email',$email);
     $this->db->from('Admin');
    $data=$this->db->get();
    return $data->result();
        
    }
   
    
}

public function todayStatus($email,$date,$who)
{
    
    if($who=="Student")
    {
         $this->db->select('rollno');
    $this->db->select('name');
    $this->db->select('date');
    $this->db->select('status');
    $this->db->where('email',$email);
    $this->db->where('date',$date);
     $this->db->from('studentattendance');
    $data=$this->db->get();
    return $data->result();
    }
    elseif($who=="Staff")
    {
         $this->db->select('idno');
    $this->db->select('name');
    $this->db->select('date');
    $this->db->select('status');
    $this->db->where('email',$email);
    $this->db->where('date',$date);
     $this->db->from('staffattendance');
    $data=$this->db->get();
    return $data->result();
        
    }
    // elseif($who=="Admin")
    // {
    //      $this->db->select('rollno');
    // $this->db->select('name');
    // $this->db->select('date');
    // $this->db->select('status');
    // $this->db->where('email',$email);
    // $this->db->where('date',$date);
    //  $this->db->from('studentattendance');
    // $data=$this->db->get();
    // return $data->result();
    // }
   
    
}

public function oldStatus($email,$who)
{
    if($who=="Student")
    {
         $this->db->select('rollno');
    $this->db->select('name');
    $this->db->select('date');
    $this->db->select('status');
    $this->db->where('email',$email);
     $this->db->from('studentattendance');
    $data=$this->db->get();
    return $data->result();
    }
    elseif($who=="Staff")
    {
         $this->db->select('idno');
    $this->db->select('name');
    $this->db->select('date');
    $this->db->select('status');
    $this->db->where('email',$email);
     $this->db->from('staffattendance');
    $data=$this->db->get();
    return $data->result();
        
    }
    
    
}

// raise staffreort


//total attedance 


public function totalattedance($email,$who)
{
    if($who=="Student")
    {
          $this->db->where('email',$email);
        $this->db->select('email');
        $this->db->from('studentattendance');
        $query=$this->db->get();
        $total=$query->num_rows();
        return $total;
    }
    elseif($who=="Staff")
    {
        $this->db->where('email',$email);
        $this->db->select('email');
        $this->db->from('staffattendance');
        $query=$this->db->get();
        $total=$query->num_rows();
        return $total;
        // $query = $this->db->query("SELECT email FROM staffdetails");
    }
    
    
}
public function staffraisereport($data)
{
    
     $status=$this->db->insert("raisereport",$data);
	  return $status;
}


public function fetchtotalstudent($who)
{
   
        $data=$this->db->get('studentdetails');
        $total=$data->num_rows();
        return $total;
        
        

    
}

public function fetchtotalstaff($who)
{
    
        $data=$this->db->get('staffdetails');
        $total=$data->num_rows();
        return $total;
    
}


// total student train data

public function studentTraindata()
{
    
    
        $data=$this->db->get('trainstudentdata');
        $total=$data->num_rows();
        return $total;
}

public function staffno()
{
    
        $data=$this->db->get('trainstaffdata');
        $total=$data->num_rows();
        return $total;
}

public function raisereport()
{
     $data=$this->db->get('raisereport');
        $total=$data->num_rows();
        return $total;
}

public function studentfetch()
{
    $data=$this->db->get('studentdetails');
         return $data->result();
}

public function stafffetch()
{
     $data=$this->db->get('staffdetails');
         return $data->result();
    
}
public function stutrainface()
{
     $data=$this->db->get('trainstudentdata');
         return $data->result();
}

public function teachtrainface()
{
    //  teachtrainface
     $data=$this->db->get('trainstaffdata');
     return $data->result();
    
}

public function report()
{
     //  teachtrainface
    //  $this->db->select('idno');
    // $this->db->select('sender');
    // $this->db->select('title');
    // $this->db->select('message');
    // $this->db->select('date');
    // $this->db->select('time');
    
    $data=$this->db->get('raisereport');
     return $data->result();
    
}
public function approve($idno,$data)
{
    
    $this->db->where('idno',$idno);
    $status=$this->db->update('raisereport',$data);
    //  $status=$this->db->insert("studentdetails",);
	    return $status;
    
}



}

?>