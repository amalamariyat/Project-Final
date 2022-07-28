    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1><br>
        <h4>Upload your Documents</h4><br>
        <?php echo form_open_multipart('Welcome/edit_application_6') ?>
        <!-- <form method="" action=""> -->
             <input type="hidden" name="id" value="<?php echo $id; ?>">
            
        <table class="table">
           
            <tr>
                <th data_validate="">Photo</th>
                <td><input type="file" name="photo" id="photo" ></td>
                <td>
                    <input type="hidden" name="photo_text" value="
                    <?php echo $admission['photo'] ?>
                    ">
                    <?php echo $admission['photo'] ?>
                </td>
            </tr>
            <tr>
                <th data_validate="">Signature</th>
                <td><input type="file" name="signature" id="signature" ></td>
                 <td>
                    <input type="hidden" name="signature_text" value="
                    <?php echo $admission['signature'] ?>
                    ">
                    <?php echo $admission['signature'] ?>
                </td>
            </tr>
        </table>
        <div class="offset-md-4">
                <input class="btn btn-success"type="submit" name="btnsubmit" value="Submit" id="btnsubmit">
                
                   
        </div>
    </form>
    </center> 


                </div>
            </div>
        </div>
    </section>
