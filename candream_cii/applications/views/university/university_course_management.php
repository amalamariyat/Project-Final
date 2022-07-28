    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    <center><h2>Courses</h2></center> 
    </div>
    
    <div>
                
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal" method="post" action="<?php echo base_url().'index.php/Universitycontroller/addCourse/'.$university_id; ?>">
                                   <input type="hidden" id="id"  class="form-control" name="id">
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Course Name</label>
                                        <div class="col-lg-6">
                                           <select name="coursename" class="form-control" required>
                                               <option value="" disabled selected hidden>---Select---</option>
                                               <?php foreach($all_courses->result() as $row){
                                                ?>
                                                <option><?php  echo $row->course_name;   ?></option>
                                                <?php
                                               } ?>
                                           </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Fees (in CAD $)</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="fees" name="fees" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label class="control-label col-lg-3">Duration</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="duration" name="duration" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group " style="display:none">
                                        <label class="control-label col-lg-3">Eligibility</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="eligibility" name="eligibility" type="text">
                                            <input type="hidden" name="u_id" value="<?php echo $university_id; ?>">
                                        </div>
                                    </div><br><br>

                                    <div class="offset-md-4">
                                        <input class="btn btn-success"type="submit" name="btnsave" value="Add" id="btnsave" formaction="<?php echo base_url(); ?>index.php/Universitycontroller/addCourse">
                                       <input class="btn btn-danger" type="submit" name="btnupdate" value="Update" id="btnupdate" formaction="<?php echo base_url(); ?>index.php/Universitycontroller/updateCourse">
                                      
                   
                                 </div>
                                </form>
                                <div class="container-fluid">
        <table class="table">
            <thead>
                <th>
                    Course name
                </th>
                <th>
                    fee (in CAD )
                </th>
            </thead>
            <tbody>
                <?php foreach ($university_courses as $key) {
                    // code...
                    ?>
                     <tr>
                    <td>
                    <?php 

                        echo $key['course_name'];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo "$";
                            echo $key['ufees']/62.04;
                         ?>
                    </td>
                </tr>
                <?php
                }?>
               
            </tbody>
        </table>
    </div>
                            </div>
                        </div>   

    
                </div>
            </div>
        </div>
    </section>
<script>
     $.ajax({
          type: "GET",
          dataType: 'JSON',
          url: "https://api.currencyfreaks.com/latest?apikey=a6a1add25d464e359a67d98bdc1a1f2c&symbols=INR,CAD",
          
          success: function (data1) {
            console.log(data1.rates);

            data1.rates.forEach(myFunc);
            function myFunc(item,index){
                console.log(item);
            }
            
          }
      });
</script>