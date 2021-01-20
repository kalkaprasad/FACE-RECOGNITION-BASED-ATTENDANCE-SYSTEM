<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {



public function studentdetails()
{
    $this->load->model('MainModel');
    $roll=$this->input->post('rollno');
    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $phone=$this->input->post('phone');
    $fatheremail=$this->input->post('fatheremail');
    $password=$this->input->post('password');
    $date=$this->input->post('date');

    $data=array(
        'rollno'=>$roll,
        'name'=>$name,
        'email'=>$email,
        'phone'=>$phone,
        'fatheremail'=>$fatheremail,
        'password'=>$password,
        'date'=>$date);
 
        $status=$this->MainModel->studentdetails($data,$roll);
        if($status==true)
        {
            echo"success";

        }
        else{
            echo" failed";
        }

      
}

// stafff details

public function staffdetails()
{
 
    $this->load->model('MainModel');
    $idno=$this->input->post('idno');
    $name=$this->input->post('name');
    $email=$this->input->post('email');
    $phone=$this->input->post('phone');
    $password=$this->input->post('password');
    $date=$this->input->post('date');

    $data=array(
        'idno'=>$idno,
        'name'=>$name,
        'email'=>$email,
        'phone'=>$phone,
        'password'=>$password,
        'date'=>$date);
 
        $status=$this->MainModel->staffdetails($data,$idno);
        if($status==true)
        {
            echo"success";

        }
        else{
            echo" failed";
        }
}

public function getdetails()
{
    
 $this->load->model('MainModel');
  $roll=$this->input->get('rollno');
  $status=$this->MainModel->getdetails($roll);
    echo json_encode($status);
  
}

public function getstaffdetails()
{
    $this->load->model('MainModel');
  $idno=$this->input->get('idno');
  $status=$this->MainModel->getstaffdetails($idno);
    echo json_encode($status);
    
}

// save data of train student 


public function savetraindata()
{
   $this->load->model('MainModel');
 $roll=$this->input->post('rollno');
 $name=$this->input->post('name'); 
  $data=array(
    'rollno'=>$roll,
    'name'=>$name);
    $status=$this->MainModel->savetraindata($data,$roll);
    if($status==true)
    {
        echo"success";

    }
    else{
        echo"failed";
    }
    
    
    
}


// save train staff data

public function stafftraindata()
{
   $this->load->model('MainModel');
 $idno=$this->input->post('idno');
 $date=date('Y-m-d');
 $name=$this->input->post('name'); 
  $data=array(
    'idno'=>$idno,
    'date'=>$date,
    'name'=>$name);
    $status=$this->MainModel->stafftraindata($data,$idno);
    if($status==true)
    {
        echo"success";

    }
    else{
        echo"failed";
    }
    
    
    
}

// save staff attedance data 


public function staffsaveattandance()
{
    
    
 $this->load->model('MainModel');

 $idno=$this->input->post('idno');
 $name=$this->input->post('name');
 $date=$this->input->post('date');
 $email=$this->input->post('email');
 $time=$this->input->post('time');
 $status=$this->input->post('status');


 $data=array(
    'idno'=>$idno,
    'name'=>$name,
    'email'=>$email,
    'status'=>$status,
    'time'=>$time,
    'date'=>$date);

    $status=$this->MainModel->staffsaveattandance($data,$idno);
    if($status==true)
    {
        echo"success";

    }
    else{
        echo" failed";
    }


    
}



public function attendancedata()
{

 $this->load->model('MainModel');

 $roll=$this->input->post('rollno');
 $name=$this->input->post('name');
 $date=$this->input->post('date');
 $email=$this->input->post('email');
 $time=$this->input->post('time');
 $status=$this->input->post('status');


 $data=array(
    'rollno'=>$roll,
    'name'=>$name,
    'email'=>$email,
    'status'=>$status,
    'time'=>$time,
    'date'=>$date);


    $status=$this->MainModel->saveattendance($data,$roll);
    if($status==true)
    {
        echo"success";

    }
    else{
        echo" failed";
    }



}


public function sendemail()
{
        $to = "kalkaprasad59@gmail.com.com";
         $subject = "This is subject";
         
         $message = "<b>Login Credintial .</b>";
         $message .= "<h1>Please Follow some security.</h1>";
         
         $header = "From:connectkalka@gmail.com \r\n";
         $header .= "Cc:connectkalka@gmail.com.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
    
    
    
}

}