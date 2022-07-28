    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1>
        <?php echo form_open_multipart('Welcome/applyAdmission') ?>
        <form method="" action="">
        <table class="table">
           
            <tr>
                <th data_validate="Required">Consultancy</th>
                <td>
                    <select name="consultancy" class="form-control" required="consultancy">
                    <option value="" disabled selected hidden>---Select---</option> 
                       <?php foreach($consultancy->result() as $consult)
                       {
                          ?>
                         <option value="<?php echo $consult->cunsultancy_id;?>"><?php echo $consult->cunsultancy_name;?></option>
                         <?php  
                        } 
                        ?>
                    </select> 
                </td>
            </tr>
            <tr>
                <th data_validate="Required">University</th>
                <td>
                    <select name="university" class="form-control" required="university">
                    <option value="" disabled selected hidden>---Select---</option>  
                        <?php foreach($university->result() as $uni)
                       {
                          ?>
                         <option value="<?php echo $uni->university_id;?>"><?php echo $uni->university_name;?></option>
                         <?php  
                        } 
                        ?> 
                    </select> 
                </td>
            </tr>
            <tr>
                <th data_validate="Required">Course</th>
                <td>
                    <select name="course" class="form-control" required="course">
                    <option value="" disabled selected hidden>---Select---</option>   
                        <?php foreach($course->result() as $cour)
                       {
                          ?>
                         <option value="<?php echo $cour->course_id;?>"><?php echo $cour->course_name;?></option>
                         <?php  
                        } 
                        ?>  
                    </select> 
                </td>
            </tr>
            <tr>
                <th data_validate="Required">First Name</th>
                <td><input type="text" required="First name" class="form-control" name="first_name"></td>
            </tr>
            <tr>
                <th>Middle Name</th>
                <td><input type="text" class="form-control" name="middle_name"></td>
            </tr>
            <tr>
                <th data_validate="Required">Last Name</th>
                <td><input type="text" required="Last name" class="form-control" name="last_name"></td>
            </tr>
            <tr>
                <th data_validate="Required">Date of Birth</th>
                <td><input type="date" required="date of birth" class="form-control" name="birth_date"></td>
            </tr>

            <tr>
                <th data_validate="Required">Gender</th>
                <td class="form-control">

                <select class="form-control" name="gender" >
                    <option value="" disabled selected hidden>---Select---</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>

                
                </td>
            </tr>
            <tr>
                <th data_validate="Required">Nationality</th>
                <td><select class="form-control" name="nationality" >
                    <option value="" disabled selected hidden>---Select---</option>
                    <option>Indian</option>
                    
                </select></td>
            </tr>
            <tr>
                <th data_validate="Required">State</th>
                <td> <select class="form-control" name="state" >
                    <option value="" disabled selected hidden>---Select---</option>
                    <option>Kerala</option>
                </select></td>
            </tr>
            <tr>
                <th data_validate="Required">City</th>
                <td> <select class="form-control" name="city" >
                    <option value="" disabled selected hidden>---Select---</option>
                    <option>Alappuzha</option>
                    <option>Aroor</option>
                    <option>Cherai</option>
                    <option>Edayar</option>
                    <option>Erumeli</option>
                    <option>Anakal</option>
                </select></td>
            </tr>
            <tr>
                <th data_validate="Required">Pin</th>
                <td><input type="number" required="pin" class="form-control" name="pin"></td>
            </tr>
            <tr>
                <th data_validate="Required">Phone</th>
                <td><input type="number" required="phone" class="form-control" name="phone"></td>
            </tr>
            <tr>
                <th data_validate="Required">Email</th>
                <td><input type="email" required="email" class="form-control" name="email"></td>
            </tr>
            <tr>
                <th data_validate="Required">Guardian</th>
                <td><input type="text" required="guardian" class="form-control" name="guardian"></td>
            </tr>
            <tr>
                <th data_validate="Required">Photo</th>
                <td><input type="file" name="photo" id="photo" required="photo"></td>
            </tr>
            <tr>
                <th data_validate="Required">Signature</th>
                <td><input type="file" name="signature" id="signature" required="signature"></td>
            </tr>
            <tr>
                <th data_validate="Required">Transcripts</th>
                <td><input type="file" name="transcripts" id="transcripts" required="transcripts"></td>
            </tr>
            <tr>
                <th data_validate="Required">IELTS</th>
                <td><input type="file" name="ielts" id="ielts" required="ielts"></td>
            </tr>
            <tr>
                <th data_validate="Required">Resume</th>
                <td><input type="file" name="resume" id="resume" required="resume"></td>
            </tr>
            <tr>
                <th data_validate="Required">Educational Credential Assessment</th>
                <td><input type="file" name="educred" id="educred" required="educred"></td>
            </tr>
            <tr>
                <th data_validate="Required">Graduation Certificate</th>
                <td><input type="file" name="graducertificate" id="graducertificate" required="graducertificate"></td>
            </tr>
            <tr>
                <th data_validate="Required">Passport</th>
                <td><input type="file" name="passport" id="passport" required="passport"></td>
            </tr>
            <tr>
                <th data_validate="Required">Visa/ETA(Electronic Travel Autherization)</th>
                <td><input type="file" name="visa/eta" id="visa/eta" required="visa/eta"></td>
            </tr>
            <tr>
                <th data_validate="Required">Aadhar</th>
                <td><input type="file" name="aadhar" id="aadhar" required="aadhar"></td>
            </tr>
            <tr>
                <th data_validate="Required">PAN Card</th>
                <td><input type="file" name="pan" id="pan" required="pan"></td>
            </tr>
            <tr>
                <th data_validate="Required">Bank Passbook</th>
                <td><input type="file" name="bank_passbook" id="bank_passbook" required="bank_passbook"></td>
            </tr>
            <tr>
                <th data_validate="Required">Police Clearance</th>
                <td><input type="file" name="police_clearance" id="police_clearance" required="police_clearance"></td>
            </tr>
            <tr>
                <th data_validate="Required">Self Declaration</th>
                <td><input type="file" name="selfdeclaration" id="selfdeclaration" required="selfdeclaration"></td>
            </tr>
            <tr>
                <th data_validate="Required">Medical Document </th>
                <td><input type="file" name="medicaldocument" id="medicaldocument" required="medicaldocument"></td>
            </tr>
            <tr>
                <th data_validate="Required">Proof of fund</th>
                <td><input type="file" name="prooffund" id="prooffund" required="prooffund"></td>
            </tr>
             <tr>
                <th data_validate="Required">Covid 19 Vaccination Certificate</th>
                <td><input type="file" name="vaccine" id="vaccine" required="vaccine"></td>
            </tr><br>
            <tr>
                <td><button type="submit">Register</button></td>
            </tr>
        </table>
    </form>
    </center> 


                </div>
            </div>
        </div>
    </section>
<tr>
                <th data_validate="Required" style="color: white">
                    Available Courses
                </th>
                <td style="color: white"> 
                    <select  name="course_name_0">
                        <option>Select</option>
                        <?php foreach($courses->result() as $row){
                            ?>
                                <option>
                                    <?php echo $row->course_name ?>
                                </option>
                            <?php
                        } ?>
                    </select>
                </td>
                <td>
                    <input type="text" name="course_fee_0" placeholder="Course Fee" required>
                    <input type="text" name="course_duration_0" placeholder="Course Duration" required>

                        <input type="hidden" name="no_of_courses" id="no_of_courses" value="1" >
                </td>
                <td>
                    <p style="padding:10px" onclick="addCourses()">
                        Add More courses
                    </p>
                </td>
                </td>
              

            </tr>
            <tbody id="more_courses">
                


            </tbody>
            <tr>