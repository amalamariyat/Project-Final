    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
  <center>
    <h1>APPLICATIONS</h1><br>
    <table class="table">
      <tr>
          <th>Sno</th>
          <th><h5>Application ID</h5></th>
          <th>Student Name</th>
          <th>Consultancy Name</th>
          <th>University</th>
          </tr>

          <?php 
                      $n=1; 
                         foreach($admission_status->result() as $row)
                             {?>
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style=""><h5><?php echo $row->application_id; ?></h5></td>
                                <td style=""><?php echo $row->first_name; ?></td>
                                <td style=""><?php echo $row->cunsultancy_name; ?></td>
                                <td style=""><?php echo $row->university_name; ?></td>    
                              </tr>
                 <?php  $n++;}
                 ?> 
    </table>
  </center>

                </div>
            </div>
        </div>
    </section>
