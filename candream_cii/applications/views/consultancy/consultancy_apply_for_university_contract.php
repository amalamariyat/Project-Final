   <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                
    <center>
        <h1>University Request</h1>
        <form method="post" action="applyUniversityContract">

        <table class="table">
           
       
            <tr>
                <th data_validate="Required">University</th>
                <td>
                    <select class="form-control" name="university_id" required="university" id="university_id">
                    <option value="" disabled selected hidden>---Select---</option>  
                        <?php foreach($university->result() as $uni)
                        {
                        ?>
                        <option value="<?php echo $uni->university_id;?>"><?php echo $uni->university_name;?></option>
                         <?php  
                        } 
                        ?>
                    </select> 
                </td>
            </tr>
            
            <tr>
                <td><button type="submit">Request</button></td>
            </tr>
        </table>

    </form>
    </center> 
<div class="container-fluid">
    <table class="table">
        <thead>
            <th>
                University
            </th>
            <th>
                Status
            </th>
            
        </thead>
        <tbody>
            <?php foreach($req as $row){
                ?>
            <tr>
                <td>
                    <?php echo $row['university_name']; ?>        
                </td>
                <td>
                    <?php if($row['c_status']==0){
                                    echo "Pending";
                                }elseif ($row['c_status']==1) {
                                    // code...
                                    echo "Accepted";

                                }elseif($row['c_status']==2){
                                    echo "Rejected";

                                } ?>
                </td>
            </tr>
                <?php 
            } ?> 
            
        </tbody>
    </table>
</div>

                </div>
            </div>
        </div>
    </section>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $('#university_id').on('change', function(){
        var id=this.value;
       $.ajax({
          type: "POST",
          dataType: 'JSON',
          url: "<?php echo base_url(); ?>index.php/Consultancycontroller/checkContractExistence",
          data: {
            'id': id
          },
          success: function (data) {
               console.log(data);
               if(data==false){
                alert("Already applied");
                location.reload(true);
               }
          }
      });
    })
</script>