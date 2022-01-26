<?php include "header.php";
	if(isset($_GET['did'])){
		$did=$_GET['did'];
	}
	if(isset($_GET['msg'])){
		echo "<script>alert('Please Pay Here');document.location='payment.php'</script>";
	}
?> 
<!-- //w3l-content-photo-5 --> 
<div class="services">
	<div class="container">
	    <br/>
	    <div class="row">
	        <div class="col-md-6">
		<div class="services-main">
			<div class="services-top">
				<h2>Diagnostic Book Appointment</h2>
			</div>
			
		                 <div class="services-bottom"> 
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
									<input type="text" class="form-control" name="othermobile" placeholder="Other Number*" required=""  >
								</div>
								
								<div class="form-group">
								    <label>Age</label> 
									<input type="number" class="form-control" name="age" placeholder="Age*" required=""  >
								</div>
							</div>
							<div class="mt-3">
								<div class="form-group">
								     <label>Date</label> 
									<input type="date" class="form-control" name="dob" placeholder="Date" required="">
								</div>
							</div>
							
							<div class="form-group">
							     <label>illness Details</label> 
								<textarea  class="form-control" name="details" placeholder="illness Details*" required=""></textarea>
							</div>
							<div class="form-group">
							     <label>Address</label> 
								<textarea  class="form-control" name="address" placeholder="Address*" required=""></textarea>
							</div>
							<input type="checkbox" required   name="vehicle3" value="1">
							<label for="vehicle3"> <a href="#"> Terms and Conditions</a></label><br><br>
							<button type="submit" name="book-dignostic" class="btn btn-primary submit">Submit Now</button>
						</form>
				</div>
			</div>
			<br/>
		</div>
	</div>
	</div>
		</div>
</div>
</section>

<!-- //w3l-content-photo-5 -->

<?php include "footer.php" ?>