<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Manage Admission
    </div>
    <div>
      <div class="images">
      <table class="table">
        <thead>
          <tr>
           
              <th>Sno</th>
              <th>Student</th>
      				<th>Course</th>
      				<th>Passport</th>
      				<th>Aadhar</th>
      				<th>10th</th>
      				<th>12th</th>
      				<th>Diploma</th>
      				<th>Degree</th>
      				<th>IELTS</th>
      				<th>PAN</th>
      				<th>Bank Passbook</th>
      				<th>Police Clearence</th>
      				<th>Self Declaration</th>
      				<th>Medical Document</th>
      				<th>Photo</th>
      				<th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
               
            <?php 
                      $n=1; 
                         foreach($admission->result() as $row)
                             {?>
                              
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style=""><a href='ViewStudentDetails?name="<?php echo $row->student_name; ?>"'><?php echo $row->student_name; ?></a></td>
                                <td style=""><?php echo $row->course_id; ?></td>
                                <td style=""><img  src="<?php echo base_url().'images/'.$row->passport; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->adhar; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->sslc; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->hsc; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->diploma; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->degree; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->ielts; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->pan; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->bank_passbook; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->police_clearance; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->self_declaration; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->medical_document; ?>" width="100" height="100"></td>
                                <td style=""><img src="<?php echo base_url().'images/'.$row->photo; ?>" width="100" height="100"></td>
                                <td style=""><?php echo $row->astatus; ?></td>
                                <td style=""><a href="acceptAdmission?id=<?php echo $row->admission_id; ?>">Accept</a></td>
                                <td style=""><a href="rejectAdmission?id=<?php echo $row->admission_id; ?>">Reject</a></td>
                              </tr>
                             
                 <?php  $n++;}?> 


          </tr>
        </tbody>

        
        </div>
      </table>


       </div>

  </div>
</div>

 <div id="image-viewer">
          <span class="close">&times;</span>
          <img class="modal-content" id="full-image">
    </div>


</section>
   

<style type="text/css">
  

  img {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

img:hover {opacity: 0.7;}

/* The Modal (background) */
#image-viewer {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.9);
}
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 1500px;
}
.modal-content { 
    animation-name: zoom;
    animation-duration: 0.6s;
}
@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}
#image-viewer .close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}
#image-viewer .close:hover,
#image-viewer .close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
<script type="text/javascript">
  
  $(".images img").click(function(){
  $("#full-image").attr("src", $(this).attr("src"));
  $('#image-viewer').show();
});

$("#image-viewer .close").click(function(){
  $('#image-viewer').hide();
});
</script>