<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Investors extends BaseController
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
            $page_data['page_name'] = 'investor_dashboard';
			$page_data['model']='investor_home';
			$this->load->view('front/index', $page_data);
    }
	
	
	public function review($id="")
    {
			$page_data['pageTitle'] = 'Fundgogo: Application Review';
            $page_data['page_name'] = 'investor_dashboard';
			$page_data['model']='investor_review';
			
			$this->db->where("investors_id",$_SESSION['user']['investors_id']);
			$this->db->where("fundseeker_application_id",$id);
			$qry = $this->db->get("application_status")->num_rows();
			
			if($qry<=0){
			$data2['investors_id'] = $_SESSION['user']['investors_id'];
			$data2['fundseeker_application_id'] = $id;
			$data2['status'] = "1";
			
			$this->db->insert("application_status",$data2);
			}
			$page_data['fundseekerRecord'] = $this->db->where("fundseeker_application_id",$id)->get("fundseeker_application")->result();
			$page_data['application_id'] = $id;
			$this->load->view('front/index', $page_data);
    }
	
	public function approve($id="")
    {
						
			$data2['status'] = "2";
			$this->db->where("investors_id",$_SESSION['user']['investors_id']);
			$this->db->where("fundseeker_application_id",$id);
			$this->db->update("application_status",$data2);
			
			redirect("investors/application/");
    }
	
	
	public function application($para1='')
	{
		$page_data['pageTitle'] = 'Fundgogo: Dashboard';
        $page_data['page_name'] = 'investor_dashboard';
		
		if($para1=='')
		$page_data['model'] = 'investor_application';
		else
		{
			switch ($para1)
			{
				case 'add' : $page_data['model'] = 'investor_application_add';
							 break;
				case 'submit_app': 

								if($_SERVER['REQUEST_METHOD']==='POST')
								{
									$data['investor_id']=$_SESSION['user']['investor_id'];
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
									
									
									$res=$this->db->insert("investor_application",$data);
									
									if($res)
									{
										$page_data['message']="Application Submitted Successfully";
										$page_data['model'] = 'investor_application';
									}
									else
									{
										$page_data['message']="Something went wrong!";
										$page_data['model'] = 'investor_application';
									}
									
									return;
								}
				default : 	$page_data['model'] = 'investor_application';	 
			}
		}
		$page_data['investorRecords'] = $this->db->query('select * from fundseeker_application')->result();
		
		$this->load->view('front/index', $page_data);
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect("/home");
	}
	
	
    
}	