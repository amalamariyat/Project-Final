<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultancycontroller extends CI_Controller {

	public function __cunstruct()
	{
		parent::__cunstruct();
		$this->load->helper('form');
	    $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session'); 
        $this->load->helper("file");
        $this->load->model("OnlineModel");
       
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function ConsultancyHome(){
		$this->load->view('consultancy/consultancy_header');
		$this->load->view('consultancy/consultancy_home');
		$this->load->view('consultancy/consultancy_footer');
	}
	public function manageStudentApplications(){
		$data=array();
		$res=array();
		$username=$this->session->userdata('username');
		$res=$this->OnlineModel->get_consultancy_id_by_uname($username);
		$data['cunsultancy_id'] = $res['cunsultancy_id'];
		$data['admission']=$this->OnlineModel->getadmissionForConsultancy($data['cunsultancy_id']);
		$this->load->view('consultancy/consultancy_header');
		$this->load->view('consultancy/consultancy_manage_student_application',$data);
		$this->load->view('consultancy/consultancy_footer');
	}
	public function applyForUniversityContract(){
		$username=$this->session->userdata('username');
			// log_message('error',$username);
			$res=$this->OnlineModel->get_consultancy_id_by_uname($username);
			 $data['cunsultancy_id'] = $res['cunsultancy_id'];
		$data['req']=$this->OnlineModel->get_consutancy_req_by_consultancy_id($data['cunsultancy_id']);
		$data['university']=$this->OnlineModel->getUniversity();

		$this->load->view('consultancy/consultancy_header');
		$this->load->view('consultancy/consultancy_apply_for_university_contract',$data);
		$this->load->view('consultancy/consultancy_footer');
	}
	public function applyForStudentAdmission(){
		$this->load->view('consultancy/consultancy_header');
		$this->load->view('consultancy/consultancy_apply_for_student_admission');
		$this->load->view('consultancy/consultancy_footer');
	}
	public function applyUniversityContract(){
		//if($this->session->set_userdata('email, $email')){
			$data['university_id'] = $this->input->get_post('university_id');
			$username=$this->session->userdata('username');
			// log_message('error',$username);
			$res=$this->OnlineModel->get_consultancy_id_by_uname($username);
			 $data['cunsultancy_id'] = $res['cunsultancy_id'];

			print_r($data['cunsultancy_id']);
			$data['status'] = 'pending';
			$response = $this->OnlineModel->applyUniversityContract($data);
			if($response==1){
					?> <script type="text/javascript">
					alert('Requested');
					</script> <?php
					$this->applyForUniversityContract();
			}else{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php

				$this->applyForUniversityContract();
			}
		//}else{

		//?> <script type="text/javascript">
	 	//alert('Log in again');
	 	//</script> <?php
	 	//$this->login();
		//}
	}
	public function consultancyRegistration(){
		//$data['place']=$this->OnlineModel->getPlace();
		$this->load->view('consultancy/consultancy_registration');
	}
	public function addConsultancy(){
		$data=array();
		$data1=array();
			log_message('error',"add consultancy function");


		$data1['password'] = $this->input->get_post('password');
		$c_pass= $this->input->get_post('c_password');
		if ($data1['password']!= $c_pass) {
			?>
			<script>
				alert("Passwords should match");
				location.href='<?php echo base_url().'index.php/Consultancycontroller/consultancyRegistration' ?>';
			</script>
			<?php 
			log_message('error',"add consultancy function password mismatch");
				// redirect(base_url().'index.php/Consultancycontroller/consultancyRegistration');
			}
		$data['cunsultancy_name']=$this->input->get_post('name');
		$data['consultancy_fee']=$this->input->get_post('fees');
		$data['place']=$this->input->get_post('place');
		$data['pin']=$this->input->get_post('pin');
		$data['phone']=$this->input->get_post('phone');
		$data['email']=$this->input->get_post('email');
		$res=$this->OnlineModel->check_university_existence($data['email']);
		if($res>0){
			log_message('error','add consultancy function res > 0');
			?>
			<script>
				alert("Mail id already registerd ");
				// location.reload();
				location.href='<?php echo base_url().'index.php/Consultancycontroller/consultancyRegistration' ?>';


			</script>
			<?php
			// redirect(base_url().'index.php/Consultancycontroller/consultancyRegistration');
		}
		$data['website']=$this->input->get_post('website');
		$data['remarks']=$this->input->get_post('remarks');
		$data12=array();
		$this->load->library('upload');
		$config = array();

		$config['upload_path'] =  realpath(APPPATH . '../images');
		// log_message('error',$config['upload_path']);
		$config['allowed_types'] = 'pdf';
		$config['max_size']      = '20480';
		// $config['min_width']     = '14';
		// $config['min_height']    = '7';
		  $new_name = time().$_FILES['licence']['name'];
				$config['file_name'] = $new_name;
	    		$config['overwrite'] = TRUE;
	    		$config['encrypt_name'] = FALSE;
	    		$config['remove_spaces'] = TRUE;
	    $this->upload->initialize($config);
		$this->upload->do_upload('licence');
			if ($this->upload->do_upload('licence')) {
			// code...
		$data['document']= $this->upload->data('file_name');

		}
		else{
		$data['document']= "Upload failed";

			?>
		<script>
			alert("Upload failed");
				// location.reload();
				location.href='<?php echo base_url().'index.php/Consultancycontroller/consultancyRegistration' ?>';
				


		</script>
			<?php
			// redirect(base_url().'index.php/Consultancycontroller/consultancyRegistration');
		}
		$data['status']='pending';

		$this->load->model("OnlineModel");
		$res = $this->OnlineModel->addConsultancy($data,$data1);
		if($res==1){
			?> <script type="text/javascript">
					alert('Success');
					</script> <?php
					$this->consultancyRegistration();
		}else{
			?> <script type="text/javascript">
					alert('failed');
					</script> <?php
					$this->consultancyRegistration();
		}
	}
	//public function consultancy_profile_update(){
		//$data['place']=$this->OnlineModel->getPlace();
		//$this->load->view('consultancy/consultancy_header');
		//$this->load->view('consultancy/consultancy_profile_update',$data);
		//$this->load->view('consultancy/consultancy_footer');	
	//}
	public function logout()
	{
		$this->session->unset_userdata('email');
        $this->index();
	}
	public function view_applications(){
		$application_id=$this->input->get('id');
		$data=$this->OnlineModel->get_application_by_id($application_id);
		$this->load->view('consultancy/consultancy_header');
		$this->load->view('consultancy/consultancy_manage_student_application_by_id',$data);
		$this->load->view('consultancy/consultancy_footer');	
	
	}
	public function reject_app(){
		$application_id=$this->input->get_post('id');
			// log_message('error',$admission_id);

		$reason= $this->input->get_post('reason');
			// log_message('error',$reason);

		$this->OnlineModel->rejectfromconsultancy($application_id,$reason);
		redirect(base_url().'index.php/Consultancycontroller/manageStudentApplications');
	}
	public function accept_app(){
		$application_id=$this->input->get('id');
		$this->OnlineModel->approvefromconsultancy($application_id);
		redirect(base_url().'index.php/Consultancycontroller/manageStudentApplications');
	}
	public function checkContractExistence(){
		$username=$this->session->userdata('username');
			// log_message('error',$username);
			$res=$this->OnlineModel->get_consultancy_id_by_uname($username);
			 $userId = $res['cunsultancy_id'];
		$id=$this->input->get_post('id');
		$res=$this->OnlineModel->checkContractExistence($id,$userId);
		echo json_encode($res);
	}
	public function generate_report(){
		$username=$this->session->userdata('username');
		$res=$this->OnlineModel->get_consultancy_id_by_uname($username);
		$data['cunsultancy_id'] = $res['cunsultancy_id'];
		$data['admissions'] = $this->OnlineModel->generate_report_for_consultancy($data['cunsultancy_id']);
		// print_r($data['admissions']);
		$this->load->view('consultancy/consultancy_report',$data);

	}
	public function generate_report_for_accepted_Students(){

		$username=$this->session->userdata('username');
		$res=$this->OnlineModel->get_consultancy_id_by_uname($username);
		$data['cunsultancy_id'] = $res['cunsultancy_id'];
		$data['admissions'] = $this->OnlineModel->generate_report_for_consultancy_accepted_students($data['cunsultancy_id']);
		// print_r($data['admissions']);
		$this->load->view('consultancy/consultancy_report',$data);
	}
}