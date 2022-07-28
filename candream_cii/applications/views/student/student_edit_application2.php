    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
	<center>
		<h1>APPLY FOR ADMISSION</h1><br>
        <h4>General Details</h4>
        <?php echo form_open_multipart('Welcome/edit_application_3') ?>
        <!-- <form method="" action=""> -->
            <input type="hidden" name="insert_id" value="<?php echo $admission['application_id']; ?>">
        <table class="table">
            <tr>
                <th data_validate="Required">First Name</th>
                <td><input type="text" required="First name" class="form-control" name="first_name"
                 value="<?php echo $admission['first_name']; ?>"></td>
            </tr>
            <tr>
                <th>Middle Name</th>
                <td><input type="text" class="form-control" name="middle_name"  value="<?php echo $admission['middle_name']; ?>"></td>
            </tr>
            <tr>
                <th data_validate="Required">Last Name</th>
                <td><input type="text" required="Last name" class="form-control" name="last_name"  value="<?php echo $admission['last_name']; ?>"></td>
            </tr>
            <tr>
                <th data_validate="Required">Date of Birth</th>
                <td><input type="date" required="date of birth" class="form-control" name="birth_date"  value="<?php echo $admission['birth_date']; ?>"></td>
            </tr>

            <tr>
                <th data_validate="Required">Gender</th>
                <td class="form-control">

                <select class="form-control" name="gender"  value="<?php echo $admission['gender']; ?>" required>
                    <option value="" disabled selected hidden>---Select---</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>

                
                </td>
            </tr>
            <tr>
                <th data_validate="Required">Nationality</th>
                <td><select class="form-control" name="nationality" >
                    <option value="" disabled selected hidden>---Select---</option>
                    <option selected>Indian</option>
                    
                </select></td>
            </tr>
            <tr>
                <th data_validate="Required">State</th>
                <td> <select class="form-control" name="state" >
                    <option value="" disabled selected hidden>---Select---</option>
                    <option selected>Kerala</option>
                </select></td>
            </tr>
            <tr>
                <th data_validate="Required">City</th>
                <td> <select class="form-control" name="city"  required>
                    <option value="" disabled selected hidden>---Select---</option>

                    <option>Alappuzha</option>
                    <option>Aroor</option>
                    <option>Cherai</option>
                    <option>Edayar</option>
                    <option>Erumeli</option>
                    <option>Anakal</option>
                    <option>Kottayam</option>
                    <option>Kanjirapally</option>
                    <option>Wayanad</option>
                    <option>Kannur</option>
                    <option>Thalassery</option>
                    <option>Kozhikode</option>
                    <option>Thrissur</option>
                    <option>Kollam</option>
                    <option>Malappuram</option>
                    <option>Palakkad</option>
                    <option>Kasaragod</option>
                    <option>Ponnani</option>
                    <option>Varkala</option>
                    <option>Kayamkulam</option>
                    <option>Thaliparamba</option>
                    <option>Tirur</option>
                    <option>Manjeri</option>
                    <option>Neyyattinkara</option>
                    <option>Pathanamthitta</option>
                    <option>Vadakara</option>
                    <option>Koyilandy</option>

                </select></td>
            </tr>
            <tr>
                <th data_validate="Required">Pin</th>
                <td><input type="number" required="pin" class="form-control" name="pin"  value="<?php echo $admission['pin']; ?>"></td>
            </tr>
            <tr>
                <th data_validate="Required">Phone</th>
                <td><input type="number" required="phone" class="form-control" name="phone"  value="<?php echo $admission['ph']; ?>"></td>
            </tr>
            <tr>
                <th data_validate="Required">Email</th>
                <td>
<input type="email" required="email" class="form-control" name="email"  value="<?php echo $admission['add_email']; ?>"></td>
            </tr>
            <tr>
                <th data_validate="Required">Guardian</th>
                <td><input type="text" required="guardian" class="form-control" name="guardian"  value="<?php echo $admission['guardian']; ?>"></td>
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
