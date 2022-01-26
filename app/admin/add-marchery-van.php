<?php 
	include "header.php"; 
	include "include/cls_service.php";
  $a = new cls_service();
	if(type2){

		if(isset($_GET['ediit'])){

		  $sql="SELECT * FROM  `tbl_service` WHERE id=$_GET[ediit]";
			$list=mysqli_fetch_assoc($conn->query($sql));
			$a->id=$list['id'];
			$a->service_name=$list['service_name'];
			$a->service_charge=$list['service_charge'];
			$a->image=$list['image']; 

		} 
?>
  
 
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-ambulance"> </i> Add Marchery</h1>
        </div>       
      </div>
        
 
            <div class="tile-body">
         <div class="row">
     
        <div class="col-md-7">
          <div class="tile">
            <h3 class="tile-title">Register Marchery</h3>
            <hr/>
            <div class="tile-body">
              <form class="form-horizontal">
              
             
            <div class="form-group row">
                  <label class="control-label col-md-3">Company Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Enter full name">
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="control-label col-md-3">Contact Person</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" placeholder="Enter full name">
                  </div>
                </div>
 			
          
				<div class="form-group row">
                  <label class="control-label col-md-3">Details</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter Test Details"></textarea>
                  </div>
                </div>
               <div class="form-group row">
                  <label class="control-label col-md-3">Established in</label>
                  <div class="col-md-8">
	        <input class="form-control" type="text" maxlength="4" placeholder="Enteyear">
	      </div>
                </div>
        <div class="form-group row">
	      <label class="control-label col-md-3">Mobile</label>
	      <div class="col-md-8">
	        <input class="form-control" type="text" maxlength="10" placeholder="Enter Mobile">
	      </div>
	    </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" placeholder="Enter your address"></textarea>
                  </div>
                </div>

                
              </form>
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
       
      </div>
  
  	  </div>

  
</main>
<?php 
 
include "footer.php";
}
else{
echo"<script>alert('You Are Not a Member');document.location='../index.php'</script>";
}?>
  
     