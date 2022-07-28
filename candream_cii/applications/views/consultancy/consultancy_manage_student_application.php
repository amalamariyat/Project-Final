   <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                <center>
    <h1>Student Applications</h1>
    
        <table class="table" id="admission_table" >
        <thead>
          <tr>
            <th>
                Application ID
            </th>
                    <th data_validate="Required">Student</th> 
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Course  </th>
                    <th>University</th>
                    <th>View</th>
                    <th>Status</th>
                    <th>Report</th>
                    <th>Comments</th>
                    <th>Payment Status</th>


          </tr>
        </thead>
            
        <tbody>
          <tr>
               
            <?php 
                      $n=1; 
                      $ctr=0;
                         foreach($admission->result() as $row)
                             {
                                $ctr++;

                                   // if($n%2!=0){

                    
                                ?>
                              <tr>
                                <td>
                                    <?php echo $row->application_id ?>
                                </td>
                                <td style=""><?php echo $row->first_name.' '.$row->middle_name.' '.$row->last_name; ?></td>
                                  <td>
                                    <?php echo $row->ph; ?>
                                </td>
                                  <td>
                                    <?php echo $row->ad_mail; ?>
                                </td>
                                <td>
                                    <?php echo $row->course_name; ?>
                                    
                                </td>
                                <td>
                                    <?php echo $row->university_name; ?>
                                    
                                </td>
                               
                                <td>
                                    <p style="background: green;padding: 10px;text-align: center;border-radius: 3px;">
                                        <a href="<?php echo base_url().'index.php/Consultancycontroller/view_applications?id='.$row->application_id ?>" style="color:#fff">View</a>
                                    </p>
                                </td>
                                <td>
                                   <?php if( $row->add_status==NULL){
                                    echo "Pending";
                                }elseif ($row->add_status==1) {
                                    // code...
                                    echo "Consultancy Verified";

                                }
                                elseif ($row->add_status==2) {
                                    // code...
                                    echo "Consultancy forwarded to university";

                                }
                                elseif ($row->add_status==3) {
                                    // code...
                                    echo "university Verified";

                                }
                                elseif ($row->add_status==4) {
                                    // code...
                                    echo "university Approved";

                                }
                                elseif ($row->add_status==5) {
                                    // code...
                                    echo "Consultancy Rejected";

                                }

                                elseif ($row->add_status==6) {
                                    // code...
                                    echo "university Rejected";

                                }


                                 ?>
                                </td>
                                    <?php if ($row->add_status==6 || $row->add_status==5): ?>
                                
                                        
                                    <?php endif ?>
                                    <td>
                                     <a class="btn btn-info" href="<?php echo base_url().'index.php/Welcome/generate_report?id='.$row->application_id; ?>">Report</a>
                                    </td>
                                    <td>
                                    <?php
                                        echo $row->reason_fro_rejection;
                                         ?>
                                </td>
                                    <?php if ($row->add_status==4) {
                                        ?>
                                        <td >
                                            <button class="btn btn-primary" onclick="getPaymentStatus('<?php echo $row->application_id ?>','<?php echo $ctr ?>')">Payment</button>

                                        </td>
                                        <td id="payment_status<?php echo $ctr ?>">
                                            
                                        </td>
                                        <?php
                                    } ?>
                              </tr>
                 <?php
                 // }
                   // $n++;
               }
               ?> 
          </tr>
        </tbody>
      </table>
    </center> 
               
                </div>
                <center>
                    <a href="<?php echo base_url().'index.php/Consultancycontroller/generate_report' ?>">
                <p class="btn btn-primary">Generate Report for Consultancy</p>
                        
                    </a>
                    <br>
                    <br>
                    
                    <a href="<?php echo base_url().'index.php/Consultancycontroller/generate_report_for_accepted_Students' ?>">
                <p class="btn btn-primary">Report for University Approved Students</p>
                        
                    </a>
                </center>
            </div>

        </div>
    </section>


<script>
    function getPaymentStatus(ref,ref2){
          $.ajax({
          type: "POST",
          dataType: 'JSON',
          url: "<?php echo base_url(); ?>index.php/Welcome/get_payment_status_by_id",
          data: {
            'id': ref
          },
          success: function (data1) {
            console.log(data1);
            if (data1.payment==false) {
                document.getElementById('payment_status'+ref2).innerHTML=`Payment Pending`;

            }else if (data1.payment.status==1) {
                document.getElementById('payment_status'+ref2).innerHTML=`<p>Payment Recieved</p>
                <p><a class="btn btn-primary" href="<?php echo base_url().'index.php/Welcome/update_payment_by_student?id=' ?>`+ref+`&payment_id=`+data1.payment.payment_id+`">Pay to university</a></p>
                `;

            }
            else if (data1.payment.status==2) {
                document.getElementById('payment_status'+ref2).innerHTML=`<p>Paid to University</p>
                
                `;

            }
          }
      });
    }
</script>