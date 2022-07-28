
<section id="main-content">
	<section class="wrapper">
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    



             <div class="panel panel-default">
    <div class="panel-heading">
     University
    </div>
    <div>
      <table class="table" id="university_table" ui-jq="footable" ui-options='{
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
                    <th>University Name</th>
                    <th>Place</th>
                    <th>Pin</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Remarks</th>
                    <th>Rank</th>
                    <th>Download</th>
                    <th>Status</th>
          </tr>
        </thead>
        <tbody>
             <?php 
                      $n=1; 
                         foreach($university->result() as $row)
                             {?>
                              <tr>
                                <td style=""><?php echo $n;?></td>
                                <td style=""><?php echo $row->university_name; ?></td>
                                <td style=""><?php echo $row->place; ?></td>
                                <td style=""><?php echo $row->areacode; ?></td>
                                <td style=""><?php echo $row->phone; ?></td>
                                <td style=""><?php echo $row->email; ?></td>
                                <td style=""><?php echo $row->website; ?></td>
                                <td style=""><?php echo $row->remarks; ?></td>
                                <td style=""><?php echo $row->rank; ?></td>
                                <td style=""><a href="<?php echo base_url().'images/'.$row->document; ?>" class="dwn" download>Download</a></td>
                                <td style=""><?php echo $row->status; ?></td>
                                <td style=""><a href="acceptUniversity?id=<?php echo $row->university_id; ?>" class="btn btn-primary">Valid</a></td>
                                <td style=""><a href="rejectUniversity?id=<?php echo $row->university_id; ?>" class="btn btn-danger">Invalid</a></td>
                               
                              </tr>
                 <?php  $n++;}
                 ?> 
             
        </tbody>
      </table>
    </div>
  </div>

            </div>



        <!-- page end-->
        </div>
</section>

 <script type="text/javascript">
        var table = document.getElementById('university_table');
                      
                      for(var i = 1; i < table.rows.length; i++)
                      {
                          table.rows[i].onclick = function()
                          {
                               document.getElementById("id").value = this.cells[1].innerHTML;
                               document.getElementById("name").value = this.cells[2].innerHTML;
                               document.getElementById("place").value = this.cells[3].innerHTML;
                               document.getElementById("email").value = this.cells[4].innerHTML;
                               document.getElementById("btnsave").value = "Update";
                                
                               
                          };
                      }
         var clear = document.getElementById('btnclear');   
        clear.onclick=function()
         {
                                document.getElementById("accountgroup").value = "";
                               document.getElementById("under").value = "";
                               document.getElementById("narration").value ="";
                               document.getElementById("accountgroupid").value ="";
                               document.getElementById("btnsave").value = "Save";
                              
         }
      </script>
