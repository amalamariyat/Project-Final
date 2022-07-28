<section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">

                	 <h5 class="text-white text-uppercase">University Registration</h5>
	<center>
		<form method="post" action="<?=site_url('Universitycontroller/addUniversity')?>"  enctype="multipart/form-data">
			<table class="table">
			<tr>
				<th data_validate="Required">Name</th>
				<td><input type="text" required="name" class="form-control" name="name"></td>
			</tr>
			<tr>
				<th data_validate="Required">Place</th>
				<td>
                    <select name="place">  
                        <?php foreach($area->result() as $area)
                       {
                          ?>
                         <option value="<?php echo $area->canadaplace_code;?>"><?php echo $area->place;?></option>
                         <?php  
                        } 
                        ?> 
                    </select>            
                </td>
			</tr>
			<tr>
				<th data_validate="Required">Area Code</th>
				<td><input type="number" required="pin" class="form-control" name="areacode"></td>
			</tr>
			<tr>
				<th data_validate="Required">Phone</th>
				<td><input type="number" required="phone" class="form-control" name="phone"></td>
			</tr>
			<tr>
				<th data_validate="Required">Email</th>
				<td><input type="email" required="email" class="form-control" name="email"></td>
			</tr>
            <tr>
                <th data_validate="Required">Website</th>
                <td><input type="text" required="email" class="form-control" name="website"></td>
            </tr>
            <tr>
                <th data_validate="Required">Remarks</th>
                <td><input type="text" required="email" class="form-control" name="remarks"></td>
            </tr>
            <tr>
                <th data_validate="Required">QS World University Ranking</th>
                <td><input type="text" required="email" class="form-control" name="rank"></td>
            </tr>
            <tr>
                <th data_validate="Required">Password</th>
                <td><input type="password" required="password" class="form-control" name="password"></td>
            </tr>
            <tr>
                <th data_validate="Required">Confirm Password</th>
                <td><input type="password" required="confirm_password" class="form-control" name="confirm_password"></td>
            </tr>
			 <tr>
                <th data_validate="Required">Documents</th>
                <td>Upload Licence and other Documents in a single file.
                    <br>
                    Pdf Only !!!
                </td>
                <td><input type="file" required="file" name="licence" id="licence"></td>
            </tr>
            <tr>
                <th data_validate="Required">
                    Available Courses
                </th>
                <td>
                    Please Check the boxes
                    <td>
                        <?php
                            foreach($courses->result() as $row){
                                ?>
                                <input type="checkbox" name="courses_available[]" value="<?php echo $row->course_id; ?>"> 
                                <?php echo $row->course_name;?>
                                <br>
                                <?php
                            }
                         ?>
                    </td>
                </td>
            </tr>
			<tr>
				<td><input class="btn btn-info" type="submit" name="submit" ></td>
			</tr>
			</table>
			
		</form>
	</center>

                </div>
            </div>
        </div>
    </section>