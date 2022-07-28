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
        $this->load->model("OnlineModel");
       
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function adminLogin(){
		$this->load->view('admin/admin_login');
		$this->load->view('admin/admin_footer');
	}
	public function checkAdminLogin(){

     $data['username']=$this->input->get_post('username');
     $data['password']=$this->input->get_post('password');
     $res = $this->OnlineModel->checkAdminLogin($data);
     // log_message('error',$res);
     if($res==true){
     	$username=$data['username'];
     	$this->load->library('session');
     	$this->session->set_userdata('username', $username);
     	echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
     	//$this->session->set_flashdata("Login success");
       ?> <script type="text/javascript">
       alert('Log in success');
       </script> <?php


       $this->adminHome();
       }else{
       	?><script type="text/javascript"> 
       	alert('Log in failed...');
       </script><?php
       	//$this->session->set_flashdata("Login failed!");
       $this->adminLogin();
     }
  }

	public function adminHome(){
		//if( $this->session->userdata('username')){

			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_home');
			$this->load->view('admin/admin_footer');
		// }else{

		// 	?> <script type="text/javascript">
		// 	alert('Log in again');
		// 	</script> <?php

		// 	$this->adminLogin();
		// }
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
		$this->load->model("OnlineModel");
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
		$this->load->model("OnlineModel");
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
			$this->load->model("OnlineModel");
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
	public function acceptUniversity(){
		 if( $this->session->userdata('username')){
		$this->load->model("OnlineModel");
			$id=$this->input->get_post('id');
			$res=$this->OnlineModel->acceptUniversity($id);
			
			if($res==true){

				?> <script type="text/javascript">
				alert('Accepted');
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

	 		?> <script type="text/javascript">
	 		alert('Log in again');
	 		</script> <?php

	 		$this->adminLogin();
	 	}
}

	public function rejectUniversity(){
		 if( $this->session->userdata('username')){
			$id=$this->input->get_post('id');
			$this->load->model("OnlineModel");
			$res=$this->OnlineModel->rejectUniversity($id);
			
			if($res==true){

				?> <script type="text/javascript">
				alert('Rejected');
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
			// $data['fees']=$this->input->get_post('fees');
			// $data['duration']=$this->input->get_post('duration');
			

			$response = $this->OnlineModel->addCoursebyAdmin($data);
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
		if($response==true){
			?> <script type="text/javascript">
				alert('Course Deleted');
				</script> <?php

				redirect(base_url().'index.php/Admincontroller/adminManageCourses');
		}

	}	
	public function calender(){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_calender');
		$this->load->view('admin/admin_footer');
	}
	public  function adminChangePassword(){
		$this->load->view('admin/admin_header');
		$this->load->view('admin/admin_change_password');
		$this->load->view('admin/admin_footer');
	}
	public function adminLogout()
	{
		$this->load->library('session');
		$this->session->sess_destroy('username');
        $this->index();
	}
	public function updatePassword(){
		
		$data['password']=$this->input->get_post('password');
		$data['confirm_password']=$this->input->get_post('confirm_password');

		$this->load->model("OnlineModel");

			if($data['password']==$data['confirm_password']){
				$res = $this->OnlineModel->updatePassword($data);
				?> <script type="text/javascript">
				alert('Password Updated');
				window.location.href = "adminChangePassword";
				</script> <?php
				die();
			}
			else{
				?> <script type="text/javascript">
				alert('Passwords are not matching');
				window.location.href = "adminChangePassword";
				</script> <?php
				
			}
	}
	public function new(){
		$data['new']=$this->OnlineModel->getnew();
		$this->load->view('admin/new', $data);

	}
	public function newinsert(){
		$data['name']=$this->input->get_post('name');
		$result=$this->OnlineModel->newinsert($data);
		$this->new();
	}
}
