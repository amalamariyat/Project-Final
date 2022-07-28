    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1><br>
        <h4>Upload your Educational Documents</h4><br>
        <?php echo form_open_multipart('Welcome/applyAdmission10') ?>
        <!-- <form method="" action=""> -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table class="table">
            <tr>
                <th data_validate="Required">Transcripts</th>
                <td><input type="file" name="transcripts" id="transcripts" required="transcripts" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">IELTS</th>
                <td><input type="file" name="ielts" id="ielts" required="ielts" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Resume</th>
                <td><input type="file" name="resume" id="resume" required="resume" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Educational Credential Assessment</th>
                <td><input type="file" name="educred" id="educred" required="educred" class="fileuploader"></td>
            </tr>
            <tr>
                <th data_validate="Required">Graduation Certificate</th>
                <td><input type="file" name="graducertificate" id="graducertificate" required="graducertificate" class="fileuploader"
                    ></td>
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
<script>
    $(".fileuploader").change(function () {
        var fileExtension = ['pdf'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
            this.value='';
        }
    });
</script>