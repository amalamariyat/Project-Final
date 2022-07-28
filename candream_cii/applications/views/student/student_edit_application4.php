    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1><br>
        <h4>Upload your Documents</h4><br>
        <?php echo form_open_multipart('Welcome/edit_application_5') ?>
        <!-- <form method="" action=""> -->
             <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table class="table">
           
            <tr>
                <th data_validate="">Passport</th>
                <td><input type="file" name="passport" id="passport"    class="fileuploader"></td>
                <td>
                    <input type="hidden" name="passport_text" value="
                    <?php echo $admission['passport'];  ?>
                    ">
                    <?php echo $admission['passport'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">Visa/ETA(Electronic Travel Autherization)</th>
                <td><input type="file" name="visa/eta" id="visa/eta"    class="fileuploader"></td>
                <td>
                    <input type="hidden" name="visa/eta_text" value=" 
                    <?php echo $admission['visa/eta'];  ?>
                    ">
                    <?php echo $admission['visa/eta'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">Aadhar</th>
                <td><input type="file" name="aadhar" id="aadhar"    class="fileuploader"></td>
                <td>
                    <input type="hidden" name="adhar_text" value=" 
                    <?php echo $admission['adhar'];  ?>
                    ">
                    <?php echo $admission['adhar'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">PAN Card</th>
                <td><input type="file" name="pan" id="pan"    class="fileuploader"></td>
                 <td>
                    <input type="hidden" name="pan_text" value=" 
                    <?php echo $admission['pan'];  ?>
                    ">
                    <?php echo $admission['pan'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">Bank Passbook</th>
                <td><input type="file" name="bank_passbook" id="bank_passbook"   class="fileuploader"></td>
                <td>
                    <input type="hidden" name="bank_passbook_text" value="
                    <?php echo $admission['bank_passbook'];  ?>
                    ">
                    <?php echo $admission['bank_passbook'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">Police Clearance</th>
                <td><input type="file" name="police_clearance" id="police_clearance"    class="fileuploader"></td>
                    <td>
                    <input type="hidden" name="police_clearance_text" value="
                    <?php echo $admission['police_clearance'];  ?>
                    ">
                    <?php echo $admission['police_clearance'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">Self Declaration</th>
                <td><input type="file" name="selfdeclaration" id="selfdeclaration"    class="fileuploader"></td>
                <td>
                    <input type="hidden" name="selfdeclaration_text" value="
                    <?php echo $admission['self_declaration'];  ?>
                    ">
                    <?php echo $admission['self_declaration'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">Medical Document </th>
                <td><input type="file" name="medicaldocument" id="medicaldocument"    class="fileuploader"></td>
                  <td>
                    <input type="hidden" name="medicaldocument_text" value="
                    <?php echo $admission['medical_document'];  ?>
                    ">
                    <?php echo $admission['medical_document'];  ?>
                </td>
            </tr>
            <tr>
                <th data_validate="  ">Proof of fund</th>
                <td><input type="file" name="prooffund" id="prooffund"    class="fileuploader"></td>
                   <td>
                    <input type="hidden" name="prooffund_text" value="
                    <?php echo $admission['prooffund'];  ?>
                    ">
                    <?php echo $admission['prooffund'];  ?>
                </td>
            </tr>
             <tr>
                <th data_validate="  ">Covid 19 Vaccination Certificate</th>
                <td><input type="file" name="vaccine" id="vaccine"    class="fileuploader"></td>
                   <td>
                    <input type="hidden" name="vaccine_text" value="
                    <?php echo $admission['vaccine'];  ?>
                    ">
                    <?php echo $admission['vaccine'];  ?>
                </td>
            </tr><br>

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



<script>
    $(".fileuploader").change(function () {
        var fileExtension = ['pdf'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
            this.value='';
        }
    });
</script>