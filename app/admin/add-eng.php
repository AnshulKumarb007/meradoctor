<?php 
	include "header.php"; 
  include "include/cls_eng.php";
  if($userd->utype<2){
	$a = new cls_eng();	 
		if(isset($_GET['ediit'])){
		$sql="SELECT * FROM `tbl_engneers` WHERE id=$_GET[ediit]";
			$list=mysqli_fetch_assoc($conn->query($sql));
			$a->id=$list['id'];
			$a->name=$list['name'];
			$a->password=$list['password'];
			$a->mobile=$list['mobile'];
			$a->email=$list['email'];
			$a->address=$list['address']; 
		}
?>
  
 
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"> </i> Add Service Engnner</h1>
        </div>       
      </div>
        
   <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
          <form method="post" action="include/save.php" enctype="multipart/form-data">      
        <input type="hidden" name="id" value="<?php echo !empty($a->id) ? $a->id :'';?>"/>
                           
     	 
			  <div class="row">
			   
			   <div class="col-md-12">                    
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">Full Name</label>
                        <div class="col-sm-10">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="name" type="text" value="<?php echo !empty($a->name) ? $a->name :'';?>" placeholder="Full Name">
                            </div>
                        </div>
                    </div>                
                </div>
                
                
                		  
			  </div> 
				
				<div class="row">
			   
			   <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Mobile</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="mobile" type="text" value="<?php echo !empty($a->mobile) ? $a->mobile :'';?>" placeholder="Mobile">
                            </div>
                        </div>
                    </div>                
                </div>
                
                <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="email" type="email" value="<?php echo !empty($a->email) ? $a->email :'';?>" placeholder="Email">
                            </div>
                        </div>
                    </div>                
                </div>
                		  
			  </div> 	
			  
			  
			  <div class="row">
			   
			   <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="password" type="password" value="<?php echo !empty($a->password) ? $a->password :'';?>" placeholder="Password">
                            </div>
                        </div>
                    </div>                
                </div>
                
                <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Address</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="address" type="text" value="<?php echo !empty($a->address) ? $a->address :'';?>" placeholder="Address">
                            </div>
                        </div>
                    </div>                
                </div>
                		  
			  </div>  
			 	 
			  
            <div class="tile-footer">
              <div class="row text-center">
                <div class="col-md-12 col-md-offset-3">
                 <?php if(isset($_GET['ediit'])){ ?>
                  <button class="btn btn-primary btn-lg" type="submit" name="add-eng"> Update</button> 
                   <?php }else{?>
                  <button class="btn btn-primary btn-lg" type="submit" name="add-eng"> Register</button>
                   <?php }?>
                </div>
              </div>
            </div>          



 		</form>
  
  	  </div>
	 </div>
	</div>
  </div>
  

<?php 
 
include "footer.php";
}
else{
echo"<script>alert('You Are Not a Member');document.location='../index.php'</script>";
}?>
  
     