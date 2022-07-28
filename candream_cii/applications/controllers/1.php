<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {

	public function __cunstruct()
	{
		parent::__cunstruct();
		$this->load->helper('form');
	    $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session'); 
        $this->load->helper("file");
       
	}
	public function adminLogin(){
		$this->load->view('admin/admin_login');
		$this->load->view('admin/admin_footer');
	}
	public function checkAdminLogin(){

		$data['username']=$this->input->get_post('username');
		$data['password']=$this->input->get_post('password');
		log_message('error',$data);
		$res = $this->OnlineModel->checkAdminLogin($data);
		if($res==true){

			$username=$data['username'];
			$this->session->set_userdata('username', $username);

			?> <script type="text/javascript">
			alert('Log in success');
			</script> <?php

			$this->adminHome();
		}else{
			$this->adminLogin();
		}
	}
	public function adminHome(){
		if( $this->session->userdata('username')){

			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_home');
			$this->load->view('admin/admin_footer');
		}else{

			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
	}
	public function adminManageAdmission(){
		if( $this->session->userdata('username')){
			$data['admission']=$this->OnlineModel->getAdmission();
			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_manage_admission',$data);
			$this->load->view('admin/admin_footer');
		}else{

			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
	}
	public function adminManageConsultancy(){
		if( $this->session->userdata('username')){
			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_manage_consultancy',$data);
			$this->load->view('admin/admin_footer');
		}else{

			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
	}
	public function ViewStudentDetails(){
		if( $this->session->userdata('username')){
			$name=$this->input->get_post("name");
			$data['student']=$this->OnlineModel->ViewStudentDetails($name);
			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_view_student_details',$data);
			$this->load->view('admin/admin_footer');
		}
		else{

			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
	}
	public function acceptConsultancy(){
		if( $this->session->userdata('username')){
			$id=$this->input->get_post('id');
			$res=$this->OnlineModel->acceptConsultancy($id);
			
			if($res==true){

				?> <script type="text/javascript">
				alert('Accepted');
				</script> <?php

				$this->adminManageConsultancy();
			}else{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php

				$this->adminManageConsultancy();
		}
		
	}
	else{

			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
}

	public function rejectConsultancy(){
		if( $this->session->userdata('username')){
			$id=$this->input->get_post('id');
			$res=$this->OnlineModel->rejectConsultancy($id);
			
			if($res==true){

				?> <script type="text/javascript">
				alert('Rejected');
				</script> <?php

				$this->adminManageConsultancy();
			}else{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php

				$this->adminManageConsultancy();
			}
		

	}
	else{
			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();	
		}
}

	public function adminManageUniversity(){
		if( $this->session->userdata('username')){
			$data['university']=$this->OnlineModel->getUniversity();
			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_manage_university',$data);
			$this->load->view('admin/admin_footer');
		}else{
			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
	}

	public function addUniversity(){
		if( $this->session->userdata('username')){

			$action=$this->input->get_post('btnsave');
			if($action=="Save")
			{
				$data['university_name']=$this->input->get_post('name');
				$data['place']=$this->input->get_post('place');
				$data['email']=$this->input->get_post('email');

				$response = $this->OnlineModel->addUniversity($data);
				if($response==1){
					?> <script type="text/javascript">
					alert('University Added');
					</script> <?php

					$this->adminManageUniversity();
				}else{
					?> <script type="text/javascript">
					alert('Failed');
					</script> <?php

					$this->adminManageUniversity();
				}
			}
			else{
				$data['university_id']=$this->input->get_post('id');
				$data['university_name']=$this->input->get_post('name');
				$data['place']=$this->input->get_post('place');
				$data['email']=$this->input->get_post('email');

				$response = $this->OnlineModel->updateUniversity($data);
				if($response==1){
					?> <script type="text/javascript">
					alert('University Updated');
					</script> <?php

					$this->adminManageUniversity();
				}else{
					?> <script type="text/javascript">
					alert('Failed');
					</script> <?php

					$this->adminManageUniversity();
				}
			}
		
	}
	else{
			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}

	}
	public function deleteUniversity(){
		if( $this->session->userdata('username')){
			$id=$this->input->get_post('id');
			$response = $this->OnlineModel->deleteUniversity($id);
			if($response==1){
				?> <script type="text/javascript">
					alert('University Deleted');
					</script> <?php

					$this->adminManageUniversity();
			}
		}else{
			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}

	}


	public function acceptAdmission(){
		if( $this->session->userdata('username')){
			$id=$this->input->get_post('id');
			$res=$this->OnlineModel->acceptAdmission($id);
			
			if($res==1){

				?> <script type="text/javascript">
				alert('Accepted');
				</script> <?php

				$this->adminManageAdmission();
			}else{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php

				$this->adminManageAdmission();
			}
		
	}
	else{

			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
}
	public function rejectAdmission(){
		if( $this->session->userdata('username')){
			$id=$this->input->get_post('id');
			$res=$this->OnlineModel->rejectAdmission($id);
			
			if($res==1){

				?> <script type="text/javascript">
				alert('Reject');
				</script> <?php

				$this->adminManageAdmission();
			}else{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php

				$this->adminManageAdmission();
			}
		
	}
	else{

			?> <script type="text/javascript">
			alert('Log in again');
			</script> <?php

			$this->adminLogin();
		}
	}
	public function adminManageCourses(){
		$data['courses']=$this->OnlineModel->getCourse();
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_manage_courses',$data);
		$this->load->view('admin/admin_footer');
	}

	public function addCourse(){

		$action=$this->input->get_post('btnsave');
		if($action=="Save")
		{
			$data['course_name']=$this->input->get_post('coursename');
			$data['fees']=$this->input->get_post('fees');
			$data['duration']=$this->input->get_post('duration');
			$data['eligiblity']=$this->input->get_post('eligiblity');

			$response = $this->OnlineModel->addCourse($data);
			if($response==1){
				?> <script type="text/javascript">
				alert('Course Added');
				</script> <?php

				$this->adminManageCourses();
			}else{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php

				$this->adminManageCourses();
			}
		}
		else{

			$data['course_id']=$this->input->get_post('id');
			$data['course_name']=$this->input->get_post('coursename');
			$data['fees']=$this->input->get_post('fees');
			$data['duration']=$this->input->get_post('duration');
			$data['eligiblity']=$this->input->get_post('eligiblity');

			$response = $this->OnlineModel->updateCourse($data);
			if($response==1){
				?> <script type="text/javascript">
				alert('Course Updated');
				</script> <?php

				$this->adminManageCourses();
			}else{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php

				$this->adminManageCourses();
			}
		}

	}
	public function deleteCourse(){
		$id=$this->input->get_post('id');
		$response = $this->OnlineModel->deleteCourse($id);
		if($response==1){
			?> <script type="text/javascript">
				alert('Course Deleted');
				</script> <?php

				$this->adminManageCourses();
		}

	}

	


	
}
