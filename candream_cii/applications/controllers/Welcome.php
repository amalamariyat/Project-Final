<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function login(){
		$this->load->view('student/login');
	}
	public function about(){
		$this->load->view('about.html');
	}
	public function signup(){
		$this->load->view('student/signup');
	}
	public function service(){
		$this->load->view('service.html');
	}
	public function contact(){
		$this->load->view('contact.html');
	}

	public function studentViewUniversity(){
		
		if( $this->session->userdata('username')){

			$data['c_name'] =$this->input->get_post('c_name');
			$id=$this->input->get_post('c_name');
			$data['university']=		$this->OnlineModel->get_accepted_universities_by_consultancy_id($id);
			$this->load->view('student/student_header');
			$this->load->view('student/student_view_university',$data);
			$this->load->view('student/student_footer');
		}else{
			$this->index();
		}
	}
	public function studentViewCourses(){
		
		if( $this->session->userdata('username')){
			$data['u_name'] =$this->input->get_post('u_name');
			$data['course']=$this->OnlineModel->get_courses_by_university_id($data['u_name']);
			$this->load->view('student/student_header');
			
			$this->load->view('student/student_view_courses',$data);
			$this->load->view('student/student_footer');
		}else{
			$this->index();
		}
	}
	public function addSignup(){

	//	$this->form_validation->set_rules('first_name','Name','trim|required');
		$data['username']=$this->input->get_post('username');
		$data['password']=$this->input->get_post('password');
		$data['repassword']=$this->input->get_post('repassword');
		$data['status']=1;


		if($data['password']==$data['repassword']){


			$existance = $this->OnlineModel->checkUsernameExistance($data);


			if($existance==true){
				$res=$this->OnlineModel->addSignup($data);
				//$res1=$this->OnlineModel->addLogin($data);

				?> <script type="text/javascript">
					alert('Signup succesfull');
					location.href="<?php echo base_url(); ?>";
					</script> <?php

				$this->login();
			}else{
				?> <script type="text/javascript">
					alert('Email,username or phone already used by another user');
					</script> <?php
					$this->login();
			}
		}else{
			?> <script type="text/javascript">
					alert('password mismatch');
					</script> <?php
		}
		
	}
	public function studentHome(){
		if( $this->session->userdata('username')){

			$this->load->view('student/student_header');
			$this->load->view('student/student_home');
			$this->load->view('student/student_footer');
		}else{
			$this->index();
		}
		
	}
	public function studentLogin()
	{
		$login_type=$this->input->get_post('login_type');
		$data['username']=$this->input->get_post('username');
		$data['password']=$this->input->get_post('pass');
		$data['status']='1';

		if($login_type==1){
			$res=$this->OnlineModel->checkLogin($data);
			// // log_message('error',$res);
			if($res==true){
				$username=$data['username'];
			//	$id = $this->OnlineModel->getId($username)
				$this->load->library('session');
				$this->session->set_userdata('username', $username);
				echo $this->session->userdata('username').'</h5>';
				?> <script type="text/javascript">
				alert('Login successful');
				</script> <?php
				$this->email($data);
				$this->studentHome();
			}else{
				?> <script type="text/javascript">
				alert('Incorrect username or password');
				</script> <?php
				$this->login();
			}
		}
		else if ($login_type==2) {
			$res=$this->OnlineModel->checkLogin_consultancy($data);
			// // log_message('error',$res);
			if($res==true){
				$username=$data['username'];
				$this->load->library('session');
				$this->session->set_userdata('username, $username');
				//echo '<h5>Welcome - '.$this->session->userdata('username').'</h5>';
				?> <script type="text/javascript">
					alert('Login successful');
				</script> <?php
				$this->load->view('consultancy/consultancy_header');
				$this->load->view('consultancy/consultancy_home');
				$this->load->view('consultancy/consultancy_footer');

			}else{
				?> <script type="text/javascript">
					alert('Incorrect username or password');
				</script><?php

			}
		}
		else if ($login_type==3) {
			$res=$this->OnlineModel->checkLogin_university($data);
			// // log_message('error',$res);
			if($res==true){

				$this->session->set_userdata('email, $email');
				?> <script type="text/javascript">
					alert('Login successful');
				</script> <?php
				$this->load->view('university/university_header');

				$this->load->view('university/university_home');
				$this->load->view('university/university_footer');

			}else{
				?> <script type="text/javascript">
					alert('Incorrect username or password');
				</script><?php
				
			}
		}
		
	}
	public function adminLogin(){
		$data['username']=$this->input->get_post('username');
		$data['password']=$this->input->get_post('password');
		$data['status']='1';

		$res1=$this->OnlineModel->checkAdminLogin($data);

		?> <script type="text/javascript">
			alert('Admin login succesfull');
			</script> <?php
	}
	public function checkConsultancy(){
		if( $this->session->userdata('username')){


			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$this->load->view('student/student_header');
			$this->load->view('student/student_check_consultancy',$data);
			$this->load->view('student/student_footer');
		}else{
			?> <script type="text/javascript">
			alert('Please login again');
			</script> <?php
			$this->login();
		}
	}
		public function view_consultancy_by_id($id=null){
		$id=$this->input->get_post('id');
		$data['consultancy']= $this->OnlineModel->get_consutancy_by_id($id);
		// print_r($data['consultancy']);

			$this->load->view('student/student_header');
			$this->load->view('student/student_single_consultancy',$data);
			$this->load->view('student/student_footer');

	}
	public function view_university_by_id($id=null){
		$id=$this->input->get_post('id');
		$data['university']= $this->OnlineModel->get_university_by_id($id);
		// print_r($data['consultancy']);

			$this->load->view('student/student_header');
			$this->load->view('student/student_single_university',$data);
			$this->load->view('student/student_footer');
	}
	public function admissionStatus(){
		if( $this->session->userdata('username')){
			$username=$this->session->userdata('username');
			// log_message('error',$username);
			$res=$this->OnlineModel->get_student_id_by_uname($username);
			 $data['student_id'] = $res['logno'];
			$data['admission_status']=$this->OnlineModel->admissionStatus( $data['student_id']);
			$data1['admissionStatus']=$data['admission_status']->row_array();
			// print_r($data1['admissionStatus']['course_id']);
			$data['course_name']=$this->OnlineModel->getCourse_name_by_id($data1['admissionStatus']['course_id']);
			// print_r($data['course_name']['course_name']);
			$this->load->view('student/student_header');
			$this->load->view('student/student_view_admission_status',$data);
			$this->load->view('student/student_footer');
		 }else{
			?> <script type="text/javascript">
			alert('Please login again');
			</script> <?php
			$this->login();
		}
	}
	public function checkEligibility(){
		if( $this->session->userdata('username')){
			$data['eligibility'] = $this->input->get_post('eligibility');
			$data['course']=$this->OnlineModel->getCourse();
			$this->load->view('student/student_header');
			$this->load->view('student/student_check_eligibility',$data);
			$this->load->view('student/student_footer');
		}
		else{
			?> <script type="text/javascript">
			alert('Please login again');
			</script> <?php
			$this->login();
		}
	}
	public function applyForAdmission1(){
		if( $this->session->userdata('username')){
			$data=array();
			$username=$this->session->userdata('username');
			// // log_message('error',$username);
			$res=$this->OnlineModel->get_student_id_by_uname($username);
			 $data['student_id'] = $res['logno'];
			 // echo  $data['student_id'];
			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$data['university']=$this->OnlineModel->getUniversity();
			$data['course']=$this->OnlineModel->getCourse();
			$this->load->view('student/student_header');
			$this->load->view('student/student_apply_for_admission1',$data);
			$this->load->view('student/student_footer');

			$data['email']=$this->session->userdata('username');
			// $res = $this->OnlineModel->applyAdmission1($data);
			// if($res==1){
			// 	?> <script type="text/javascript">
			// 	alert('Saved');
			// 	</script> <?php

			// 	$this->applyForAdmission2();
			// }
			// else
			// {
			// 	?> <script type="text/javascript">
			// 	alert('Failed');
			// 	</script> <?php
			// 	$this->login();
			// }
		}
	}
	public function applyForAdmission2(){
		if( $this->session->userdata('username')){
			$data=array();
			$data1=array();
			$course = $this->input->get_post('course');
			$data1['university_id'] = $this->input->get_post('university');

			$data1['course_id'] = $this->OnlineModel->get_course_id_by_university_and_course($course,$data1['university_id']);
			// log_message('error',"=========================================================");

			// // log_message('error',$data1['course_id']);
			$data1['course_id']= $data1['course_id']['id'];
			$data1['consultancy_id'] = $this->input->get_post('consultancy');
			$data1['student_id'] = $this->input->get_post('student_id');
			 $res = $this->OnlineModel->applyAdmission1($data1);
			 if ($res) {
			 print_r($res);

			 	// code...
			 	$data['id']=$res;
			$data['course']=$this->OnlineModel->getCourse();
			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$data['university']=$this->OnlineModel->getUniversity();
			$this->load->view('student/student_header');
			$this->load->view('student/student_apply_for_admission2',$data);
			$this->load->view('student/student_footer');
			 }
			 else{
			 	redirect('welcome/applyForAdmission1');
			 }

			// $data['first_name']=$this->input->get_post('first_name');
			// $data['middle_name']=$this->input->get_post('middle_name');
			// $data['last_name']=$this->input->get_post('last_name');
			// $data['birth_date']=$this->input->get_post('birth_date');
			// $data['gender']=$this->input->get_post('gender');
			// $data['nationality']=$this->input->get_post('nationality');
			// $data['state']=$this->input->get_post('state');
			// $data['city']=$this->input->get_post('city');
			// $data['pin']=$this->input->get_post('pin');
			// $data['phone']=$this->input->get_post('phone');
			// $data['email']=$this->input->get_post('email');
			// $data['guardian']=$this->input->get_post('guardian');
			

			// $data['email']=$this->session->userdata('username');
			// if($res==1){
			// 	?> <script type="text/javascript">
			// 	alert('Saved');
			// 	</script> <?php

			// 	$this->applyForAdmission3();
			// }
			// else
			// {
			// 	?> <script type="text/javascript">
			// 	alert('Failed');
			// 	</script> <?php
			// 	$this->login();
			// }
		}
	}
	public function applyAdmission3(){
		 	$first_name=$this->input->get_post('first_name');
			 $middle_name=$this->input->get_post('middle_name');
			$last_name=$this->input->get_post('last_name');
			 $birth_date=$this->input->get_post('birth_date');
			 $gender=$this->input->get_post('gender');
			 $nationality=$this->input->get_post('nationality');
			 $state=$this->input->get_post('state');
			 $city=$this->input->get_post('city');
			 $pin=$this->input->get_post('pin');
			 $phone=$this->input->get_post('phone');
			 $email=$this->input->get_post('email');
			 $guardian=$this->input->get_post('guardian');
			 $insert_id= $this->input->get_post('insert_id');
				
			 $res = $this->OnlineModel->applyAdmission2($first_name,$middle_name,$last_name,$birth_date,$gender,$nationality,$state,$city,$pin,$phone,$email,$guardian,$insert_id);
			 // ----------------------------------------------------------------------
			 	$data['course']=$this->OnlineModel->getCourse();
			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$data['university']=$this->OnlineModel->getUniversity();
				$data['id']= $insert_id;
			 		$this->load->view('student/student_header');
			$this->load->view('student/student_apply_for_admission3',$data);
			$this->load->view('student/student_footer');
			 
	}
	


	public function edit_application_3(){
		 	$first_name=$this->input->get_post('first_name');
			 $middle_name=$this->input->get_post('middle_name');
			$last_name=$this->input->get_post('last_name');
			 $birth_date=$this->input->get_post('birth_date');
			 $gender=$this->input->get_post('gender');
			 $nationality=$this->input->get_post('nationality');
			 $state=$this->input->get_post('state');
			 $city=$this->input->get_post('city');
			 $pin=$this->input->get_post('pin');
			 $phone=$this->input->get_post('phone');
			 $email=$this->input->get_post('email');
			 $guardian=$this->input->get_post('guardian');
			 $insert_id= $this->input->get_post('insert_id');
				
			 $res = $this->OnlineModel->applyAdmission2($first_name,$middle_name,$last_name,$birth_date,$gender,$nationality,$state,$city,$pin,$phone,$email,$guardian,$insert_id);
			 // ----------------------------------------------------------------------
			 	$data['course']=$this->OnlineModel->getCourse();
			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$data['university']=$this->OnlineModel->getUniversity();
				$data['id']= $insert_id;
				// echo $insert_id;
	$data['admission']=$this->OnlineModel->get_application_by_id($insert_id);

			 		$this->load->view('student/student_header');
			$this->load->view('student/student_edit_application_3',$data);
			$this->load->view('student/student_footer');
			 
	}
	public function applyAdmission10(){
		if( $this->session->userdata('username')){
			$data12=array();
			$this->load->library('upload');
			$config = array();
			$id=$this->input->get_post('id');
			$config['upload_path'] =  realpath(APPPATH . '../images');
			// log_message('error',$config['upload_path']);
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']      = '200000';
			$config['min_width']     = '14';
			$config['min_height']    = '7';
		    $this->upload->initialize($config);

		    $this->upload->do_upload('transcripts');
			$transcripts= $this->upload->data('file_name');
			$this->upload->do_upload('ielts');
			$ielts= $this->upload->data('file_name');
			$this->upload->do_upload('resume');
			$resume=$this->upload->data('file_name');
			$this->upload->do_upload('educred');
			$educred=$this->upload->data('file_name');
			$this->upload->do_upload('graducertificate');
			$graducertificate=$this->upload->data('file_name');

			// $this->load->view('student/student_header');
			// $this->load->view('student/student_apply_for_admission3',$data);
			// $this->load->view('student/student_footer');

			$data['email']=$this->session->userdata('username');
			$res = $this->OnlineModel->update_trans($id,$transcripts ,$ielts,$resume,$educred,$graducertificate);
			if($res==1){
				?> <script type="text/javascript">
				alert('Saved');
				</script> <?php

				// $this->applyForAdmission4();
				$data['id']=$this->input->get_post('id');
			$this->load->view('student/student_header');
			$this->load->view('student/student_apply_for_admission4',$data);
			$this->load->view('student/student_footer');
			}
			else
			{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php
				$this->login();
			}
		}
	}
	public function applyAdmission4(){
		if( $this->session->userdata('username')){
			$data12=array();
			$this->load->library('upload');
			$config = array();

			$config['upload_path'] =  realpath(APPPATH . '../images');
			// log_message('error',$config['upload_path']);
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']      = '200000';
			$config['min_width']     = '14';
			$config['min_height']    = '7';
		    $this->upload->initialize($config);

		    $this->upload->do_upload('passport');
			$passport=$this->upload->data('file_name');
			$this->upload->do_upload('visa/eta');
			$visa_eta=$this->upload->data('file_name');
			$this->upload->do_upload('adhar');
			$adhar=$this->upload->data('file_name');
			$this->upload->do_upload('pan');
			$pan=$this->upload->data('file_name');
			$this->upload->do_upload('bank_passbook');
			$bank_passbook=$this->upload->data('file_name');
			$this->upload->do_upload('police_clearance');
			$police_clearance=$this->upload->data('file_name');
			$this->upload->do_upload('selfdeclaration');
			$self_declaration=$this->upload->data('file_name');
			$this->upload->do_upload('medical_document');
			$medical_document=$this->upload->data('file_name');
			$this->upload->do_upload('prooffund');
			$prooffund=$this->upload->data('file_name');
			$this->upload->do_upload('vaccine');
			$vaccine=$this->upload->data('file_name');
					$id=$this->input->get_post('id');
		    
			$res = $this->OnlineModel->update_docs($passport,$visa_eta, $adhar,$pan, $bank_passbook,  $police_clearance,$self_declaration ,$medical_document, $prooffund,$vaccine, $id );


			if($res==1){
				?> <script type="text/javascript">
				alert('Saved');
				</script> <?php

			$data['email']=$this->session->userdata('username');
			$data['id']= $id;
			$this->load->view('student/student_header');
			$this->load->view('student/student_apply_for_admission5',$data);
			$this->load->view('student/student_footer');
				// $this->applyForAdmission5();
			}
			else
			{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php
				$this->login();
			}
		}
	}
	public function applyForAdmission5(){
		if( $this->session->userdata('username')){
			$data12=array();
			$this->load->library('upload');
			$config = array();

			$config['upload_path'] =  realpath(APPPATH . '../images');
			// log_message('error',$config['upload_path']);
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']      = '200000';
			// $config['min_width']     = '14';
			// $config['min_height']    = '7';
		    $this->upload->initialize($config);

		    $this->upload->do_upload('photo');
			$photo= $this->upload->data('file_name');
			// log_message('error',$photo);

			$this->upload->do_upload('signature');
			$signature= $this->upload->data('file_name');
		    			// log_message('error',$signature);


			$data['email']=$this->session->userdata('username');
			$id=$this->input->get_post('id');
		    
			$res = $this->OnlineModel->update_photo($photo, $signature, $id);
			if($res==1){
				?> <script type="text/javascript">
				alert('submitted');
				</script> <?php
		redirect('welcome/studentHome');
				// $this->studentApplication();
			}
			else
			{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php
				$this->login();
			}
		}
	}

	public function applyAdmission(){
		if( $this->session->userdata('username')){

			$data=array();

			$data['consultancy_id']=$this->input->get_post('consultancy');
			$data['university_id']=$this->input->get_post('university');
			$data['course_id']=$this->input->get_post('course');
			$data['first_name']=$this->input->get_post('first_name');
			$data['middle_name']=$this->input->get_post('middle_name');
			$data['last_name']=$this->input->get_post('last_name');
			$data['birth_date']=$this->input->get_post('birth_date');
			$data['gender']=$this->input->get_post('gender');
			$data['nationality']=$this->input->get_post('nationality');
			$data['state']=$this->input->get_post('state');
			$data['city']=$this->input->get_post('city');
			$data['pin']=$this->input->get_post('pin');
			$data['phone']=$this->input->get_post('phone');
			$data['email']=$this->input->get_post('email');
			$data['guardian']=$this->input->get_post('guardian');

			$data12=array();
			$this->load->library('upload');
			$config = array();

			$config['upload_path'] =  realpath(APPPATH . '../images');
			// log_message('error',$config['upload_path']);
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']      = '200000';
			$config['min_width']     = '14';
			$config['min_height']    = '7';
		    $this->upload->initialize($config);
		    $this->upload->do_upload('photo');
			$data['photo']= $this->upload->data('file_name');
			$this->upload->do_upload('signature');
			$data['signature']= $this->upload->data('file_name');
			$this->upload->do_upload('transcripts');
			$data['transcripts']= $this->upload->data('file_name');
			$this->upload->do_upload('ielts');
			$data['ielts']= $this->upload->data('file_name');
			$this->upload->do_upload('resume');
			$data['resume']=$this->upload->data('file_name');
			$this->upload->do_upload('educred');
			$data['educred']=$this->upload->data('file_name');
			$this->upload->do_upload('graducertificate');
			$data['graducertificate']=$this->upload->data('file_name');
			$this->upload->do_upload('passport');
			$data['passport']=$this->upload->data('file_name');
			$this->upload->do_upload('visa/eta');
			$data['visa/eta']=$this->upload->data('file_name');
			$this->upload->do_upload('adhar');
			$data['adhar']=$this->upload->data('file_name');
			$this->upload->do_upload('pan');
			$data['pan']=$this->upload->data('file_name');
			$this->upload->do_upload('bank_passbook');
			$data['bank_passbook']=$this->upload->data('file_name');
			$this->upload->do_upload('police_clearance');
			$data['police_clearance']=$this->upload->data('file_name');
			$this->upload->do_upload('selfdeclaration');
			$data['self_declaration']=$this->upload->data('file_name');
			$this->upload->do_upload('medical_document');
			$data['medical_document']=$this->upload->data('file_name');
			$this->upload->do_upload('prooffund');
			$data['prooffund']=$this->upload->data('file_name');
			$this->upload->do_upload('vaccine');
			$data['vaccine']=$this->upload->data('file_name');
			$data['status']='pending';

			$data['email']=$this->session->userdata('username');

			$res = $this->OnlineModel->applyAdmission($data);
			if($res==1){
				?> <script type="text/javascript">
				alert('Applied');
				</script> <?php

				$this->applyForAdmission();
			}
			else
			{
				?> <script type="text/javascript">
				alert('Please login again');
				</script> <?php
				$this->login();
			}
		}
	}
	
	public function email($data){

		$this->load->view('email/email',$data);
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
        $this->index();
	}

	// todo need to check eligibility here
	public function afterChekingEligibility(){
		$id = $this->input->get_post('eligibility');
		$checkEligibility = $this->OnlineModel->get_eligibility_by_id($id);
		print_r($checkEligibility);
		$Highest_qualification =$this->input->get_post('degreecourse');

		$degree_special = $this->input->get_post('degreespecialisation');

		$degree_percentage	=	$this->input->get_post('degreemark');

		$ielts_point	=	$this->input->get_post('ieltsmark');

		

		if ($Highest_qualification != $checkEligibility['Highest_qualification'] || $degree_special != $checkEligibility['degree_special'] ) {
			// log_message('error', "if case 1");
			?>	
		<script>
			alert("Not Eligible");
			location.href="<?php echo base_url().'index.php/welcome/studentViewCourses' ?>";
		</script>
			<?php

		}
		if ($degree_percentage < $checkEligibility['degree_percentage'] || $ielts_point < $checkEligibility['ielts_point']) {
				?>	
		<script>
			alert("Not Eligible");
			location.href="<?php echo base_url().'index.php/welcome/studentViewCourses' ?>";
		</script>
			<?php
		}
		?>
		<script type="text/javascript">
				alert('You are eligible');
				</script>
				 <?php

				$this->applyForAdmission();
	}
        public function loginRole(){
    	$data['username']=$this->input->get_post('username');
    	$data['password']=$this->input->get_post('pass');
    	$role=$this->OnlineModel->getRole($data);
    	//// log_message('error',$role);
    	if($role){
    		$username=$data['username'];
    		$this->load->library('session');
			$this->session->set_userdata('username', $username);
    	if ($role['role']=='admin') {
    		?> <script type="text/javascript">
			alert('Admin Logged in');
			</script> <?php
			$this->load->view('admin/admin_header');
			$this->load->view('admin/admin_home');
			$this->load->view('admin/admin_footer');
    	}
    	elseif ($role['role']=='student') {
    		?> <script type="text/javascript">
			alert('Student Logged in');
			</script> <?php
			$this->studentHome();
    	}
    	elseif ($role['role']=='consultancy') {
    		?> <script type="text/javascript">
			alert('Consultancy Logged in');
			</script> <?php
			$this->load->view('consultancy/consultancy_header');
			$this->load->view('consultancy/consultancy_home');
			$this->load->view('consultancy/consultancy_footer');
    	}
    	elseif ($role['role']=='university') {
    		?> <script type="text/javascript">
			alert('University Logged in');
			</script> <?php
			$this->load->view('university/university_header');
			$this->load->view('university/university_home');
			//$this->load->view('university/university_footer');
    	}
    	
    }else{
    	?>
    	<script>
    		alert('Invalid details');
    	</script>
    	<?php 
    	$this->login();
    }
}

public function get_accepted_universities_by_consultancy_id(){
	// log_message('error',"get_accepted_universities_by_consultancy_id");
	$id=$this->input->get_post('id');
	$result=$this->OnlineModel->get_accepted_universities_by_consultancy_id($id);
	echo json_encode($result);
}
public function get_courses_by_university_id(){
		// log_message('error',"get_courses_by_university_id");
	$id=$this->input->get_post('id');
	$result=$this->OnlineModel->get_courses_by_university_id($id);
	echo json_encode($result);
}
public function get_accepted_universities_by_course_name(){
	$c_name=$this->input->get_post('id');
	$res=$this->OnlineModel->get_accepted_universities_by_course_name($c_name);
	echo json_encode($res);
}
public function get_consultancy_by_university_id(){
	$uid=$this->input->get_post('id');
	$res=$this->OnlineModel->get_consultancy_by_university_id($uid);
	echo json_encode($res);

}
public function get_application_existence(){
	// log_message('error',"get_application_existence");

	$id=$this->input->get_post('id');
	$coursename=$this->input->get_post('course');
	$course_array=$this->OnlineModel->get_course_id_by_university_and_course($coursename,$id);
	// log_message('error',$course_array['id']);
	$course=$course_array['id'];
	$username=$this->session->userdata('username');
	// // log_message('error',$username);
	$res=$this->OnlineModel->get_student_id_by_uname($username);
	$student_id = $res['logno'];

	// $student_id=$this->input->get_post('student_id');

	$res=$this->OnlineModel->get_application_existence($id,$course,$student_id);
	echo json_encode($res);
}
public function edit_application(){
	$data=array();
	$application_id=$this->input->get_post('id');
	$data['admission']=$this->OnlineModel->get_application_by_id($application_id);
	$username=$this->session->userdata('username');
	// // log_message('error',$username);
	$res=$this->OnlineModel->get_student_id_by_uname($username);
	$data['student_id'] = $res['logno'];
	// echo  $data['student_id'];
	$data['consultancy']=$this->OnlineModel->getConsultancy();
	$data['university']=$this->OnlineModel->getUniversity();
	$data['course']=$this->OnlineModel->getCourse();
	$this->load->view('student/student_header');
	$this->load->view('student/student_edit_application2',$data);
	$this->load->view('student/student_footer');

	}

	public function edit_admission2(){
		if( $this->session->userdata('username')){
			$data=array();
			$data1=array();
			$course = $this->input->get_post('course');
			$university_id = $this->input->get_post('university');

			$course_id = $this->OnlineModel->get_course_id_by_university_and_course($course,$data1['university_id']);
			// log_message('error',"=========================================================");

			// log_message('error',$data1['course_id']);
			$application_id = $this->input->get_post('application_id');
			$consultancy_id = $this->input->get_post('consultancy');
			$student_id = $this->input->get_post('student_id');
			 $res = $this->OnlineModel->edit_admission1($university_id,$course_id,$admission_id,$consultancy_id,$student_id);
			 if ($res) {
			 print_r($res);

			 	// code...
			 	$data['id']=$res;
			$data['course']=$this->OnlineModel->getCourse();
			$data['consultancy']=$this->OnlineModel->getConsultancy();
			$data['university']=$this->OnlineModel->getUniversity();
			$this->load->view('student/student_header');
			$this->load->view('student/student_edit_application2',$data);
			$this->load->view('student/student_footer');
			 }else{
			 	redirect('welcome/edit_application');
			 }

		}
	}



	public function edit_application_4(){
		if( $this->session->userdata('username')){
			$data12=array();
			$this->load->library('upload');
			$config = array();
			$id=$this->input->get_post('id');
			$config['upload_path'] =  realpath(APPPATH . '../images');
			// log_message('error',$config['upload_path']);
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']      = '200000';
			$config['min_width']     = '14';
			$config['min_height']    = '7';
		    $this->upload->initialize($config);

		    $this->upload->do_upload('transcripts');
			$transcripts= $this->upload->data('file_name');
			if ($transcripts==null || $transcripts=='') {
				// code...
				$transcripts=$this->input->get_post('transcripts_text');
			}
			$this->upload->do_upload('ielts');
			$ielts= $this->upload->data('file_name');
			if ($ielts==null || $ielts=='') {
				// code...
				$ielts=$this->input->get_post('ielts_text');
			}
			$this->upload->do_upload('resume');
			$resume=$this->upload->data('file_name');
			if ($resume==null || $resume=='') {
				// code...
				$resume=$this->input->get_post('resume_text');
			}
			$this->upload->do_upload('educred');
			$educred=$this->upload->data('file_name');
			if ($educred==null || $educred=='') {
				// code...
				$educred=$this->input->get_post('educred_text');
			}
			$this->upload->do_upload('graducertificate');
			$graducertificate=$this->upload->data('file_name');
			if ($graducertificate==null || $graducertificate=='') {
				// code...
				$graducertificate=$this->input->get_post('graducertificate_text');
			}
			// $this->load->view('student/student_header');
			// $this->load->view('student/student_apply_for_admission3',$data);
			// $this->load->view('student/student_footer');

			$data['email']=$this->session->userdata('username');
			 $res = $this->OnlineModel->update_trans($id,$transcripts ,$ielts,$resume,$educred,$graducertificate);
			 if($res==1){
				?> <script type="text/javascript">
				// alert('Saved');
				</script> <?php

				// $this->applyForAdmission4();
				$data['id']=$this->input->get_post('id');
	$data['admission']=$this->OnlineModel->get_application_by_id($data['id']);

			$this->load->view('student/student_header');
			$this->load->view('student/student_edit_application4',$data);
			$this->load->view('student/student_footer');
			}
			else
			{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php
				$this->login();
			}
		}
	}
		public function edit_application_5(){
		if( $this->session->userdata('username')){
			$data12=array();
			$this->load->library('upload');
			$config = array();

			$config['upload_path'] =  realpath(APPPATH . '../images');
			// log_message('error',$config['upload_path']);
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']      = '200000';
			$config['min_width']     = '14';
			$config['min_height']    = '7';
		    $this->upload->initialize($config);

		    $this->upload->do_upload('passport');
			$passport=$this->upload->data('file_name');
			if ($passport==null || $passport=='') {
				// code...
				$passport=$this->input->get_post('passport_text');
			}
			$this->upload->do_upload('visa/eta');
			$visa_eta=$this->upload->data('file_name');
			if ($visa_eta==null || $visa_eta=='') {
				// code...
				$visa_eta=$this->input->get_post('visa_eta_text');
			}
			$this->upload->do_upload('adhar');
			$adhar=$this->upload->data('file_name');
			if ($adhar==null || $adhar=='') {
				// code...
				$adhar=$this->input->get_post('adhar_text');
			}
			$this->upload->do_upload('pan');
			$pan=$this->upload->data('file_name');
			if ($pan==null || $pan=='') {
				// code...
				$pan=$this->input->get_post('pan_text');
			}
			$this->upload->do_upload('bank_passbook');
			$bank_passbook=$this->upload->data('file_name');
			if ($bank_passbook==null || $bank_passbook=='') {
				// code...
				$bank_passbook=$this->input->get_post('bank_passbook_text');
			}
			$this->upload->do_upload('police_clearance');
			$police_clearance=$this->upload->data('file_name');
			if ($police_clearance==null || $police_clearance=='') {
				// code...
				$police_clearance=$this->input->get_post('police_clearance_text');
			}
			$this->upload->do_upload('selfdeclaration');
			$self_declaration=$this->upload->data('file_name');
			if ($self_declaration==null || $self_declaration=='') {
				// code...
				$self_declaration=$this->input->get_post('self_declaration_text');
			}
			$this->upload->do_upload('medical_document');
			$medical_document=$this->upload->data('file_name');
			if ($medical_document==null || $medical_document=='') {
				// code...
				$medical_document=$this->input->get_post('medical_document_text');
			}
			$this->upload->do_upload('prooffund');
			$prooffund=$this->upload->data('file_name');
			if ($prooffund==null || $prooffund=='') {
				// code...
				$prooffund=$this->input->get_post('prooffund_text');
			}
			$this->upload->do_upload('vaccine');
			$vaccine=$this->upload->data('file_name');
			if ($vaccine==null || $vaccine=='') {
				// code...
				$vaccine=$this->input->get_post('vaccine_text');
			}


					$id=$this->input->get_post('id');
		    
			$res = $this->OnlineModel->update_docs($passport,$visa_eta, $adhar,$pan, $bank_passbook,  $police_clearance,$self_declaration ,$medical_document, $prooffund,$vaccine, $id );


			if($res==1){
				?> <script type="text/javascript">
				alert('Saved');
				</script> <?php

			$data['email']=$this->session->userdata('username');
			$data['id']= $id;
	$data['admission']=$this->OnlineModel->get_application_by_id($id);

			$this->load->view('student/student_header');
			$this->load->view('student/student_edit_application_5',$data);
			$this->load->view('student/student_footer');
				// $this->applyForAdmission5();
			}
			else
			{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php
				$this->login();
			}
		}
	}



		public function edit_application_6(){
		if( $this->session->userdata('username')){
			$data12=array();
			$this->load->library('upload');
			$config = array();

			$config['upload_path'] =  realpath(APPPATH . '../images');
			// log_message('error',$config['upload_path']);
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']      = '200000';
			// $config['min_width']     = '14';
			// $config['min_height']    = '7';
		    $this->upload->initialize($config);

		    $this->upload->do_upload('photo');
			$photo= $this->upload->data('file_name');

			if ($photo==null || $photo=='') {
				// code...
				$photo=$this->input->get_post('photo_text');
			}
			// log_message('error',$photo);

			$this->upload->do_upload('signature');
			$signature= $this->upload->data('file_name');
		    			// log_message('error',$signature);


			if ($signature==null || $signature=='') {
				// code...
				$signature=$this->input->get_post('signature_text');
			}
			$data['email']=$this->session->userdata('username');
			$id=$this->input->get_post('id');
		    
			$res = $this->OnlineModel->update_photo($photo, $signature, $id);
			if($res==1){
				?> <script type="text/javascript">
				alert('submitted');
				</script> <?php
		redirect('welcome/studentHome');
				// $this->studentApplication();
			}
			else
			{
				?> <script type="text/javascript">
				alert('Failed');
				</script> <?php
				$this->login();
			}
		}
	}
	public function notification(){
		if( $this->session->userdata('username')){
			$username=$this->session->userdata('username');
			log_message('error',$username);
			$res=$this->OnlineModel->get_student_id_by_uname($username);
			 $data['student_id'] = $res['logno'];
			$data['admission_status']=$this->OnlineModel->admissionStatus( $data['student_id']);
			$this->load->view('student/student_header');
			$this->load->view('student/notification',$data);
			$this->load->view('student/student_footer');
		}else{
			?> <script type="text/javascript">
			alert('Please login again');
			</script> <?php
			$this->login();
		}
	}
	public function generate_report(){
		$id=$this->input->get_post('id');
		$data=$this->OnlineModel->get_application_by_id_for_report($id);
		$this->load->view('student/student_application_report',$data);	
	}

	public function get_payment_status_by_id(){
		log_message('error',"==============get_payment_status_by_id=============");
		$id=$this->input->get_post('id');
		$data['payment']=$this->OnlineModel->get_payment_status_by_id($id);
		echo json_encode($data);
	}
	public function complete_payment_by_student(){
		$id=$this->input->get('id');
		$course_fee=$this->OnlineModel->get_course_fee_by_admission_id($id);
		$course_fee['stud_id']	=	$id;
		// print_r($course_fee);
		$this->load->view('student/payment_page',$course_fee);
		// $data=$this->OnlineModel->complete_payment_by_student($id);

	}
	public function finish_payment(){
		$data['amount']	=	$this->input->get_post('fees1');
		$data['application_id']	=	$this->input->get_post('student_id');

		$data['student_paid']	=	1;
		$data['status']	=	1;
		$data['transaction_id']	=	$this->input->get_post('razorpay_payment_id');

			$res=$this->OnlineModel->insert_transaction($data);
			// echo json_encode($res);
		redirect(base_url().'index.php/Welcome/admissionStatus');


	}
	public function update_payment_by_student(){
		$id=$this->input->get('id');
		$payment_id=$this->input->get('payment_id');

		$consultancy_paid=1;
		$status=2;
			$res=$this->OnlineModel->update_transaction($id,$consultancy_paid,$status,$payment_id);
			// echo json_encode($res);
		redirect(base_url().'index.php/Consultancycontroller/manageStudentApplications');

	}
	public function generate_reciept(){
		$id=$this->input->get('id');
		$course_fee=$this->OnlineModel->get_course_fee_by_admission_id($id);
		// print_r($course_fee);
		$this->load->view('student/student_fee_reciept',$course_fee);

	}

}
