<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bs5.min.css'?>">
	  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
  <style>
  	
  </style>
</head>
<body>

<div class="container-fluid canvas_div_pdf" id="content" style="position: relative"> 
	<div class="" style="position:absolute; top:50%; right:20%; opacity:0.06; z-index:9999; color:black;margin:auto ;font-size: 22vh;font-weight: 900;transform: rotate(330deg);">

 	CANDREAM
 </div>
	<div class="row p-5 text-center">
		<h1>
			CANDREAM
		</h1>
		<p>
			<b>
				Application 
			</b>
		</p>
	</div>
	<div class="row">
		<div class="col-sm-3"></div>
<div class="col-sm-6">

<table class="table table-striped table-bordered table-hover">
	<tbody>
<tr>
					<th>
						Name
					</th>
					<th>
							<?php echo $first_name.' '.$middle_name.' '.$last_name; ?>
					</th>
				</tr>
				<tr>
					
					<th>
						Email
					</th>
					<th>
						<?php echo $email ?>
						
					</th>
				</tr>
				<tr>

					<th>
						Phone
					</th>
					<th>
						<?php echo $phone ?>
					</th>
				</tr>
				<tr>

					<th>
						D.O.B
					</th>
					<th>
						<?php echo $birth_date ?>
						
					</th>
</tr>
<tr>
					<th>
						Gender
					</th>
					<th>
						<?php echo $gender ?>
						
					</th>
				
					

				</tr>
				<tr>
					<th>
						Nationality
					</th>
					<th>
						<?php echo $nationality ?>
						
					</th>
				</tr>

				<tr>
										<th>
						State
					</th>
					<th>
						<?php echo $state ?>
						
					</th>

				</tr>

				<tr>
					
					<th>
						City
					</th>
					<th>
						<?php echo $city ?>
						
					</th>

				</tr>
				<tr>
					

					<th>
						Pin
					</th>
					<th>
						<?php echo $pin ?>
						
					</th>

				</tr>
				<tr>
					<th>
						Course Name
					</th>
					<th>
						<?php echo $course_name ?>
					</th>
				</tr>
				<tr>
					<th>
						Consultancy
					</th>
					<th>
						<?php echo $cunsultancy_name ?>
					</th>
				</tr>
				<tr>
					<th>
						University
					</th>
					<th>
						<?php echo $university_name ?>
					</th>
				</tr>
				<tr>
				<th>
					Status
				</th>
				<th>
					<?php if( $status==NULL){
                                    echo "Pending";
                                }elseif ($status==1) {
                                    // code...
                                    echo "Consultancy Verified";

                                }
                                elseif ($status==2) {
                                    // code...
                                    echo "Consultancy forwarded to university";

                                }
                                elseif ($status==3) {
                                    // code...
                                    echo "university Verified";

                                }
                                elseif ($status==4) {
                                    // code...
                                    echo "university Approved";

                                }
                                elseif ($status==5) {
                                    // code...
                                    echo "Consultancy Rejected";

                                }

                                elseif ($status==6) {
                                    // code...
                                    echo "university Rejected";

                                }


                                 ?>
				</th>
			</tr>
			</tbody>
		</table>
	</div>
		<div class="col-sm-3"></div>

</div>
</div>
<div id="" onclick="getPDF()" class="btn btn-success m-5">Download</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 270,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>
<script>
	function getPDF(){

		var HTML_Width = $(".canvas_div_pdf").width();
		var HTML_Height = $(".canvas_div_pdf").height();
		var top_left_margin = 15;
		var PDF_Width = HTML_Width+(top_left_margin*2);
		var PDF_Height = (PDF_Width*1.5)+(top_left_margin*2);
		var canvas_image_width = HTML_Width;
		var canvas_image_height = HTML_Height;
		
		var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
		

		html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
			canvas.getContext('2d');
			
			console.log(canvas.height+"  "+canvas.width);
			
			
			var imgData = canvas.toDataURL("image/jpeg", 1.0);
			var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
		    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
			
			
			for (var i = 1; i <= totalPDFPages; i++) { 
				pdf.addPage(PDF_Width, PDF_Height);
				pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
			}
			
		    pdf.save("HTML-Document.pdf");
        });
	};
</script>
</html>