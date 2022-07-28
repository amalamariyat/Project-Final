    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1><br>
        <h4>Upload your Educational Documents</h4><br>
        <?php echo form_open_multipart('Welcome/edit_application_4') ?>
        <!-- <form method="" action=""> -->
            <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table class="table">
            <tr>
                <th data_validate=" ">Transcripts</th>
                <td><input type="file" name="transcripts" id="transcripts"  class="fileuploader"></td>
                <td>
                    <?php echo $admission['transcripts'] ?>
                    <input type="hidden" name="transcripts_text" value="<?php echo $admission['transcripts'] ?>">
                </td>
            </tr>
            <tr>
                <th data_validate=" ">IELTS</th>
                <td><input type="file" name="ielts" id="ielts"  class="fileuploader"  >
                    <input type="hidden" name="ielts_text"  value="<?php echo $admission['ielts'] ?>">
                </td>
                <td>
                    <?php echo $admission['ielts'] ?>
                </td>
            </tr>
            <tr>
                <th data_validate=" ">Resume</th>
                <td><input type="file" name="resume" id="resume" class="fileuploader">
                    <input type="hidden" name="resume_text"  value="<?php echo $admission['resume'] ?>">
                </td>
                <td>
                    <?php echo $admission['resume'] ?>
                </td>
            </tr>
            <tr>
                <th data_validate=" ">Educational Credential Assessment</th>
                <td><input type="file" name="educred" id="educred" class="fileuploader">
                    <input type="hidden" name="educred_text"  value="<?php echo $admission['educred'] ?>"></td>
                    <td>
                        <?php echo $admission['educred'] ?>
                    </td>
            </tr>
            <tr>
                <th data_validate=" ">Graduation Certificate</th>
                <td><input type="file" name="graducertificate" id="graducertificate" class="fileuploader"
                    >
                    <input type="hidden" name="graducertificate_text"  value="<?php echo $admission['graducertificate'] ?>">
                </td>
                <td>
                        <?php echo $admission['graducertificate'] ?>
                    
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
<script>
    $(".fileuploader").change(function () {
        var fileExtension = ['pdf'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
            alert("Only formats are allowed : "+fileExtension.join(', '));
            this.value='';
        }
    });
</script>