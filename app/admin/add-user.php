<?php 
	include "header.php"; 
	if($userd->utype){
	$a='';	 
		if(isset($_GET['id'])){
		$sql="SELECT * FROM `opening_account` WHERE id=$_GET[id]";
			$list=mysqli_fetch_assoc($conn->query($sql));
			$a->id=$list['id'];
			$a->nomnee_name=$list['nomnee_name'];
			$a->scid=$list['scid'];
			$a->sc_duration=$list['sc_duration'];
			$a->plan_amount=$list['plan_amount'];
			$a->rel=$list['rel'];
			$a->age=$list['age'];
			$a->per=$list['per'];
			$a->nomnee_name1=$list['nomnee_name1'];
			$a->rel1=$list['rel1'];
			$a->age1=$list['age1'];
			$a->per1=$list['per1'];
			$a->pmode=$list['pmode'];
			$a->memberid=$list['memberid'];
			$a->agent_id=$list['agent_id'];
			$a->take_amount=$list['take_amount'];
			$a->bid=$list['bid'];
			$a->account_no=$list['account_no'];
			
		}
?>
  
 
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"> </i> Add User</h1>
        </div>       
      </div>
        
   <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
          <form method="post" action="include/save.php" enctype="multipart/form-data">      
          <input type="hidden" name="id"  value=""/>
          <input type="hidden" name="create_type" value="Admin"/>
          <input type="hidden" name="type" value="6"/>
        
			  <div class="row"> 
			   <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Full Name</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="name" type="text" value="<?php echo !empty($a->plan_amount) ? $a->plan_amount :'';?>" placeholder="Full Name">
                            </div>
                        </div>
                    </div>                
                </div>
                
                <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">Mobile</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="mobile" type="number" value="<?php echo !empty($a->plan_amount) ? $a->plan_amount :'';?>" placeholder="Mobile">
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
        <input class="form-control datepicker required"   name="password" type="text" value="<?php echo !empty($a->plan_amount) ? $a->plan_amount :'A12345';?>" placeholder="Password">
                            </div>
                        </div>
                    </div>                
                </div>
                <div class="col-md-6">  
                 <div class="form-group row">

	             <label class="control-label col-md-4">District</label>

	             <div class="col-md-8">

            		<select id="inputState" name="district" class="form-control">

            	        <option >--Select District--</option>

            	        <option <?php if($a->dis==71){echo"selected='selected'";} ?> value="71">Gopalganj</option>

            	        <option <?php if($a->dis==94){echo"selected='selected'";} ?> value="94">Siwan</option>

      	        </select>

		    </div>

		  </div>

                		  
			  </div>                
                </div>
			 	 
			  
            <div class="tile-footer">
              <div class="row text-center">
                <div class="col-md-12 col-md-offset-3">
                 <?php if(isset($_GET['id'])){ ?>
                  <button class="btn btn-primary btn-lg" type="submit" name="save_user"> Update</button> 
                   <?php }else{?>
                  <button class="btn btn-primary btn-lg" type="submit" name="save_user"> Register</button>
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
  
     