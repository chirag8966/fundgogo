<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Fundseeker extends BaseController
{
	  public function __construct()
    {
        parent::__construct();
       if(!$_SESSION['user'])
	   {
		   redirect("/home");
	   }
    }
	
	 public function index()
    {
			$page_data['pageTitle'] = 'Fundgogo: Dashboard';
            $page_data['page_name'] = 'fundseeker_dashboard';
			$page_data['model']='fundseeker_home';
			$this->load->view('front/index', $page_data);
    }
	
	
	
	
	
	public function application($para1='')
	{
		$page_data['pageTitle'] = 'Fundgogo: Dashboard';
        $page_data['page_name'] = 'fundseeker_dashboard';
		
		if($para1=='')
		$page_data['model'] = 'fundseeker_application';
		else
		{
			switch ($para1)
			{
				case 'add' : $page_data['model'] = 'fundseeker_application_add';
							 break;
				case 'submit_app': 

								if($_SERVER['REQUEST_METHOD']==='POST')
								{
									$data['fundseeker_id']=$_SESSION['user']['fundseeker_id'];
									$data['description']=$this->input->post("description");
									$data['company']=$this->input->post("company");
									$data['website']=$this->input->post("website");
									$data['turnover_id']=$this->input->post("turnover_id");
									$data['address']=$this->input->post("address");
									$data['pan']=$this->input->post("pan");
									$data['gstin']=$this->input->post("gstin");
									$data['category']=$this->input->post("category");
									$data['designation']=$this->input->post("designation");
									$data['equity']=$this->input->post("equity");
									$data['seek_amount']=$this->input->post("seek_amount");
									$data['shares']=$this->input->post("shares");
									$data['money_invested']=$this->input->post("money_invested");
									$data['lifespan']=$this->input->post("lifespan");
									$data['money_raised']=$this->input->post("money_raised");
									$data['money_raised_description']=$this->input->post("money_raised_description");
									$data['other_info']=$this->input->post("other_info");
									
									
									$config['upload_path'] = './uploads/application';
									$config['allowed_types'] = 'jpg|png';
									
									$config['encrypt_name'] = FALSE;
									$config['remove_spaces'] = TRUE;
									if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
									$this->load->library('upload', $config);
									
									if ($this->upload->do_upload('aadhar_front')) {
									 $upload_data=$this->upload->data();
									 $data['adhaar_front']='uploads/application'.$upload_data['file_name'];
									 
									}
									
									if ($this->upload->do_upload('aadhar_back')) {
									 $upload_data=$this->upload->data();
									  $data['adhaar_back']='uploads/application'.$upload_data['file_name'];
									}
									
									if ($this->upload->do_upload('pan_front')) {
									 $upload_data=$this->upload->data();
									  $data['pan_front']='uploads/application'.$upload_data['file_name'];
									}
									
									if ($this->upload->do_upload('pan_back')) {
									 $upload_data=$this->upload->data();
									  $data['pan_back']='uploads/application'.$upload_data['file_name'];
									}
									
									if ($this->upload->do_upload('annual_report')) {
									 $upload_data=$this->upload->data();
									  $data['annual_report']='uploads/application'.$upload_data['file_name'];
									}
									
									
									$res=$this->db->insert("fundseeker_application",$data);
									
									if($res)
									{
										$page_data['message']="Application Submitted Successfully";
										$page_data['model'] = 'fundseeker_application';
									}
									else
									{
										$page_data['message']="Something went wrong!";
										$page_data['model'] = 'fundseeker_application';
									}
									
									return;
								}
				default : 	$page_data['model'] = 'fundseeker_application';	 
			}
		}
		$this->db->where("fundseeker_id",$_SESSION['user']['fundseeker_id']);
		$result=$this->db->get("fundseeker_application")->result();
	    $page_data['fundseekerRecords']= $result;
		$this->load->view('front/index', $page_data);
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect("/home");
	}
	
	
    
}	