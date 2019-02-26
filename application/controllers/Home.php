<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Home extends BaseController
{
	 public function index()
    {
			$page_data['pageTitle'] = 'Fundgogo : Home';
            $page_data['page_name'] = 'home';
			
			$this->load->view('front/index', $page_data);
    }
	
	
	public function login(){
		
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
		  $email=$this->input->post("email");	
		  $password=$this->input->post("password");
		  $type=$this->input->post("type");	
		  $this->db->where($type."_email",$email);
		  $this->db->where("password",$password);
		  $res=$this->db->get($type)->row_array();
		  if($res)
		  {
			  $_SESSION['user']=$res;
			  redirect("/$type");
		  }else
		  {
			  $page_data['message']="Invalid Credentials";
		  }
		}	
		$page_data['pageTitle'] = 'Fundgogo: Home';
            $page_data['page_name'] = 'login';
			
			$this->load->view('front/index', $page_data);
		
	}
	
	public function register(){
		
		if($_SERVER['REQUEST_METHOD']==='POST')
		{
			
			$type=$this->input->post("type");
			
			$data[$type.'_name']=$this->input->post("name");
			$data[$type.'_email']=$this->input->post("email");
			$data['password']=$this->input->post("password");
			$data[$type.'_contact']=$this->input->post("contact");
			$res=$this->db->insert($type,$data);
			if($res)
			{
				$page_data['message']="Your account has been created";
			}
			else
			{
				$page_data['message']="Something went wrong. Please try again!";
			}
		}
		$page_data['pageTitle'] = 'Fundgogo: Signup';
            $page_data['page_name'] = 'signup';
			
			$this->load->view('front/index', $page_data);
		
	}
	
	
	
	public function fundseeker_dashboard()
	{
		$page_data['pageTitle'] = 'Fundgogo: Dashboard';
            $page_data['page_name'] = 'fundseeker_dashboard';
			
			$this->load->view('front/index', $page_data);
	}
	
	
    
}	