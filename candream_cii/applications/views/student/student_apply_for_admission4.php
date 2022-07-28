    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1><br>
        <h4>Upload your Documents</h4><br>
        <?php echo form_open_multipart('Welcome/applyAdmission4') ?>
        <!-- <form method="" action=""> -->
             <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table class="table">
           
            <tr>
                <th data_validate="Required">Passport</th>
                <td><input type="file" name="passport" id="passport" required="passport" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Visa/ETA(Electronic Travel Autherization)</th>
                <td><input type="file" name="visa/eta" id="visa/eta" required="visa/eta" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Aadhar</th>
                <td><input type="file" name="aadhar" id="aadhar" required="aadhar" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">PAN Card</th>
                <td><input type="file" name="pan" id="pan" required="pan" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Bank Passbook</th>
                <td><input type="file" name="bank_passbook" id="bank_passbook" required="bank_passbook" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Police Clearance</th>
                <td><input type="file" name="police_clearance" id="police_clearance" required="police_clearance" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Self Declaration</th>
                <td><input type="file" name="selfdeclaration" id="selfdeclaration" required="selfdeclaration" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Medical Document </th>
                <td><input type="file" name="medicaldocument" id="medicaldocument" required="medicaldocument" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Proof of fund</th>
                <td><input type="file" name="prooffund" id="prooffund" required="prooffund" class="fileuploader"></td>
            </tr>
             <tr>
                <th data_validate="Required">Covid 19 Vaccination Certificate</th>
                <td><input type="file" name="vaccine" id="vaccine" required="vaccine" class="fileuploader"></td>
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