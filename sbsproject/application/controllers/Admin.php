<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}



	// this is the for logincheck auth




	public function logincheck()
{
$email=$this->input->post('email');
$password=$this->input->post('password');
$option=$this->input->post('options');


echo $option;
if($option==1)
{
   
$who="Student";
$this->load->model('loginModel');
$token =$this->loginModel->checklogin($email,$password,$who);
if($token)
{

 $session_data = array('username' =>$email,'who'=>$who);
 $this->session->set_userdata($session_data);

redirect(base_url().'index.php/Admin/dashboard');
}
else
{
 redirect(base_url().'index.php/Admin/index');

}
    
// }
   
   
   
}
elseif($option==2)
{


$who="Staff";
$this->load->model('loginModel');
$token =$this->loginModel->checklogin($email,$password,$who);
if($token)
{

 $session_data = array('username' =>$email,'who'=>$who);
 $this->session->set_userdata($session_data);

redirect(base_url().'index.php/Admin/staffpannel');
}
else
{
  redirect(base_url().'index.php/Admin/index');
// echo $option;

}


}
elseif($option==3)
{
$who="Admin";
$this->load->model('loginModel');
$token =$this->loginModel->checklogin($email,$password,$who);
if($token)
{

 $session_data = array('username' =>$email,'who'=>$who);
 $this->session->set_userdata($session_data);

redirect(base_url().'index.php/Admin/Adminpannel');
}
else
{
 redirect(base_url().'index.php/Admin/index');

}
    
    
}
else
{
      redirect(base_url().'index.php/Admin/index');
}

    
    
// // }
// else{
//     //  redirect(base_url().'index.php/Admin/index');
//     echo $option;

// }


}
// staffpannel 

public function staffpannel()
{
    
    if($this->session->userdata('username')!=null)
	{
	    if($this->session->userdata('who')=="Staff")
	    {
	        $this->load->view('staffpannel');
	    }
	    else
	    {
	        	redirect(base_url().'index.php/Admin/index');
	    }

		
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}
}

// Admin pannel

public function Adminpannel()
{
    
     if($this->session->userdata('username')!=null)
	{
	    if($this->session->userdata('who')=="Admin")
	    {
	        $this->load->view('Adminpannel');
	    }
	    else
	    {
	        redirect(base_url().'index.php/Admin/index');
	    }

		
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}
}
// end  admin pannel 


// start fetchtotal student
public function fetchtotalstudent()
{
    $this->load->model('mainModel');
    $username=$this->session->userdata('username');
    $who=$this->session->userdata('who');
    $data=$this->mainModel->fetchtotalstudent($who);
      echo json_encode($data);
    
    
    
}

public function fetchtotalstaff()
{
 
    $this->load->model('mainModel');
    $username=$this->session->userdata('username');
    $who=$this->session->userdata('who');
    $data=$this->mainModel->fetchtotalstaff($who);
      echo json_encode($data);
       
    
}

// total student data trained 

public function studentTraindata()
{
    $this->load->model('mainModel');
    $username=$this->session->userdata('username');
    $who=$this->session->userdata('who');
    $data=$this->mainModel->studentTraindata();
      echo json_encode($data);
}

public function raisereport()
{
    
    $this->load->model('mainModel');
    $username=$this->session->userdata('username');
    $who=$this->session->userdata('who');
    $data=$this->mainModel->raisereport();
      echo json_encode($data);
    
}

// fetch student all
public function studentfetch()
{
    $this->load->model('mainModel');
    $username=$this->session->userdata('username');
    $who=$this->session->userdata('who');
    $data=$this->mainModel->studentfetch();
      echo json_encode($data);
    
}

// staff train data
public function staffno()
{
    $this->load->model('mainModel');
    $data= $this->mainModel->staffno();
    echo json_encode($data);
}
// dashboard


public function dashboard()
{

if($this->session->userdata('username')!==null)	
{
$check =$this->session->flashdata('status');

if($check==1)
{
	echo "<script>alert('data inserted');</script>";
}
// $this->load->model('mainModel');
// $value= $this->mainModel->getClassdetails();
// $total= $this->mainModel->totalregistredstudent();
// echo"<script> alert('$total');</script>";

// $data = array(
// 'classdata' => $value,
// 'kalka' => $total,

// );
 if($this->session->userdata('who')=="Student")
 {
     $this->load->view('dashboard');
 }
 else
 {
     redirect(base_url().'index.php/Admin/index');
 }


}	
else
{

redirect(base_url().'index.php/Admin/index');
}



}

// this is the game function




/// this is the user pannel

public function userpannel()
{

	
	if($this->session->userdata('username')!=null)
	{

		$this->load->view('userpannel');
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}

}

/// App <setting class=""></setting>


public function appsetting()
{


	if($this->session->userdata('username')!=null)
	{

		$this->load->view('appsetting');
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}


}


//play console

public function playconsole()
{


	if($this->session->userdata('username')!=null)
	{

		$this->load->view('playconsole');
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}


}



public function staffnotification()
{
    
    if($this->session->userdata('username')!=null)
	{
	    
	     if($this->session->userdata('who')=="Staff")
	     {
	         
	         $this->load->view('staffnotification');
	     }
	     else
	     {
	         	redirect(base_url().'index.php/Admin/index');
	     }

		
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}
	
}

public function admobpannel()
{


	if($this->session->userdata('username')!=null)
	{

		$this->load->view('admobpannel');
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}



}

// send notification 


// staff raise report 


public function staffraisereport()
{
    
    // $who=$this->session->userdata('who');
    // if($who=="Student")
    $this->load->model('mainModel');
	$title=$this->input->post('title');
	$messsage=$this->input->post('message');
    $useremail= $this->session->userdata('username');
    $date=date('y-m-d');
    $time=date('H:i:s', time());
    
    $who=$this->session->userdata('who');
    $data=array('title'=>$title,
    'idno'=>$useremail,
    'date'=>$date,
    'time'=>$time,
    'sender'=>$who,
    'message'=>$messsage);
 $check= $this->mainModel->staffraisereport($data);
    	if($check==true)
	{
		$status="success";
		return $status;
// 		echo json_encode($status);
	}
	else{
		$status="failed";
		return $status;
// 		echo json_encode($status);
	}
    
}
// staff repoer end 




// show usersd...

public function fetchuerdata()
{
    $useremail= $this->session->userdata('username');
    $who=$this->session->userdata('who');
    $this->load->model('mainModel');
    $data=$this->mainModel->fetchuser($useremail,$who);
    echo json_encode($data);


    
    
}


public function todayStatus()
{
     $date =date("Y-m-d");
    $useremail= $this->session->userdata('username');
    $who=$this->session->userdata('who');
    $this->load->model('mainModel');
    $data=$this->mainModel->todayStatus($useremail,$date,$who);
    echo json_encode($data);
   
}

public function oldStatus()
{
    
     $useremail= $this->session->userdata('username');
    $this->load->model('mainModel');
     $who=$this->session->userdata('who');
    $data=$this->mainModel->oldStatus($useremail,$who);
    echo json_encode($data);
    
}

public function totalattedance()
{
     $useremail= $this->session->userdata('username');
    $this->load->model('mainModel');
    $who=$this->session->userdata('who');
    $data=$this->mainModel->totalattedance($useremail,$who);
    echo json_encode($data);
}

public function studentnotification()
{
     if($this->session->userdata('username')!=null)
	{
	    
	     if($this->session->userdata('who')=="Student")
	     {
	         
	         $this->load->view('studentnotification');
	     }
	     else
	     {
	         	redirect(base_url().'index.php/Admin/index');
	     }
    // studentnotification
}
}

public function stafffetch()
{
    //   $useremail= $this->session->userdata('username');
    $this->load->model('mainModel');
    //  $who=$this->session->userdata('who');
    $data=$this->mainModel->stafffetch();
    echo json_encode($data);
    
}

public function stutrainface()
{
     //   $useremail= $this->session->userdata('username');
    $this->load->model('mainModel');
    //  $who=$this->session->userdata('who');
    $data=$this->mainModel->stutrainface();
    echo json_encode($data);
    
}

public function teachtrainface()
{
      //   $useremail= $this->session->userdata('username');
    $this->load->model('mainModel');
    //  $who=$this->session->userdata('who');
    $data=$this->mainModel->teachtrainface();
    echo json_encode($data);
    
}

public function ticketno()
{
    $this->load->model('mainModel');
    $data=$this->mainModel->report();
    // print($data);
    echo json_encode($data);
    
}

public function aprrorticket()
{
    $this->load->model('mainModel');
    $idno=$this->input->post('idno');
    $updata=array('approve'=>"0");
    $data=$this->mainModel->approve($idno,$updata);
    // print($data);
    echo json_encode($data);
    
}




}
// end 

