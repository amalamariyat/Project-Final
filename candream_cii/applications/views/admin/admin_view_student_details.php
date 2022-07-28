


<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     View student details
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
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>District</th>
					<th>State</th>
					<th>Pincode</th>
          </tr>
        </thead>
        <tbody>
         		 <?php 
                      $n=1; 
                         foreach($student->result() as $row)
                             {?>
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style=""><?php echo $row->first_name; ?></td>
                                <td style=""><?php echo $row->email; ?></td>
                                <td style=""><?php echo $row->mobile; ?></td>
                                <td style=""><?php echo $row->district; ?></td>
                                <td style=""><?php echo $row->state; ?></td>
                                <td style=""><?php echo $row->pincode; ?></td>
                           
                              </tr>
                 <?php  $n++;}
                 ?> 
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
