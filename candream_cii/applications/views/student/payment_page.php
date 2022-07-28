<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAYMENT | Page</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bs5.min.css'?>">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<?php

// $amt=$_REQUEST['price'];
	// $amt=$fees+$consultancy_fee;
	$amt=1;


$description        = "Product Description";
$txnid              = date("YmdHis");     
$key_id             = "rzp_test_DbugLwShpRXgar";
// $key_id     = "rzp_test_EvTOLjWTfVD2vD";
$currency_code      = 'INR'; 

$amount             = $amt;           
$total              = ($amount * 100); // 100 = 1 indian rupees

$merchant_order_id  =  'order_id'; 
$card_holder_name   = '';
$email              = '';
$phone              = '';
$name               = "CANDREAM";
?>







<div class="container-fluid pt-5 text-center">
	<h1 class="text-center pt-5">
		Complete Payment
	</h1>
	<div class="row pt5">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			
	<form id="razorpay-form" class=" form form-group pt-5" action="<?php echo base_url().'index.php/Welcome/finish_payment' ?>">






<!-- --------------------------------------------------------------- -->



<input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" value="Pay_" />
        
              <input type="hidden" name="email" id="email" placeholder="Email Address *" value="" >
              <input type="hidden" name="phone" id="phone" value="" >



        <!-- -------------------------------------------------------------- -->




		<table class="table">
			<tr>
				<th>
		<label>Course Fee</label>
					
				</th>
				<th>
					
	<input type="hidden" name="fees1" value="<?php echo $fees+$consultancy_fee ?>">
		
	<input type="text" name="fees" value="<?php echo $fees ?>" disabled>

	<input type="hidden" name="student_id" value="<?php echo $stud_id ?>">	
				</th>
			</tr>
			<tr>
				<th>
	<label>Consultancy Charges</label>
					
				</th>
				<th>
	<input type="text" name="c_fee" value="<?php echo $consultancy_fee ?>" disabled>
					
				</th>
			</tr>
			<tr>
				<th>
					<p>
						<b>
							Total
						</b>
					</p>
				</th>
				<th>
					<p>
						<b>
							<?php
							echo $fees+$consultancy_fee ?>
						</b>
					</p>
				</th>
			</tr>
			<tr>

				<th>
					
				</th>
				<th>
	<!-- <input type="submit" class="mt-5 btn btn-success"  > -->
					<p onclick="razorpaySubmit(this);" >
						Pay now
					</p>
				</th>
			</tr>
		</table>

</form>
		</div>
		<div class="col-sm-4"></div>

	</div>
</div>
</body>



      <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        var options = {
            key:            "<?php echo $key_id; ?>",
            amount:         "<?php echo $total; ?>",
            name:           "<?php echo $name; ?>",
            description:    "Order # <?php echo $merchant_order_id; ?>",
            netbanking:     true,
            currency:       "<?php echo $currency_code; ?>", // INR
            prefill: {
                name:       "<?php echo $card_holder_name; ?>",
                email:      "<?php echo $email; ?>",
                contact:    "<?php echo $phone; ?>"
            },
            notes: {
                soolegal_order_id: "<?php echo $merchant_order_id; ?>",
            },
            handler: function (transaction) {
                document.getElementById('razorpay_payment_id').value = transaction.razorpay_payment_id;
                     $.ajax({
                    type:'POST',
                    data: $("#razorpay-form").serialize(),
                    url : '<?=site_url('Welcome/finish_payment')?>',
                    dataType: 'json',
                    success : function(data){
                      console.log("111111111111111111111111111111111111");
                     // console.log(data);
                     // var home=$('#home_url').val(); 
                     // var duration=$('#duration').val(); 

                     // var course=$('#course_name').val(); 

                 // $('#post_pay_modal').modal('show');
                 
                 location.href='<?php echo base_url().'index.php/Welcome/admissionStatus'  ?>';
    
                 
                     
                    },
             error: function (request, status, error,data) {

                  // alert("error");
                  console.log(data);

                  console.log(error);
                  console.log(request);
                  console.log(status);
              }  

                });
                // document.getElementById('razorpay-form').submit();

            
                
            },
            "modal": {
                "ondismiss": function(){
                    // location.reload();
                }
            }
        };

        var razorpay_pay_btn, instance;
        function razorpaySubmit(el) {
          
            // console.log($("#email").val());
            options.prefill.email = $("#email").val();
            options.prefill.contact = $("#phone").val();
            if(typeof Razorpay == 'undefined') {
                setTimeout(razorpaySubmit, 200);
                if(!razorpay_pay_btn && el) {
                    razorpay_pay_btn    = el;
                    el.disabled         = true;
                    el.value            = 'Please wait...';  
                }
            } else {
                if(!instance) {
                    instance = new Razorpay(options);
                    if(razorpay_pay_btn) {
                    razorpay_pay_btn.disabled   = false;
                    razorpay_pay_btn.value      = "Pay Now";


                    }
                }
                // function myFunction(){
           
                // }
                 
                 
                instance.open();
            }
        }  
    </script>



</html>