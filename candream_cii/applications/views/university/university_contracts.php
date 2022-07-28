
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    <center><h2>Contract Requests</h2></center> 
    </div>
    <div>
                
                        <div class="panel-body">
                            
                        	<div class="container-fluid">
	<table class="table">
		<thead>
			<th>
				Name
			</th>
			<th>
				Email
			</th>
			<th>
				Phone
			</th>
			<th>
				Website
			</th>
			<th>
				Place
			</th>
			<th>
				View
			</th>
			<th>
				Document
			</th>
			<th>
				Action
			</th>
		</thead>
		<tbody>
			<?php
				foreach($req as $row){
					?>
					<tr>
						<form method="post" action="<?php echo base_url().'index.php/Universitycontroller/contract_actions/'. $row['contract_id']  ?>">
							
						<td>
							<?php echo $row['cunsultancy_name']; ?>
						</td>
						<td>
							<?php echo $row['email']; ?>
							
						</td>
						<td>
							<?php echo $row['phone']; ?>
							
						</td>
						<td>
							<?php echo $row['website']; ?>
							
						</td>
						<td>
							<?php echo $row['place']; ?>
							
						</td>
						<td>
						<a href="view_consultancy_by_id?id=<?php echo $row['cunsultancy_id'] ?>">View Consultancy </a>
						</td>
						<td>
							<select name="action" style="padding:5px">
								<option>
									<?php if($row['c_status']==0){
									echo "Pending";
								}elseif ($row['c_status']==1) {
									// code...
									echo "Accepted";

								}elseif($row['c_status']==2){
									echo "Rejected";

								} ?>
									
								</option>
								<option value="1">Accept</option>
								<option value="2">Reject</option>
							</select>
						</td>
						<td>
							<button class="btn btn-success" type="submit" > Save</button>
						</td>
						</form>

					</tr>
					<?php
				}
			 ?>
		</tbody>
	</table>
</div>



                        </div>   

    
                </div>
            </div>
        </div>

    </section>