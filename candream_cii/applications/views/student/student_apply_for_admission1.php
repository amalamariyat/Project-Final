<section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1><br>
        <h4>Choose your Course</h4>
        <?php echo form_open_multipart('Welcome/applyForAdmission2') ?>
        <!-- <form method="" action="applyForAdmission2"> -->
        <table class="table">
           <input type="hidden" name="student_id" id="student_id" value="<?php echo $student_id; ?>">

            


             <tr>
                <th data_validate="Required">Course</th>
                <td>
                    <select name="course" class="form-control" required="course" id="course">
                    <option value="" disabled selected hidden>---Select---</option>  
                    <?php foreach($course->result() as $row){
                        ?>
                        <option><?php echo $row->course_name; ?></option>
                        <?php
                    } ?>
                        
                    </select> 
                </td>
            </tr>

         


             <tr>
                <th data_validate="Required">University</th>
                <td>
                    <select name="university" class="form-control" required="university" id="university">
                    <option value="" disabled selected hidden>---Select---</option>  
                       
                      
                    </select> 
                </td>
            </tr>






            <tr>
                <th data_validate="Required">Consultancy</th>
                <td>
                    <select name="consultancy" class="form-control" required="consultancy" id="consultancy">
                    <option value="" disabled selected hidden>---Select---</option> 
                      
                    </select> 
                </td>
            </tr>




        </table>
         <div class="offset-md-4">
                <input class="btn btn-success"type="submit" name="btnsave" value="Save" id="btnsave">
                   
        </div>
    </form>
    </center> 


                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
 
$( document ).ready(function() {
    //console.log( "ready!" );
      $('#course').on('change', function() {
    var id=this.value;
    // alert(id);
     $.ajax({
          type: "POST",
          dataType: 'JSON',
          url: "<?php echo base_url(); ?>index.php/Welcome/get_accepted_universities_by_course_name",
          data: {
            'id': id
          },
          success: function (data) {
                  document.getElementById('university').innerHTML=`
             <option>----------Select--------
                 </option>`;
            //console.log(data);
            data.forEach(myFunc);
            function myFunc(item,index){
            document.getElementById('university').innerHTML+=`
           
                 <option value="`+item.university_id+`">`+item.university_name+`
                 </option>
            `;
            }
          }
      });

});

  


   
});
  
</script>
<script >
      $('#university').on('change', function() {
    var id=this.value;
    var course= $('#course').val();
    var student_id=$('student_id').val();
//alert(course);

    // =========================================================================
    $.ajax({
          type: "POST",
          dataType: 'JSON',
          url: "<?php echo base_url(); ?>index.php/Welcome/get_application_existence",
          data: {
            'id': id,
            'course':course,
            'student_id':student_id,
          },
          success: function (data1) {
            
            console.log(data1);
           if (data1==false) {
            alert("Already applied");
            location.reload();
           }
          }
      });


    // ==================================================================================



     $.ajax({
          type: "POST",
          dataType: 'JSON',
          url: "<?php echo base_url(); ?>index.php/Welcome/get_consultancy_by_university_id",
          data: {
            'id': id
          },
          success: function (data1) {
             document.getElementById('consultancy').innerHTML=`
                 <option >------Select------
                 </option>
            `;
            //console.log(data1);
            data1.forEach(myFunc1);
            function myFunc1(item,index){
            document.getElementById('consultancy').innerHTML+=`
                 <option value="`+item.cunsultancy_id+`">`+item.cunsultancy_name+`
                 </option>
            `;
            }
          }
      });

});
</script>