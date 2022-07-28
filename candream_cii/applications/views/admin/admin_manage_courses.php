
          
               <section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Manage Course
    </div>
    <div>
                
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal" method="post" action="addCourse">
                                   <input type="hidden" id="id"  class="form-control" name="id">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Course Name</label>
                                        <div class="col-lg-6">
                                            <input class="form-control" id="coursename" name="coursename" type="text">
                                        </div>
                                    </div>
                                    
                                    

                                    <div class="offset-md-4">
                                        <input class="btn btn-success"type="submit" name="btnsave" value="Save" id="btnsave">
                                       <input class="btn btn-danger" type="submit" name="btndelete" value="Delete" id="btndelete" formaction="<?php echo base_url(); ?>index.php/Admincontroller/deleteCourse">
                                       <input class="btn btn-info" type="submit" name="btnclear" value="Clear" id="btnclear">
                   
                                 </div>
                                </form>
                            </div>
                        </div>   

                        <div>
      <table class="table" id="course_table" >
        <thead>
          <tr>
           
                    <th>Sno</th>
                    <th>Course Name</th>
                    <!-- <th>Fees</th> -->
                    <!-- <th>Duration</th> -->
                    
                    
          </tr>
        </thead>
        <tbody>
          <tr>
               
            <?php 
                      $n=1; 
                         foreach($courses->result() as $row)
                             {?>
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style="display: none;"><?php echo $row->course_id; ?></td>
                                <td style=""><?php echo $row->course_name; ?></td>
                                <!-- <td style=""><?php echo $row->fees; ?></td> -->
                                <!-- <td style=""><?php echo $row->duration; ?></td> -->
                                
                               
                              </tr>
                 <?php  $n++;}?> 


          </tr>
        </tbody>
      </table>
    </div>       
        </div>
  </div>
</div>
</section>
<script type="text/javascript">
        var table = document.getElementById('course_table');
                      
                      for(var i = 1; i < table.rows.length; i++)
                      {
                          table.rows[i].onclick = function()
                          {
                               document.getElementById("id").value = this.cells[1].innerHTML;
                               document.getElementById("coursename").value = this.cells[2].innerHTML;
                               document.getElementById("fees").value = this.cells[2].innerHTML;
                               document.getElementById("duration").value = this.cells[3].innerHTML;
                               document.getElementById("eligiblity").value = this.cells[4].innerHTML;
                               document.getElementById("btnsave").value = "Update";
                                
                               
                          };
                      }
         var clear = document.getElementById('btnclear');   
        clear.onclick=function()
         {
                                document.getElementById("accountgroup").value = "";
                               document.getElementById("under").value = "";
                               document.getElementById("narration").value ="";
                               document.getElementById("accountgroupid").value ="";
                               document.getElementById("btnsave").value = "Save";
                              
         }
      </script>