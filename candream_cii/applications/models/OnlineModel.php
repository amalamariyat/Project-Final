<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OnlineModel extends CI_Model {

	
	public function addSignup($data)
	{
		$username=$data['username'];
		$role='student';
		$password=$data['password'];
		$status=1;
		//$result=$this->db->insert('signup',$data);
		$ress = $this->db->query("insert into `login`(`role`, `username`, `password`, `repassword`,`status`) values ('$role', '$username', '$password', '$password', '$status')");
        return $ress;
	}
	public function addLogin($data)
	{
		$login['username']=$data['username'];
		$login['password']=$data['password'];
		$login['status']=$data['status'];
		$result=$this->db->insert('login',$login);
        return $result;
	}
	public function checkLogin($data){
		$uname=$data['username'];
		$pword=$data['password'];
		$result = $this->db->query("SELECT * FROM signup WHERE username='$uname' AND PASSWORD='$pword'");
		//// log_message('error',$result->num_rows());
		if ($result->num_rows()>0){
      		return true;
		}else{
      		return false;
		}
	}
	public function checkLogin_consultancy($data){
		$uname=$data['username'];
		$pword=$data['password'];
		$result = $this->db->query("SELECT * FROM cunsultancy WHERE email='$uname' AND password='$pword' AND status=1");
		//// log_message('error',$result->num_rows());
		if ($result->num_rows()>0){
      		return true;
		}else{
      		return false;
		}
	}
	public function checkLogin_university($data){
		$uname=$data['username'];
		$pword=$data['password'];
		$result = $this->db->query("SELECT * FROM university WHERE email='$uname' AND password='$pword' AND status =1");
		//// log_message('error',$result->num_rows());
		if ($result->num_rows()>0){
      		return true;
		}else{
      		return false;
		}
	}
	public function checkAdminLogin($data){
		$username=$data['username'];
		$password=$data['password'];
		$result = $this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
		if($result->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}
	public function getConsultancy(){
		$res = $this->db->query("SELECT * FROM cunsultancy");
		return $res;
	}
	public function get_consutancy_by_id($id){
		$res=$this->db->query("SELECT * FROM `cunsultancy` WHERE `cunsultancy_id`=$id");
		return $res->row_array();
	}
	public function get_university_by_id($id){
		$res=$this->db->query("SELECT * FROM `university` WHERE `university_id`=$id");
		return $res->row_array();
	}
	public function getAdmission(){
		$res = $this->db->query("SELECT *,`admission`.`status` AS astatus FROM `admission`");
		 // INNER JOIN `signup` USING (student_id)
		return $res;
	}
	public function acceptConsultancy($id){
		$res = $this->db->query("UPDATE `cunsultancy` SET `status`='1' WHERE `cunsultancy_id`='$id'");
		$res = $this->db->query("UPDATE `login` SET `status`='1' WHERE `ref_id`='$id'");

		return true;
	}
	public function rejectConsultancy($id){
		$res = $this->db->query("UPDATE `cunsultancy` SET `status`='0' WHERE `cunsultancy_id`='$id'");
		$res = $this->db->query("UPDATE `login` SET `status`='0' WHERE `ref_id`='$id'");

		return true;
	}
	public function addUniversity($data,$data1){
		$username=$data['email'];
		$role='university';
		$password=$data1['password'];
		$res = $this->db->insert("university",$data);
		$ref_id=$this->db->insert_id();

		$ress = $this->db->query("insert into `login`(`role`, `username`, `password`, `repassword`,`ref_id`) values ('$role', '$username', '$password', '$password', '$ref_id')");
		return $ref_id;
	}
	public function add_courses_under_university($data){
		$result=$this->db->insert('university_courses',$data);
		$res=$this->db->insert_id();
        return $res;
	}
	public function getadmissionForConsultancy($consultancy_id){
		$res = $this->db->query("SELECT  *, admission.phone AS ph,admission.email AS ad_mail, admission.status AS add_status FROM `admission` INNER JOIN university AS U ON U.university_id=admission.university_id  INNER JOIN university_courses AS UC ON UC.id=admission.course_id WHERE admission.consultancy_id='$consultancy_id' ORDER BY application_id DESC");
		return $res;
	}
	public function getUniversity(){
		$res = $this->db->query("SELECT * FROM `university`");
		return $res;
	}
	public function acceptUniversity($id){
		$res = $this->db->query("UPDATE `university` SET `status`='1' WHERE `university_id`='$id'");
		$res = $this->db->query("UPDATE `login` SET `status`='1' WHERE `ref_id`='$id'");

		return true;
	}
	
	public function rejectUniversity($id){
		$res = $this->db->query("UPDATE `university` SET `status`='0' WHERE `university_id`='$id'");
		$res = $this->db->query("UPDATE `login` SET `status`='0' WHERE `ref_id`='$id'");

		return true;
	}
	public function acceptAdmission($id){
		$res = $this->db->query("UPDATE `admission` SET `status`='accepted' WHERE `application_id`='$id'");
		return $res;
	}
	public function rejectAdmission($id){
		$res = $this->db->query("UPDATE `admission` SET `status`='rejected' WHERE `application_id`='$id'");
		return $res;
	}
	public function getCourse(){
		$res = $this->db->query("SELECT * FROM courses");
		return $res;
	}
	public function addCourse($data){
		$res = $this->db->insert("university_courses",$data);
		return $res;
	}
	public function addCoursebyAdmin($data){
				$res = $this->db->insert("courses",$data);
		return $res;

	}
	public function applyAdmission1($data){
		 $res = $this->db->insert('admission',$data);
		 // log_message('error',$this->db->last_query());
		// $ress = $this->db->query("insert into `admission`(`course_id`, `university_id`, `consultancy_id`) values ('$course_id', '$university_id', '$consultancy_id')");
		 $insert_id = $this->db->insert_id();
		 // log_message('error',$insert_id);

   return  $insert_id;
	}
	public function applyAdmission2($first_name,$middle_name,$last_name,$birth_date,$gender,$nationality,$state,$city,$pin,$phone,$email,$guardian,$insert_id){
		//$res = $this->db->insert('admission',$data);
		$ress = $this->db->query("UPDATE admission set first_name='$first_name',middle_name='$middle_name',last_name='$last_name', birth_date='$birth_date', gender='$gender',  nationality='$nationality', state='$state', city='$city', pin='$pin', phone='$phone',email='$email', guardian='$guardian', status=null  WHERE application_id = '$insert_id'");
		$insert_id = $this->db->insert_id();
		 // log_message('error',$insert_id);

   return  $insert_id;
	}
	public function update_trans($id,$transcripts,$ielts,$resume,$educred,$graducertificate){
		//$res = $this->db->insert('admission',$data);
		$res = $this->db->query("UPDATE admission  set transcripts='$transcripts', ielts='$ielts',resume='$resume',  graducertificate='$graducertificate' WHERE application_id='$id'");
		// log_message('error',$this->db->last_query());

		return $res;
	}
	public function update_docs($passport,$visa_eta, $adhar,$pan, $bank_passbook,  $police_clearance,$self_declaration ,$medical_document, $prooffund,$vaccine, $id ){

		$res = $this->db->query("UPDATE admission  set passport='$passport', `visa/eta`='$visa_eta',adhar='$adhar',  pan='$pan',  bank_passbook='$bank_passbook',  police_clearance='$police_clearance',  self_declaration='$self_declaration',  medical_document='$medical_document',  prooffund='$prooffund',  vaccine='$vaccine' WHERE application_id='$id'");
		// log_message('error',$this->db->last_query());

		return $res;
	}

		public function update_photo($signature,$photo, $id){

		$res = $this->db->query("UPDATE admission  set signature='$signature', photo='$photo' WHERE application_id='$id'");
		// log_message('error',$this->db->last_query());
		return $res;
	}


	public function updateUniversity($data){
		$id=$data['university_id'];
		$name=$data['university_name'];
		$place=$data['place'];
		$email=$data['email'];
		$res = $this->db->query("UPDATE `university` SET `university_name`='$name',`place`='$place',`email`='$email' WHERE `university_id`='$id'");
		return $res;
	}
	//public function updateConsultancy(){
		//$id=$data['consultancy_id'];
		//$name=$data['consultancy_name'];
		//$place=$data['place'];
		//$pin=$data['pin'];
		//$phone=$data['phone'];
		//$email=$data['email'];
		//$website=$data['website'];
		//$remarks=$data['remarks'];
		//$res = $this->db->query("UPDATE `consultancy` SET `consultancy_name`='$name',`place`='$place',`pin'=`$pin`,`phone`=`$phone`,`email`='$email',`website`=`$website`,`remarks`=`$remarks`, WHERE `consultancy_name`='$name'");
		//return $res;
	//}
	public function deleteUniversity($id){
		$res = $this->db->query("DELETE FROM `university` WHERE `university_id`='$id'");
		return $res;
	}
	public function updateCourse($data){
		//$id=$data['course_id'];
		$coursename=$data['course_name'];
		$fees=$data['fees'];
		$duration=$data['duration'];
		// $eligibility=$data['eligibility'];
		$university_id=$data['university_id'];
		$res = $this->db->query("UPDATE `university_courses` SET `course_name`='$coursename',`fees`='$fees',`duration`='$duration' WHERE `course_name`='$coursename' AND `university_id`='$university_id'");
		return $res;
	}
	public function deleteCourse($id){
		$res = $this->db->query("DELETE FROM `courses` WHERE `course_id`='$id'");
		return true;
	}
	public function checkEmailExistance($data){
		$username=$data['username'];
		$res = $this->db->query("select * from signup where username='$username'");
		if($res->num_rows()==0){
			return true;
		}else{
			return false;
		}
	}
	public function check_university_existence($mail){
		$res = $this->db->query("select * from login where username='$mail'");
		return $res->num_rows();
			
	}
	//public function checkPhoneExistance($data){
	//	$mobile=$data['mobile'];
	//	$res = $this->db->query("select * from signup where mobile='$mobile'");
	//	if($res->num_rows()==0){
	//		return true;
	//	}else{
	//		return false;
	//	}
	//}
	public function checkUsernameExistance($data){
		$username=$data['username'];
		$res = $this->db->query("select * from login where username='$username'");
		if($res->num_rows()==0){
			return true;
		}else{
			return false;
		}
	}
	public function ViewStudentDetails($name){
		$res = $this->db->query("select * from signup where username=$name");
		return $res;
	}
	public function admissionStatus($uname){

		$res = $this->db->query("SELECT *,`admission`.`status` AS add_status FROM `admission` INNER JOIN `cunsultancy` ON `admission`.`consultancy_id`=`cunsultancy`.`cunsultancy_id` INNER JOIN university ON `admission`.`university_id`=`university`.`university_id`  WHERE student_id='$uname' ORDER BY application_id DESC");
		return $res;
	}
	public function addConsultancy($data,$data1){
		$username=$data['email'];
		$role='consultancy';
		$password=$data1['password'];
		$res = $this->db->insert('cunsultancy',$data);
		$ref_id=$this->db->insert_id();

		$ress = $this->db->query("insert into `login`(`role`, `username`, `password`, `repassword`, `ref_id`) values ('$role', '$username', '$password', '$password', '$ref_id')");
		return $res;
	}
	public function updatePassword($data){
		$password = $data['password'];
		$confirm_password = $data['confirm_password'];
		// log_message('error',$password);
		// log_message('error',$confirm_password);

		$res = $this->db->query("UPDATE admin SET `password`='$password',`confirm_password`='$confirm_password' WHERE `username`='admin'");
		// log_message('error',$this->db->last_query());
		return $res;
	}
	//public function newinsert($data){
		//$res = $this->db->insert('new',$data);
		//return $res;
	//}
	//public function getnew(){
		//$res = $this->db->query("select * from new");
		//return $res;
	//}
	public function getPlace(){
		$res = $this->db->query('select * from city');
		return $res;
	}
	public function getArea(){
		$res = $this->db->query('select * from canadian_place');
		return $res;
	}
	public function get_eligibility_by_id($id){
		$res= $this->db->query("SELECT * FROM eligibility WHERE eligibility_id = '$id'");
		return $res->row_array();
	}
	public function applyUniversityContract($data){
		$res = $this->db->insert('university_contract',$data);
		return $res;
	}
	public function getRole($data){
		$username=$data['username'];
		$password=$data['password'];
		$res = $this->db->query("SELECT role from login WHERE username='$username' and password='$password' and status=1");
		return $res->row_array();
	}
	public function get_uni_course(){
		$res = $this->db->query("SELECT * FROM uni_course");
		return $res;
	}
	public function acceptCourse($id){
		$res = $this->db->query("UPDATE `uni_course` SET `status`='1' WHERE `uni_course_id`='$id'");
		return true;
	}
	public function rejectCourse($id){
		$res = $this->db->query("UPDATE `uni_course` SET `status`='0' WHERE `uni_course_id`='$id'");
		return $res;
	}
	public function get_consultancy_id_by_uname($username){
		$res=$this->db->query("SELECT cunsultancy_id from cunsultancy WHERE email='$username'");
		return $res->row_array();
	}
	public function get_university_id_by_uname($username){
			$res=$this->db->query("SELECT university_id from university WHERE email='$username'");
			return $res->row_array();
	}
	public function get_consutancy_req_by_university_id($uid){
		$res= $this->db->query("SELECT *,university_contract.status AS c_status FROM university_contract INNER JOIN cunsultancy ON university_contract.cunsultancy_id=cunsultancy.cunsultancy_id WHERE university_contract.university_id = '$uid' ORDER BY contract_id DESC");
		return $res->result_array();
	}
	public function get_consutancy_req_by_consultancy_id($uid){
		$res= $this->db->query("SELECT *,university_contract.status AS c_status FROM university_contract INNER JOIN university ON university_contract.university_id=university.university_id WHERE cunsultancy_id = '$uid' ORDER BY contract_id DESC");
		return $res->result_array();
	}
	public function contract_actions($id,$status){
		$res=$this->db->query("UPDATE university_contract SET status='$status' WHERE contract_id='$id'
			");
		return true;
	}
	public function get_accepted_universities_by_consultancy_id($id){
		$res=$this->db->query("SELECT * FROM university INNER JOIN university_contract ON university_contract.university_id=university.university_id WHERE cunsultancy_id = '$id' AND university_contract.status=1");
		
		return $res->result_array();
	}
	 public function get_courses_by_university_id($id){
	 	$res=$this->db->query("SELECT *,university_courses.id AS uc_id,university_courses.fees AS ufees  FROM courses INNER JOIN university_courses ON university_courses.course_name=courses.course_name WHERE university_courses.university_id = '$id'");
		
		return $res->result_array();
	 }
	 public function get_student_id_by_uname($id){
	 		$res=$this->db->query("SELECT logno from login WHERE username='$id' AND role='student'");
	 		// log_message('error',$this->db->last_query());
			return $res->row_array();
	 }
		
	public function get_application_by_id($id){
		$res = $this->db->query("SELECT *,admission.phone AS ph, admission.status AS add_status, admission.email AS add_email  FROM `admission` INNER JOIN university ON university.university_id=admission.university_id INNER JOIN university_courses ON university_courses.university_id=admission.university_id WHERE `application_id`='$id'");
		return $res->row_array();
	}
	public function get_application_by_id_in_univercity($id){
			$res = $this->db->query("SELECT *,admission.phone AS ph, admission.status AS add_status FROM `admission` INNER JOIN university ON university.university_id=admission.university_id INNER JOIN university_courses ON university_courses.university_id=admission.university_id WHERE `application_id`='$id'");
		return $res->row_array();
	}
	public function rejectfromconsultancy($id,$reason){
		// log_message('error',"rejectfromconsultancy");
		$res=$this->db->query("UPDATE admission SET status=5, reason_fro_rejection='$reason' WHERE application_id='$id'");

		// log_message('error',$this->db->last_query());

		return true;
	}
	public function approvefromconsultancy($id){
		$res=$this->db->query("UPDATE admission SET status=2 WHERE application_id='$id'");
		return true;
	}
	public function get_applications_by_university_id($id){
			$res = $this->db->query("SELECT *,admission.phone AS ph, admission.status AS add_status FROM `admission` INNER JOIN university ON university.university_id=admission.university_id INNER JOIN university_courses ON university_courses.id=admission.course_id WHERE admission.`university_id`='$id' AND( admission.status=2 OR admission.status=3 OR admission.status=4 OR admission.status=6)");
		return $res->result_array();
	}

	public function rejectfromuniversity($id,$reason){
		$res=$this->db->query("UPDATE admission SET status=6, reason_fro_rejection='$reason'  WHERE application_id='$id'");
		return true;
	}
	public function approvefromuniversity($id){
		$res=$this->db->query("UPDATE admission SET status=4 WHERE application_id='$id'");
		return true;
	}
	public function get_accepted_universities_by_course_name($c_name){
		$res=$this->db->query("SELECT * FROM university INNER JOIN university_courses ON university_courses.university_id=university.university_id WHERE university_courses.course_name='$c_name'");
		return $res->result_array();
	}
	public function get_consultancy_by_university_id($uid){
		$res=$this->db->query("SELECT * FROM cunsultancy INNER JOIN university_contract ON university_contract.cunsultancy_id=cunsultancy.cunsultancy_id WHERE university_contract.university_id='$uid' AND university_contract.status=1");
		return $res->result_array();
	}
	public function checkContractExistence($id,$userId){
		$res=$this->db->query("SELECT * FROM university_contract WHERE cunsultancy_id='$userId' AND university_id='$id'");
		// log_message('error',$this->db->last_query());
		if ($res->num_rows()>0 ){
			// code...
			return false;

		}else{
			return true;
		}
	}
	public function get_application_existence($id,$course,$student_id){
		$res=$this->db->query("SELECT * FROM admission WHERE student_id='$student_id' AND university_id='$id' AND course_id='$course' ");
		// log_message('error',$this->db->last_query());
		if ($res->num_rows()>0) {
			// code...
			// log_message('error',"FALSE");
			
			return false;
		}else{
			// log_message('error',"TRUE");
			
			return true;
		}
	}
	public function get_course_id_by_university_and_course($course,$uid){
		$res=$this->db->query("SELECT id FROM university_courses WHERE university_id='$uid' AND course_name='$course'");
		if ($res->num_rows()>0) {
			// code...
			return $res->row_array();
		}else{
			return false;
		}
	}
	public function edit_admission1($university_id,$course_id,$application_id,$consultancy_id,$student_id){
		 $res = $this->db->query("UPDATE admission SET university_id='$university_id',course_id='$course_id',consultancy_id='$consultancy_id',status=null WHERE application_id=$application_id'");
		 // log_message('error',$this->db->last_query());
		 $insert_id = $admission_id;
		 // log_message('error',$insert_id);

   return  $insert_id;
	}
	public function getCourse_name_by_id($id){
		$res = $this->db->query("SELECT course_name FROM university_courses WHERE id='$id'");
		return $res->row_array();
	}
	public function get_application_by_id_for_report($id){
		$res = $this->db->query("SELECT admission.*, cunsultancy.cunsultancy_name, university.university_name,university_courses.course_name FROM admission INNER JOIN university ON admission.university_id=university.university_id INNER JOIN university_courses ON university_courses.id=admission.course_id INNER JOIN cunsultancy ON cunsultancy.cunsultancy_id=admission.consultancy_id WHERE admission.application_id='$id' ");
		return $res->row_array();
	}

	public function generate_report_for_consultancy($id){
			$res = $this->db->query("SELECT admission.*, cunsultancy.cunsultancy_name, university.university_name,university_courses.course_name FROM admission INNER JOIN university ON admission.university_id=university.university_id INNER JOIN university_courses ON university_courses.id=admission.course_id INNER JOIN cunsultancy ON cunsultancy.cunsultancy_id=admission.consultancy_id WHERE admission.consultancy_id='$id' ");
		return $res->result_array();	
	}
	public function generate_report_for_university($id){
				$res = $this->db->query("SELECT admission.*, cunsultancy.cunsultancy_name, university.university_name,university_courses.course_name FROM admission INNER JOIN university ON admission.university_id=university.university_id INNER JOIN university_courses ON university_courses.id=admission.course_id INNER JOIN cunsultancy ON cunsultancy.cunsultancy_id=admission.consultancy_id WHERE admission.university_id='$id'  AND( admission.status=2 OR admission.status=3 OR admission.status=4 OR admission.status=6) ");
		return $res->result_array();	
	}
	public function generate_report_for_university_for_accepted_Students($id){
		$res = $this->db->query("SELECT admission.*, cunsultancy.cunsultancy_name, university.university_name,university_courses.course_name FROM admission INNER JOIN university ON admission.university_id=university.university_id INNER JOIN university_courses ON university_courses.id=admission.course_id INNER JOIN cunsultancy ON cunsultancy.cunsultancy_id=admission.consultancy_id WHERE admission.university_id='$id'  AND admission.status=4  ");
		return $res->result_array();
	}
	public function generate_report_for_consultancy_accepted_students($id){
		$res = $this->db->query("SELECT admission.*, cunsultancy.cunsultancy_name, university.university_name,university_courses.course_name FROM admission INNER JOIN university ON admission.university_id=university.university_id INNER JOIN university_courses ON university_courses.id=admission.course_id INNER JOIN cunsultancy ON cunsultancy.cunsultancy_id=admission.consultancy_id WHERE admission.consultancy_id='$id'  AND (admission.status=2 OR admission.status=4)  ");
		return $res->result_array();
	}
	public function get_payment_status_by_id($id){
		$res=$this->db->query("SELECT * FROM payments WHERE application_id = '$id'");
		if ($res->num_rows() > 0) {
			// code...
			return $res->row_array();
		}else{
			return false;
		}
	}
	public function get_course_fee_by_admission_id($id){
		$res=$this->db->query("SELECT university_courses.course_name, university_courses.fees, cunsultancy.consultancy_fee  FROM university_courses INNER JOIN admission ON university_courses.id=admission.course_id INNER JOIN cunsultancy ON cunsultancy.cunsultancy_id=admission.consultancy_id WHERE admission.application_id='$id'");
		if ($res->num_rows() > 0) {
			// code...
			return $res->row_array();
		}else{
			return false;
		}
	}
	public function insert_transaction($data){
		$res=$result=$this->db->insert('payments',$data);
		return $res;
	}
	public function update_transaction($id,$consultancy_paid,$status,$payment_id){
		$res=$this->db->query("UPDATE payments SET consultancy_paid='$consultancy_paid',status='$status' WHERE payment_id='$payment_id'");
	}
}
