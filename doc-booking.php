<?php 

include "header.php";

date_default_timezone_set("Asia/Calcutta");

	if(isset($_GET['did'])){

		$did=$_GET['did'];

	}

	if(isset($_GET['msg'])){

		echo "<script>alert('Successfully Booked');document.location='payment.php'</script>";

	}

?> 



 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



<!-- //w3l-content-photo-5 -->

 

<section class="w3l-apply-6" id="appointment">

	<!-- /apply-6-->

	<div class="apply-info ">

		<div class="container  py-sm-3">

			<div class="apply-grids-info row">

	

				<div class="apply-gd-right offset-lg-1 col-lg-8 mt-lg-0 mt-5">

					<div class="apply-form p-sm-5 p-4">

					

						<div class="card">

  <div class="card-header bg-danger">

   Book Appointment

  </div>

  <div class="card-body">

    <form action="admin/admin/include/save.php" method="post">

							<input type="hidden" name="did" value="<?=$did;?>">

							<input type="hidden" name="id" value="">

							<div class="admission-form">

								<div class="form-group">

								  <label>Full Name</label>  

									<input type="text" class="form-control"  name="name" placeholder="Full Name*" required=""  >

								</div>

								<div class="form-group">

								     <label>Guardian Name</label>  

									<input type="text" class="form-control" name="gname" placeholder="Guardian Name*" required=""  >

								</div>

								<div class="form-group">

								     <label>Phone Number</label>  

									<input type="text" class="form-control" name="mobile" placeholder="Phone Number*" required=""  >

								</div>



								<div class="form-group">

								     <label>Other Number</label>  

									<input type="text" maxlength="10" class="form-control" name="othermobile" placeholder="Other Number*" required=""  >

								</div>

								

								<div class="form-group">

								    <label>Age</label> 

									<input type="number" class="form-control" name="age" placeholder="Age*" required=""  >

								</div>

									

							</div>

							<div class="mt-3">

								<div class="form-group">

								    <label>Date</label> 

							<input type="text" class="form-control" name="dob"  id="datepicker"  value="<?=date("d-M-y");?>" placeholder="Date" >

									

								</div>

									<div class="form-group">

								    <label>Time</label> 

							<input type="text" class="form-control" name="btime"  value="<?=date("h:i:s");?>" >

									

								</div>

							</div>

							

							<div class="form-group">

							     <label>illness Details</label> 

								<textarea  class="form-control" name="details" placeholder="illness Details*" required=""> </textarea>

							</div>

							<div class="form-group">

							     <label>Address</label> 

								<textarea  class="form-control" name="address" placeholder="Address*" required=""> </textarea>

							</div>

							<input type="checkbox" required   name="vehicle3" value="1">

							<label for="vehicle3"> <a href="#">Terms and Conditions</a></label><br><br>

							<button type="submit" name="book" class="btn btn-primary submit">Submit Now</button>

						</form>

  </div>

</div>

						

					</div>

				</div>

			</div>

		</div>

	</div>

</section>



<!-- //w3l-content-photo-5 -->



<?php include "footer.php" ?>

 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>

  $( function() {

    $( "#datepicker" ).datepicker();

  } );

  </script>

