<?php include "header.php";
		if($userd->utype<2){
?>

 
  <div class="app-title">
    <div>
      <h1><i class="fa fa-medkit"></i>Marchery List</h1>
    </div>
  </div>

<div class="row">
     <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
					<thead>
					  <tr>
						<th>SR. No.</th> 
						<th>Image</th> 
						<th>Company Name</th>
						<th>Contact</th>
						<th>Test Details</th>
						<th>Mobile</th>
						<th>Address</th>
						<th>Action </th> 
					  </tr>
				</thead>
				<tbody>
				
						 
				</tbody>
                </table>
			</div>
		</div>
	  </div>
	</div>
  </div>
 



<?php include "footer.php";}else{
	echo "<script>alert('You Are Not a Member');document.location='../index.php'</script>";
} ?>