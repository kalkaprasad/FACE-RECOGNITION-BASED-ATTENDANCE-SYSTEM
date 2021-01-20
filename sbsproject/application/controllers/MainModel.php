<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Controller {

	
	public function logout()
{
$this->session->sess_destroy();

        redirect(base_url().'index.php');
}


public function showsongs()
{



        if($this->session->userdata('username')!=null)
	{

                $this->load->view('showmusic/showSongs');
	}
	else
	{

		redirect(base_url().'index.php/Admin/index');
	}


      
}


// public function fetchuerdata()
// {
//     $useremail= $this->session->userdata('username');
//     $this->load->model('mainModel');
//     $data=$this->mainModel->fetchuser($useremail);
//     echo json_encode($data);


    
    
// }
}