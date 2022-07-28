<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-17 07:31:00 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 07:31:00 --> 404 Page Not Found: Welcome/img
ERROR - 2022-07-17 07:31:02 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:02 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:02 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:02 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:02 --> 404 Page Not Found: Universitycontroller/js
ERROR - 2022-07-17 07:31:02 --> 404 Page Not Found: Universitycontroller/img
ERROR - 2022-07-17 07:31:04 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 07:31:38 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:38 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:38 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:38 --> 404 Page Not Found: Universitycontroller/js
ERROR - 2022-07-17 07:31:38 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 07:31:39 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 07:33:22 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 07:33:22 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 07:33:22 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 07:33:22 --> 404 Page Not Found: Consultancycontroller/js
ERROR - 2022-07-17 07:33:22 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 07:33:22 --> 404 Page Not Found: Consultancycontroller/img
ERROR - 2022-07-17 07:33:23 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 07:33:44 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 08:03:39 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 08:03:39 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 08:03:39 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 08:03:39 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 08:03:39 --> 404 Page Not Found: Universitycontroller/js
ERROR - 2022-07-17 08:03:41 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 08:14:18 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 08:14:18 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 08:14:18 --> 404 Page Not Found: Consultancycontroller/js
ERROR - 2022-07-17 08:14:18 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 08:14:18 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 08:14:19 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 08:16:10 --> Severity: Notice --> Undefined variable: ctr C:\xampp\htdocs\null\candream_ci\application\views\student\student_view_admission_status.php 76
ERROR - 2022-07-17 08:16:10 --> Severity: Notice --> Undefined variable: ctr C:\xampp\htdocs\null\candream_ci\application\views\student\student_view_admission_status.php 79
ERROR - 2022-07-17 09:00:43 --> Severity: error --> Exception: syntax error, unexpected '`', expecting ',' or ';' C:\xampp\htdocs\null\candream_ci\application\views\student\student_view_admission_status.php 124
ERROR - 2022-07-17 09:01:26 --> 404 Page Not Found: Welcome/complete_payment_by_student1021
ERROR - 2022-07-17 09:01:43 --> 404 Page Not Found: Welcome/complete_payment_by_student1021
ERROR - 2022-07-17 09:01:48 --> 404 Page Not Found: Welcome/complete_payment_by_student
ERROR - 2022-07-17 09:10:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''1021' at line 1 - Invalid query: SELECT university_courses.course_name FROM university_courses INNER JOIN admission ON university_courses.id=admission.course_id WHERE admission.admission_id='1021
ERROR - 2022-07-17 09:14:00 --> Severity: error --> Exception: Call to undefined method OnlineModel::complete_payment_by_student() C:\xampp\htdocs\null\candream_ci\application\controllers\Welcome.php 1108
ERROR - 2022-07-17 09:23:12 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\null\candream_ci\application\controllers\Welcome.php 1111
ERROR - 2022-07-17 09:23:27 --> Severity: error --> Exception: syntax error, unexpected '}' C:\xampp\htdocs\null\candream_ci\application\controllers\Welcome.php 1111
ERROR - 2022-07-17 09:54:42 --> Query error: Unknown column 'fees' in 'field list' - Invalid query: INSERT INTO `payments` (`fees`, `student_id`, `student_paid`, `status`, `transaction_id`) VALUES (NULL, '1021', 1, 1, 'pay_sfsd46sd5f465')
ERROR - 2022-07-17 09:55:11 --> Query error: Unknown column 'student_id' in 'field list' - Invalid query: INSERT INTO `payments` (`amount`, `student_id`, `student_paid`, `status`, `transaction_id`) VALUES (NULL, '1021', 1, 1, 'pay_sfsd46sd5f465')
ERROR - 2022-07-17 09:58:11 --> Query error: Column 'amount' cannot be null - Invalid query: INSERT INTO `payments` (`amount`, `admission_id`, `student_paid`, `status`, `transaction_id`) VALUES (NULL, '1021', 1, 1, 'pay_sfsd46sd5f465')
ERROR - 2022-07-17 09:59:33 --> Query error: Column 'amount' cannot be null - Invalid query: INSERT INTO `payments` (`amount`, `admission_id`, `student_paid`, `status`, `transaction_id`) VALUES (NULL, '1021', 1, 1, 'pay_sfsd46sd5f465')
ERROR - 2022-07-17 10:26:03 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:26:03 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:26:03 --> 404 Page Not Found: Welcome/js
ERROR - 2022-07-17 10:26:03 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:26:03 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:26:05 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:36:57 --> Invalid query: 
ERROR - 2022-07-17 10:41:02 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:41:02 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:41:02 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:41:02 --> 404 Page Not Found: Welcome/js
ERROR - 2022-07-17 10:41:02 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:41:03 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 10:46:55 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 10:46:55 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 10:46:55 --> 404 Page Not Found: Consultancycontroller/js
ERROR - 2022-07-17 10:46:55 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 10:46:55 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 10:47:04 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 11:01:44 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 11:01:44 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 11:01:44 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 11:01:44 --> 404 Page Not Found: Universitycontroller/js
ERROR - 2022-07-17 11:01:44 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 11:01:45 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 17:21:09 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 17:21:09 --> 404 Page Not Found: Welcome/img
ERROR - 2022-07-17 17:35:07 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:34:43 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 18:34:43 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 18:34:43 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 18:34:43 --> 404 Page Not Found: Universitycontroller/lib
ERROR - 2022-07-17 18:34:43 --> 404 Page Not Found: Universitycontroller/js
ERROR - 2022-07-17 18:34:44 --> 404 Page Not Found: Universitycontroller/img
ERROR - 2022-07-17 18:34:46 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:34:46 --> 404 Page Not Found: Welcome/img
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 74
ERROR - 2022-07-17 18:35:02 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\student\student_view_admission_status.php 80
ERROR - 2022-07-17 18:40:45 --> Query error: Unknown column 'admission_id' in 'where clause' - Invalid query: SELECT *,admission.phone AS ph, admission.status AS add_status, admission.email AS add_email  FROM `admission` INNER JOIN university ON university.university_id=admission.university_id INNER JOIN university_courses ON university_courses.university_id=admission.university_id WHERE `admission_id`='998'
ERROR - 2022-07-17 18:41:06 --> Query error: Unknown column 'admission.admission_id' in 'where clause' - Invalid query: SELECT admission.*, cunsultancy.cunsultancy_name, university.university_name,university_courses.course_name FROM admission INNER JOIN university ON admission.university_id=university.university_id INNER JOIN university_courses ON university_courses.id=admission.course_id INNER JOIN cunsultancy ON cunsultancy.cunsultancy_id=admission.consultancy_id WHERE admission.admission_id='1023' 
ERROR - 2022-07-17 18:41:29 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:41:29 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:41:29 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:41:30 --> 404 Page Not Found: Welcome/js
ERROR - 2022-07-17 18:41:30 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:41:32 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:41:48 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 47
ERROR - 2022-07-17 18:41:48 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 72
ERROR - 2022-07-17 18:41:48 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 122
ERROR - 2022-07-17 18:41:48 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 47
ERROR - 2022-07-17 18:41:48 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 72
ERROR - 2022-07-17 18:41:48 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 122
ERROR - 2022-07-17 18:41:48 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 127
ERROR - 2022-07-17 18:42:52 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 47
ERROR - 2022-07-17 18:42:52 --> Severity: Warning --> Undefined property: stdClass::$admission_id C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\consultancy\consultancy_manage_student_application.php 47
ERROR - 2022-07-17 18:43:28 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 18:43:28 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 18:43:28 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 18:43:28 --> 404 Page Not Found: Consultancycontroller/js
ERROR - 2022-07-17 18:43:28 --> 404 Page Not Found: Consultancycontroller/lib
ERROR - 2022-07-17 18:43:28 --> 404 Page Not Found: Consultancycontroller/img
ERROR - 2022-07-17 18:43:30 --> 404 Page Not Found: Welcome/lib
ERROR - 2022-07-17 18:43:46 --> Severity: Warning --> Undefined array key "admission_id" C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\university\university_view_applications.php 45
ERROR - 2022-07-17 18:43:46 --> Severity: Warning --> Undefined array key "admission_id" C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\university\university_view_applications.php 72
ERROR - 2022-07-17 18:43:46 --> Severity: Warning --> Undefined array key "admission_id" C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\university\university_view_applications.php 126
ERROR - 2022-07-17 18:43:46 --> Severity: Warning --> Undefined array key "admission_id" C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\university\university_view_applications.php 132
ERROR - 2022-07-17 18:44:58 --> Query error: Unknown column 'admission_id' in 'where clause' - Invalid query: SELECT *,admission.phone AS ph, admission.status AS add_status FROM `admission` INNER JOIN university ON university.university_id=admission.university_id INNER JOIN university_courses ON university_courses.university_id=admission.university_id WHERE `admission_id`='1021'
ERROR - 2022-07-17 18:53:12 --> Query error: Unknown column 'admission_id' in 'where clause' - Invalid query: SELECT *,admission.phone AS ph, admission.status AS add_status FROM `admission` INNER JOIN university ON university.university_id=admission.university_id INNER JOIN university_courses ON university_courses.university_id=admission.university_id WHERE `admission_id`='1021'
ERROR - 2022-07-17 18:53:22 --> Query error: Unknown column 'admission_id' in 'where clause' - Invalid query: SELECT *,admission.phone AS ph, admission.status AS add_status FROM `admission` INNER JOIN university ON university.university_id=admission.university_id INNER JOIN university_courses ON university_courses.university_id=admission.university_id WHERE `admission_id`='1021'
ERROR - 2022-07-17 18:59:38 --> Severity: error --> Exception: Undefined constant "eta" C:\xampp\htdocs\candream_ci-23\candream_ci\application\views\university\university_manage_student_application_by_id.php 138
