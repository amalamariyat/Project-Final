<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Universitycontroller extends CI_Controller {

	public function universityLogin(){
		$this->universityHome();
	}
	public function universityHome(){
		$this->load->view('university/university_header');
		$this->load->view('university/university_home');
		//$this->load->view('university/university_footer');
	}
	public function get_courses(){
		$data['courses']=$this->OnlineModel->getCourse();
		echo json_encode($data['courses']->result());

	}
	public function university_view_consultancy(){
		if( $this->session->userdata('username')){
			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$this->load->view('university/university_header');
			$this->load->view('university/university_view_consultancy',$data);
		}else{
			?> <script type="text/javascript">
			alert('Please login again');
			</script> <?php
			$this->login();
		}
	}
	public function universityRegistration(){
		//$data['area']=$this->OnlineModel->getArea();
		$data['courses']=$this->OnlineModel->getCourse();
		$this->load->view('university/university_registration',$data);
	}
	public function addUniversity(){
		log_message('error','add university function');
		$data=array();
		$data1=array();

		$data['university_name']=$this->input->get_post('name');
		$data['place']=$this->input->get_post('place');
		$data['areacode']=$this->input->get_post('areacode');
		$data['phone']=$this->input->get_post('phone');
		$data['email']=$this->input->get_post('email');
		$res=$this->OnlineModel->check_university_existence($data['email']);
		if($res>0){
			log_message('error','add university function res 0');
			?>
			<script>
				alert("Mail id already registerd ");
			</script>
			<?php
			redirect(base_url().'index.php/Universitycontroller/universityRegistration');
		}
		$data['website']=$this->input->get_post('website');
		$data1['password']=$this->input->get_post('password');
		$data['remarks']=$this->input->get_post('remarks');
		$data['rank']=$this->input->get_post('rank');
		$confirm_password=$this->input->get_post('confirm_password');
	

		// $data['courses'] = $this->input->get_post('courses_available');
		// $data['courses'] = implode(" ", $data['courses']);
		
		if ($data1['password'] != $confirm_password) {
			?>
			<script>
				alert("Passwords missmatch");
				location.href='<?php echo base_url().'index.php/Universitycontroller/universityRegistration' ?>';

			
			</script>
			<?php
			// code...
			// redirect(base_url().'index.php/Universitycontroller/universityRegistration');
		}
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
				location.href='<?php echo base_url().'index.php/Universitycontroller/universityRegistration' ?>';
			
		</script>
			<?php
		// redirect(base_url().'index.php/Universitycontroller/universityRegistration');

		}
		$data['status']='pending';

		$this->load->model("OnlineModel");
		$res = $this->OnlineModel->addUniversity($data,$data1);

		// ==========================COURSE ADD=============================

				$data1['university_id']=$res;


		$no_of_courses=$this->input->get_post('no_of_courses');
		if ($no_of_courses > 1) {
			for($i=0; $i< $no_of_courses;$i++){
				$data1['course_name']=$this->input->get_post('course_name_'.$i);
				$data1['fees']=$this->input->get_post('course_fee_'.$i);
				$data1['duration']=$this->input->get_post('course_duration_'.$i);
				$res=$this->OnlineModel->add_courses_under_university($data1);
			}
		}else{
			$data1['course_name']=$this->input->get_post('course_name_0');
			$data1['fees']=$this->input->get_post('course_fee_0');
			$data1['duration']=$this->input->get_post('course_duration_0');
		}

		// ===========================================================================
		if($res){
			?> <script type="text/javascript">
					alert('Success');
					</script> <?php
					$this->universityRegistration();
		}else{
			?> <script type="text/javascript">
					alert('failed');
					</script> <?php
					$this->universityRegistration();
		}
	}
	public function universityCourses(){
			$username=$this->session->userdata('username');
			$res=$this->OnlineModel->get_university_id_by_uname($username);
			$data['university_id'] = $res['university_id'];
			$data['all_courses']=$this->OnlineModel->getCourse();
			$data['university_courses']=$this->OnlineModel->get_courses_by_university_id($data['university_id']);
		$this->load->view('university/university_header');
		$this->load->view('university/university_course_management',$data);
		//$this->load->view('university/university_footer');
	}	
	public function addCourse(){

		$data['course_name']=$this->input->get_post('coursename');
		$data['fees']=$this->input->get_post('fees');
		$data['fees']=$data['fees']*62.04;
		$data['duration']=$this->input->get_post('duration');
		// $data['eligibility']=$this->input->get_post('eligibility');
		$data['university_id']=$this->input->get_post('u_id');

		$response = $this->OnlineModel->addCourse($data);
		if($response==1){
			?> <script type="text/javascript">
			alert('Course Added');
			</script> <?php

		redirect(base_url().'index.php/Universitycontroller/universityCourses');
		}else{
			?> <script type="text/javascript">
			alert('Failed');
			</script> <?php

			$this->universityCourses();
		}
	}
	public function deleteCourse(){
		$id=$this->input->get_post('id');
		$response = $this->OnlineModel->deleteCourse($id);
		if($response==1){
			?> <script type="text/javascript">
				alert('Course Deleted');
				</script> <?php

				$this->universityCourses();
		}

	}	
	// public function universityViewCourse(){
	// 	$this->load->model("OnlineModel");
	// 	$data['uni_course']= $this->OnlineModel->get_uni_course();
	// 	$this->load->view('university/university_header');
	// 	$this->load->view('university/university_view_courses',$data);
	// 	//$this->load->view('university/university_footer');
	// }
	public function updateCourse(){
			$username=$this->session->userdata('username');
			$res=$this->OnlineModel->get_university_id_by_uname($username);
			$data['university_id'] = $res['university_id'];
		$data['course_name']=$this->input->get_post('coursename');
		$data['fees']=$this->input->get_post('fees');
		$data['duration']=$this->input->get_post('duration');
		// $data['eligibility']=$this->input->get_post('eligibility');
			
		$response = $this->OnlineModel->updateCourse($data);
		if($response==1){
			?> <script type="text/javascript">
			alert('Course Updated');
			</script> <?php

			redirect(base_url().'index.php/Universitycontroller/universityCourses');
		}else{
			?> <script type="text/javascript">
			alert('Failed');
			</script> <?php

			redirect(base_url().'index.php/Universitycontroller/universityCourses');
			
		}
	}
	public function acceptCourse(){
		$this->load->model("OnlineModel");
		$id=$this->input->get_post('id');
		$res=$this->OnlineModel->acceptCourse($id);
			
		if($res==true){

			?> <script type="text/javascript">
			alert('Accepted');
			</script> <?php

			$this->universityViewCourse();
		}else{
			?> <script type="text/javascript">
			alert('Failed');
			</script> <?php

			$this->universityViewCourse();
		}
	}
	public function rejectCourse(){
		$id=$this->input->get_post('id');
		$this->load->model("OnlineModel");
		$res=$this->OnlineModel->rejectCourse($id);
			
		if($res==true){

			?> <script type="text/javascript">
			alert('Rejected');
			</script> <?php

			$this->universityViewCourse();
		}else{
			?> <script type="text/javascript">
			alert('Failed');
			</script> <?php

			$this->universityViewCourse();
		}

	}
	public function manage_consultancy_req(){
			$username=$this->session->userdata('username');
			$res=$this->OnlineModel->get_university_id_by_uname($username);
			$data['university_id'] = $res['university_id'];
			$data['req']=$this->OnlineModel->get_consutancy_req_by_university_id($data['university_id']);
			// print_r($data['req']);
			$this->load->view('university/university_header');
			$this->load->view('university/university_contracts',$data);
			// $this->load->view('university/university_footer');

	}
	public function contract_actions($id){
		$status=$this->input->get_post('action');
		$res=$this->OnlineModel->contract_actions($id,$status);
		redirect('Universitycontroller/manage_consultancy_req');
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
        $this->index();
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function view_applications(){
			$username=$this->session->userdata('username');
			$res=$this->OnlineModel->get_university_id_by_uname($username);
			$data['university_id'] = $res['university_id'];
			$data['application']=$this->OnlineModel->get_applications_by_university_id($data['university_id']);
			// print_r($data['university_id']);
				// print_r($data['application']);
			$this->load->view('university/university_header');
			$this->load->view('university/university_view_applications',$data);
	}
		public function view_applications_by_id(){
		$application_id=$this->input->get('id');
		$data=$this->OnlineModel->get_application_by_id_in_univercity($application_id);
			$this->load->view('university/university_header');

		$this->load->view('university/university_manage_student_application_by_id',$data);
	
	}
	public function reject_app(){
				$application_id=$this->input->get_post('id');
			// log_message('error',$admission_id);

		$reason= $this->input->get_post('reason');
			// log_message('error',$reason);

		$this->OnlineModel->rejectfromuniversity($application_id,$reason);
		redirect(base_url().'index.php/Universitycontroller/view_applications');
	}
	public function accept_app(){
		$application_id=$this->input->get('id');
		$this->OnlineModel->approvefromuniversity($application_id);
		redirect(base_url().'index.php/Universitycontroller/view_applications');
	}
	public function generate_report(){
			$username=$this->session->userdata('username');
			$res=$this->OnlineModel->get_university_id_by_uname($username);
			$data['university_id'] = $res['university_id'];

			$data['admissions']=$this->OnlineModel->generate_report_for_university($data['university_id']);
			// print_r($data['admissions']);		
		$this->load->view('consultancy/consultancy_report',$data);

	}

	public function generate_report_for_accepted_Students(){
			$username=$this->session->userdata('username');
			$res=$this->OnlineModel->get_university_id_by_uname($username);
			$data['university_id'] = $res['university_id'];

			$data['admissions']=$this->OnlineModel->generate_report_for_university_for_accepted_Students($data['university_id']);
			// print_r($data['admissions']);		
		$this->load->view('consultancy/consultancy_report',$data);
			
	}
	public function view_consultancy_by_id($id=null){
		$id=$this->input->get_post('id');
		$data['consultancy']= $this->OnlineModel->get_consutancy_by_id($id);
		// print_r($data['consultancy']);

			$this->load->view('university/university_header');
			$this->load->view('university/university_view_single_consultancy',$data);

	}

}
