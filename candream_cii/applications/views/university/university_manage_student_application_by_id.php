   <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                <center>
    <h1>Student Applications</h1>
        <form method="post" action="" style="padding-top: 100px;">
        <table class="table" id="admission_table" >
        <thead>
        </thead>
            
        <tbody>
          <tr>
               
            <?php 
                      $n=1; 
                             ?>
                              <tr>
                                <th data_validate="Required">Student</th> 
                                <td style=""><?php echo ucfirst($first_name).' '.ucfirst($middle_name).' '.ucfirst($last_name); ?></td>
                              </tr>
                              <tr>
                                <th>Date of Birth</th>
                                <td>
                                    <?php echo $birth_date; ?>
                                </td>
                              </tr>
                              <tr>
                                <th>Phone</th>
                                  <td>
                                    <?php echo $ph; ?>
                                </td>
                              </tr>
                              <tr>
                                <th>Email</th>
                                  <td>
                                    <?php echo $email; ?>
                                </td>
                              </tr>
                              <tr>
                                <th>Course  </th>
                                <td>
                                    <?php echo $course_name; ?>
                                    
                                </td>
                              </tr>
                              <tr>
                                <th>University</th>
                                <td>
                                    <?php echo $university_name; ?>
                                    
                                </td>
                 <?php  $n++;?> 
          </tr>
          <tr>
                <th>
                  Gender
              </th>
                  <td>
                       <?php echo $gender; ?>
                  </td>
                </tr>
                <tr>
                   <th>
                  Nationality
              </th>
                  <td> <?php echo $nationality; ?></td>
                  
                </tr>
                <tr>
              <th>State</th>
                  <td> <?php echo $state; ?></td>
                  
                </tr>
                <tr>
              <th>City</th>

                  <td> <?php echo $city; ?></td>
                  
                </tr>
                <tr>
              <th>Pin</th>
                  <td> <?php echo $pin; ?></td>
                  
                </tr>
                <tr>
              <th>Email</th>
                  <td> <?php echo $email; ?></td>
                  
                </tr>
                <tr>
              <th>Guardian</th>

                  <td> <?php echo ucfirst($guardian); ?></td>
                  
                </tr>
         
             <tr>
                <th>Image</th>
                   <td>
                      <a href="<?php echo base_url().'images/'.$photo  ?>" download="image">
                        <?php echo $photo; ?>
                                      
                      </a>
                    </td>
                               
                  </tr>
                  <tr>
                <th>Signature</th>
                   <td>
                      <a href="<?php echo base_url().'images/'.$signature  ?>" download="image">
                        <?php echo $signature; ?>
                                      
                      </a>
                    </td>
                               
                  </tr>
              <tr>
                <th>Transcripts</th>

                  <td>
                    <a href="<?php echo base_url().'images/'.$transcripts; ?>" download="transcript">
                      <?php echo $transcripts; ?>
                    </a>
                  </td>
                </tr>
                <tr>
                  <th>IELTS</th>
                  <td>
                    <a href="<?php echo base_url().'images/'.$ielts; ?>" download="transcript">
                      <?php echo $ielts; ?>

                    </a>
                  </td>
                </tr>
                <tr>
                  <th>Resume</th>
                  <td>
                    <a href="<?php echo base_url().'images/'.$resume; ?>" download="resume">
                      <?php echo $resume; ?>
                    </a>
                  </td>
                </tr>
                  
                  <tr>
                    <th>Educational Credentials</th>
                    <td>
                      <a href="<?php echo base_url().'images/'.$educred; ?>" download="Educred">
                        <?php echo $educred; ?>
                      </a>
                  </td>
           
                  </tr>
                  
        
              <tr>
                <th>Graduation</th>
                
                  <td>
                     <a href="<?php echo base_url().'images/'.$graducertificate; ?>" download="grad">
                      <?php echo $graducertificate; ?>
                     </a>
                  </td>
                </tr>

                <tr>
                  <th>Passport</th>

                  <td>
                     <a href="<?php echo base_url().'images/'.$passport; ?>" download="Passport">
                      <?php echo $passport; ?>
                    </a>
                  </td>

                </tr>
               <tr>
                  <th>Aadhaar Card</th>

                    <td>
                     <a href="<?php echo base_url().'images/'.$adhar; ?>" download="adhar">
                      <?php echo $adhar; ?>
                     </a>
                  </td>
                 </tr>
                 <tr>
                <th>Pan Card</th>

                    <td>
                     <a href="<?php echo base_url().'images/'.$pan; ?>" download="pan">
                      <?php echo $pan; ?>
                     </a>
                  </td>
              </tr>
        
              <tr>
                <th>Passbook</th>
                
                  <td>
                     <a href="<?php echo base_url().'images/'.$bank_passbook; ?>" download="bank_passbook">
                      <?php echo $bank_passbook; ?> 
                    </a>
                  </td>
                </tr>

                <tr>

                <th>Police Clearence</th>

                  <td>
                     <a href="<?php echo base_url().'images/'.$police_clearance; ?>" download="police_clearance">
                    <?php echo $police_clearance; ?>
                    </a>
                  </td>
                </tr>

                <tr>

                <th>Self Declaration</th>

                  <td>
                      <a href="<?php echo base_url().'images/'.$self_declaration; ?>" download="self_dec"> 
                        <?php echo $self_declaration; ?>
                      </a>
                  </td>
               
              </tr>
        
              <tr>
                
                <th>Medical Document</th>
              
                    <td>
                     <a href="<?php echo base_url().'images/'.$medical_document; ?>" download="medical">
                      <?php echo $medical_document ?>
                </a>

                  </td>
                </tr>
                <tr>
                <th>Proof of fund</th>
                  <td>
                     <a href="<?php echo base_url().'images/'.$prooffund; ?>" download="prooffund">
                      <?php echo $prooffund ?>
                     </a>
                  </td>
                </tr>
                <tr>
                <th>Vaccine Certificate</th>

                  <td>
                     <a href="<?php echo base_url().'images/'.$vaccine; ?>" download="vaccine">
                      <?php echo $vaccine; ?>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
 </form>
<div class="container-fluid">
        <div class="row">

          <?php 
          if($add_status == 3 || $add_status == 4 || $add_status == 6){
            ?>

            

            <div class="col-lg-3"></div>
            <div class="col-lg-3"  style="padding: 15px;background: black;color: #fff;background-origin: padding-box;" >
                    <a style="color:#fff">Reject</a>
            </div>
            <div class="col-lg-3"  style="padding: 15px;background: black;color: #fff;background-origin: padding-box;" >
                <a style="color:#fff">Approve</a>
            </div>
            <div class="col-lg-3"></div> -->

        <?php
          }else{
            ?>


            <div class="col-lg-3"></div>
            <div class="col-lg-3"  style="padding: 15px;background: darkred;color: #fff;background-origin: padding-box;" >
                   <!--  <a href="<?php echo base_url().'index.php/Universitycontroller/reject_app?id='.$admission_id; ?>">Reject</a> -->
                    <p onclick="displayReason()" style="color: #fff;">Reject</p> 
                     <div id="reason_div" style="display:none;padding-top: 2rem;">
                      <form action="<?php echo base_url().'index.php/Universitycontroller/reject_app'; ?>">
                        <input type="hidden" name="id" value="<?php echo $application_id ?>">
                            <textarea name="reason" id="reason"  placeholder="Reason for rejection..." required></textarea>
                      <button type="submit" class="btn">Submit</button>
                        
                      </form>
                     </div>
                
            </div>
            <div class="col-lg-3"  style="padding: 15px;background: green;color: #fff;background-origin: padding-box;" >
                <a href="<?php echo base_url().'index.php/Universitycontroller/accept_app?id='.$application_id; ?>">Approve</a>
            </div>
            <div class="col-lg-3"></div>


            <?php
          } ?>
        </div>
    </div>
    </center> 
               
                </div>
            </div>
        </div>
    </section>
<script>
  function displayReason(){
    document.getElementById('reason_div').style.display="block";
    document.getElementById('reason_div').style.background="#fff";
    document.getElementById('reason_div').style.color="#111";


  }
</script>