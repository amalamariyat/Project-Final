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

        <table class="table" id="course_table" >
        <thead>
          <tr>
           
                    <th>Sno</th>
                    <th>Course Name</th>
                    <th>Fees</th>
                    <th>Duration</th>
                    <th>Eligibility</th>
                    <th>Status</th>
                    
          </tr>
        </thead>
        <tbody>
          <tr>
               
            <?php 
                      $n=1; 
                         foreach($uni_course->result() as $row)
                             {?>
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style=""><?php echo $row->course_name; ?></td>
                                <td style=""><?php echo $row->fees; ?></td>
                                <td style=""><?php echo $row->duration; ?></td>
                                <td style=""><?php echo $row->eligibility; ?></td>
                                <td style=""><?php echo $row->status; ?></td>
                                <td style=""><a href="acceptCourse?id=<?php echo $row->uni_course_id; ?>" class="btn btn-primary">Accept</a></td>
                                <td style=""><a href="rejectCourse?id=<?php echo $row->uni_course_id; ?>" class="btn btn-danger">Reject</a></td>
                              </tr>
                              </tr>
                 <?php  $n++;}?> 


          </tr>
        </tbody>
      </table>
                </div>
            </div>
        </div>
    </section>
