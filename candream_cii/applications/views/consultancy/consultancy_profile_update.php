 <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">

                	<center>
		<form method="post" action="<?=site_url('Consultancycontroller/consultancy_profile')?>" enctype="multipart/form-data">
			<table class="table">
			<tr>
				<th data_validate="Required">Name</th>
				<td><input type="text" required="name" class="form-control" name="name"></td>
			</tr>
			<tr>
				<th data_validate="Required">Place</th>
				<td>
                    <select name="select">  
                        <?php foreach($place->result() as $city)
                       {
                          ?>
                         <option value="<?php echo $city->city_code;?>"><?php echo $city->city;?></option>
                         <?php  
                        } 
                        ?> 
                    </select>
                </td>
			</tr>
			<tr>
				<th data_validate="Required">Pin</th>
				<td><input type="number" required="pin" class="form-control" name="pin"></td>
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
                <td><input type="text" required="website" class="form-control" name="website"></td>
            </tr>
            <tr>
                <th data_validate="Required">Remarks</th>
                <td><input type="text" required="remarks" class="form-control" name="remarks"></td>
            </tr>
            <tr>
                <th data_validate="Required">
                    Password
                </th>
                <td>
                    <input type="password" name="password" class="form-control" required="password" minlength="8" placeholder="minimun 8 characters required">
                </td>
            </tr>
            <tr>
                <th data_validate="Required">
                    Confirm Password
                </th>
                <td>
                    <input type="password" name="c_password" class="form-control" required="c_password"  minlength="8">
                </td>
            </tr>
			 <tr>
                <th>Documents</th>
                <td>All documents should be uploaded as a single file.</td>
                <td><input type="file" name="licence" id="licence"></td>
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