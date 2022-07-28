    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>ADMISSION STATUS</h1>
		<table class="table">
			<tr>
				<th>Sno</th>
        <th>Application ID</th>
        <th>Name of Student</th>
				<th>Consultancy</th>
				<th>University</th>
        <th>Course</th>
				<th>Status of Application</th>
        <th>Action for Application</th>
        <th>Report</th>
        <th>Date of Application</th>
        <th>Payment</th>
        </tr>

          <?php 
                      $n=1; 
                      $ctr=0;
                         foreach($admission_status->result() as $row)
                             {
                                $ctr++;
                                ?>
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style=""><?php echo $row->application_id; ?></td>
                                <td style=""><?php echo $row->first_name; ?></td>
                                <td style=""><?php echo $row->cunsultancy_name; ?></td>
                                <td style=""><?php echo $row->university_name; ?></td>
                                <td>
                                    <?php echo $course_name['course_name'] ?>
                                </td>
                                <td style=""><?php if( $row->add_status==NULL){
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
                                    echo "University Approved";

                                }
                                elseif ($row->add_status==5) {
                                    // code...
                                    echo "Consultancy Rejected";

                                }

                                elseif ($row->add_status==6) {
                                    // code...
                                    echo "university Rejected";

                                }


                                 ?></td>
                                 <td>
                                     <a href="<?php echo base_url().'index.php/Welcome/edit_application?id='.$row->application_id; ?>">
                                         Edit
                                     </a>
                                 </td>
                                 
                                 <td>
                                     <a href="<?php echo base_url().'index.php/Welcome/generate_report?id='.$row->application_id; ?>">Generate Report</a>
                                 </td>
                               
                                 <td>
                                     <?php echo $row->applied_date ?>
                                 </td>
                                  <?php if ($row->add_status==4) {
                                        ?>
                                        <td >
                                            <button class="btn btn-primary" onclick="getPaymentStatus('<?php echo $row->application_id ?>','<?php echo $ctr ?>')">Payment Status</button>

                                        </td>
                                        <td id="payment_status<?php echo $ctr ?>">
                                            
                                        </td>
                                        <?php
                                    } ?>
                                                                  </tr>
                 <?php  $n++;}
                 ?> 
		</table>
	</center>

                </div>
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
                document.getElementById('payment_status'+ref2).innerHTML=`<p>Payment Pending</p>
                <p><a  class="btn btn-primary" href="<?php echo base_url().'index.php/Welcome/complete_payment_by_student?id=' ?>`+ref+`">Pay Now</a></p>
                `;

            }else if (data1.payment.status==1){
                document.getElementById('payment_status'+ref2).innerHTML=`<p>Payment recieved by consultancy</p><p><a href="<?php echo base_url().'index.php/Welcome/generate_reciept?id=' ?>`+ref+`" class="btn btn-primary">Reciept</a></p>
                `;   
            }
            else if (data1.payment.status==2){
                document.getElementById('payment_status'+ref2).innerHTML=`<p>Payment recieved by university</p><p><a href="" class="btn btn-primary">Reciept</a></p>
                `;   
            }
          }
      });
    }
</script>