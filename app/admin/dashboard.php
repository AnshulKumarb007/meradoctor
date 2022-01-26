<?php 
include "header.php";


if($userd->utype==0){?>
<div class="row">
 <div class="col-md-3">
        <a href="../admin/dashboard.php" title="ERP">
          <div class="widget-small primary">
          <i class="icon fa fa-home fa-3x"></i>
            <div class="info">
              <h4>User List</h4>
             
            </div>
          </div>
          </a>
        </div>
</div>



	<div class="row">
        <div class="col-md-4">
        <a href="student_list.php" title="Student List">
          <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Admin(State)</h4>
             
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-4">
          <div class="widget-small info">
          <i class="icon fa fa-graduation-cap fa-3x"></i>
            <div class="info">
              <h4>Admin(District)</h4>
              
            </div>
          </div>
        </div>
        <div class="col-md-4">
<a href="upload_marks.php" >          <div class="widget-small warning">
          <i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Admin(Franchise)</h4>
              
            </div>
          </div>
          </a>

        </div>
       

      </div>
      <div class="row">
       <div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-user-md fa-3x"></i>
            <div class="info">
              <h4>(Doctor)</h4>
             
            </div>
          </div>
        </div>
		<div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-user-md fa-3x"></i>
            <div class="info">
              <h4>(Spl. Doctor)</h4>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
        <a href="student_list.php" title="Student List">
          <div class="widget-small danger"><i class="icon fa fa-medkit fa-3x"></i>
            <div class="info">
              <h4>(Clinic)</h4>
             
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-3">
          <div class="widget-small danger">
          <i class="icon fa fa-hospital-o fa-3x"></i>
            <div class="info">
              <h4>(Hospital)</h4>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
<a href="upload_marks.php" >          
	<div class="widget-small info">
          <i class="icon fa fa-flask fa-3x"></i>
            <div class="info">
              <h4>(Pathlogy)</h4>
              
            </div>
          </div>
          </a>

        </div>
        <div class="col-md-3">
          <div class="widget-small info"><i class="icon fa fa-h-square fa-3x"></i>
            <div class="info">
              <h4>(Diagnostic)</h4>
             
            </div>
          </div>
        </div>
		<div class="col-md-3">
          <div class="widget-small info"><i class="icon fa fa-stethoscope fa-3x"></i>
            <div class="info">
              <h4>(Helth Center)</h4>
             
            </div>
          </div>
        </div>

 <div class="col-md-3">
          <div class="widget-small info"><i class="icon fa fa-hand-lizard-o fa-3x"></i>
            <div class="info">
              <h4>(Acupressure)</h4>
             
            </div>
          </div>
        </div>
		<div class="col-md-3">
          <div class="widget-small info"><i class="icon fa fa-plus-square fa-3x"></i>
            <div class="info">
              <h4>(Medicine Dealer)</h4>
             
            </div>
          </div>
        </div>

      </div>
	
	

	<!--<div class="row">
       	<div class="col-12 col-md-3 p-2">
        	<div class="card text-white bg-secondary mb-3" >
  <i class="icon fa fa-users fa-3x p-2 "></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
	
 		<div class="col-12 col-md-3 p-2">
        	<div class="card text-white bg-success mb-3" >
  <i class="icon fa fa-users fa-3x p-2 "></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-12 col-md-3 p-2">
        	<div class="card text-white bg-danger mb-3" >
  <i class="icon fa fa-users fa-3x p-2 "></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
 		<div class="col-12 col-md-3 p-2">
        	<div class="card text-white bg-warning mb-3" >
  <i class="icon fa fa-users fa-3x p-2 "></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
		<div class="col-12 col-md-3 p-2">
        	<div class="card text-white bg-info mb-3" >
  <i class="icon fa fa-users fa-3x p-2 "></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>

		<div class="col-12 col-md-3 p-2">
        	<div class="card bg-light mb-3" >
  <i class="icon fa fa-users fa-3x p-2 "></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-12 col-md-3 p-2">
        	<div class="card text-white bg-dark mb-3" >
  <i class="icon fa fa-users fa-3x p-2 "></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
</div>-->
      
 <?php } 

elseif($userd->utype==1){?>
 
	<div class="row">
        <div class="col-md-3">
          <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Users</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small info"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small warning"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget-small danger"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
 <?php } ?>

<?php include "footer.php"; ?>