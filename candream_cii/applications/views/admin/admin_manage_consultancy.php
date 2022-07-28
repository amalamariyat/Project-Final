


<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Manage Cunsultancy
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
					<th>Sno</th>
					<th>Consultancy Name</th>
					<th>Place</th>
					<th>Pin</th>
					<th>Phone</th>
					<th>Email</th>
          <th>Website</th>
          <th>Remarks</th>
          <th>Docs</th>

					<th>Status</th>
          </tr>
        </thead>
        <tbody>
         		 <?php 
                      $n=1; 
                         foreach($consultancy->result() as $row)
                             {?>
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style=""><?php echo $row->cunsultancy_name; ?></td>
                                <td style=""><?php echo $row->place; ?></td>
                                <td style=""><?php echo $row->pin; ?></td>
                                <td style=""><?php echo $row->phone; ?></td>
                                <td style=""><?php echo $row->email; ?></td>
                                <td style=""><?php echo $row->website; ?></td>
                                <td style=""><?php echo $row->remarks; ?></td>
                                <td>
                                  <a href="<?php  echo base_url().'images/'.$row->document; ?> " download>
                                    download
                                  </a>
                                </td>
                                <td style=""><?php echo $row->status; ?></td>
                                <td style=""><a href="acceptConsultancy?id=<?php echo $row->cunsultancy_id; ?>" class="btn btn-primary">Accept</a></td>
                                <td style=""><a href="rejectConsultancy?id=<?php echo $row->cunsultancy_id; ?>" class="btn btn-danger">Reject</a></td>
                              </tr>
                 <?php  $n++;}
                 ?> 
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
