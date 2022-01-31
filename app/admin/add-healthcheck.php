<?php 
	include "header.php"; 
	include "include/cls_pathlogy.php";
  $a = new cls_pathlogy();
  if($userd->utype<2){

		if(isset($_GET['ediit'])){

		  $sql="SELECT * FROM  `tbl_healthcheckup` WHERE id=$_GET[ediit]";
			$list=mysqli_fetch_assoc($conn->query($sql));
			$a->id=$list['id'];
            $a->dposition=$list['dposition'];
            $a->pname=$list['pname'];
            $a->cperson=$list['cperson'];
            $a->tdetails=$list['tdetails'];
            $a->establish=$list['establish'];
            $a->mobile=$list['mobile'];
            $a->address=$list['address']; 
            $a->state=$list['state'];
            $a->district=$list['district'];
            $a->category=$list['category'];
            $a->timeing=$list['timeing'];
		}else{
		    if($userd->utype==6){ $a->district=$district;}else{$a->dis=$district='';}
		}
?>
  
 

      <div class="app-title">
        <div>
          <h1><i class="fa fa-flask"> </i> Add Helth Checkup</h1>
        </div>       
      </div>
        
 
            <div class="tile-body">
         <div class="row">

        <div class="col-md-7">
          <div class="tile">
            <h3 class="tile-title">Register Helth Checkup</h3>
            <hr/>
            <div class="tile-body">
              <form action="include/save.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo !empty($a->id) ? $a->id :'';?>"   />
              <div class="form-group row">
                  <label class="control-label col-md-3">Helth Checkup Position</label>
                  <div class="col-md-8">
                    <select class="form-control"  name="dposition" id="exampleSelect1">
                    <option value="1"  <?php if($a->dposition=='1'){echo"selected='selected'";} ?>>Normal</option>
                      <option value="2"  <?php if($a->dposition=='2'){echo"selected='selected'";} ?>>Premium</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Category</label>
                  <div class="col-md-8">
                      <select name="category" class="form-control">
                        <option value="">--Select Category--</option>
                        <option <?php if($a->category=='Health Checkup Centre'){echo"selected='selected'";} ?> value="Blood Test">Health Checkup Centre</option>
                        <option <?php if($a->category=='Accupresure Centre'){echo"selected='selected'";} ?> value="Urine Test">Accupresure Centre</option>
                        <option <?php if($a->category=='Nutrition Centre'){echo"selected='selected'";} ?> value="Urine Test">Nutrition Centre</option>
                        </select>
                  </div>
                </div>

 



            <div class="form-group row">
                  <label class="control-label col-md-3">Center Name</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="pname"  value="<?php echo !empty($a->pname) ? $a->pname :'';?>" placeholder="Enter full name">
                  </div>
                </div>
                 <div class="form-group row">
                  <label class="control-label col-md-3">Contact Person</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="cperson"  value="<?php echo !empty($a->cperson) ? $a->cperson :'';?>" placeholder="Enter full name">
                  </div>
                </div>
 			
                <div class="form-group row">
                  <label class="control-label col-md-3">Timing</label>
                  <div class="col-md-8">
        	        <input class="form-control" type="text" name="timeing" value="<?php echo !empty($a->timeing) ? $a->timeing :'';?>"  placeholder="Enter Timing">
        	      </div>
                </div>

				<div class="form-group row">
                  <label class="control-label col-md-3">Test Details</label>
                  <div class="col-md-8">
                    <textarea class="form-control" name="tdetails" rows="4"   placeholder="Enter Test Details"><?php echo !empty($a->tdetails) ? $a->tdetails :'';?></textarea>
                  </div>
                </div>
               <div class="form-group row">
                  <label class="control-label col-md-3">Established in</label>
                  <div class="col-md-8">
	        <input class="form-control" type="text" name="establish"  value="<?php echo !empty($a->establish) ? $a->establish :'';?>" maxlength="4" placeholder="Enteyear">
	      </div>
                </div>
        <div class="form-group row">
	      <label class="control-label col-md-3">Mobile</label>
	      <div class="col-md-8">
	        <input class="form-control" type="text" name="mobile" maxlength="10"  value="<?php echo !empty($a->mobile) ? $a->mobile :'';?>" placeholder="Enter Mobile">
	      </div>
	    </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                    <textarea class="form-control"  name="address" rows="4" placeholder="Enter your address"><?php echo !empty($a->address) ? $a->address :'';?></textarea>
                  </div>
                </div>

                <div class="form-group row">
	             <label class="control-label col-md-3">State</label>
	             <div class="col-md-8">
            		<select name="state" id="statee" class="form-control"  >
            			<option value="0">--Select State--</option>
                         <?php 
                         include"include/conn.php";
                         $query =mysqli_query($conn,"SELECT * FROM state");
                        while($row=mysqli_fetch_array($query))
                        { 
                            $id=$row['StCode'];
                            if($row['StCode']==5){
                                $selected="selected";
                            }else{
                                $selected="";
                            }
                            
                           
                        ?>
                            <?php  if(isset($_GET['ediit'])){ ?>
                            <option value="<?php echo $row['StCode'];?>" <?php if($a->state==$id){
                                echo"selected='selected'"; }?>><?php echo $row['StateName'];?></option> <?php }else{  ?>
                          
                            <option value="<?php echo $row['StCode'];?>" <?=$selected; ?>><?php echo $row['StateName'];?></option> <?php  }}?>
                       
				</select>
		    </div>
		  </div>
            
            
            <div class="form-group row">
	             <label class="control-label col-md-3">District</label>
	             <div class="col-md-8">
            		<select id="inputState" name="district" class="form-control">
            	        <option >--Select District--</option>
            	        <option <?php if($a->district==71){echo"selected='selected'";} ?> value="71">Gopalganj</option>
            	        <option <?php if($a->district==94){echo"selected='selected'";} ?> value="94">Siwan</option>
      	        </select>
		    </div>
		  </div>

                <?php if(isset($_GET['ediit'])){?>
                <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" id="imgInp" name="image"><br/>
                       <img id="blah"  src="health/<?=$list['image'];?>"  width="100%" height="200px"/> 
                  </div>
                  
                </div>
                  <?php }else{ ?> 
                    <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" id="imgInp" name="image"><br/>
                       <img id="blah" src="#"  width="100%" height="200px"/> 
                  </div>
                  
                </div>

                <?php  } ?>
                <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" name="helthcheckup" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>

              </form>
            </div>
          
          </div>
        </div>
        <div class="clearix"></div>
       
      </div>
  
  	  </div> 
<?php 
 
include "footer.php";
}
else{
echo"<script>alert('You Are Not a Member');document.location='../index.php'</script>";
}?>
  
  <script>
          imgInp.onchange = evt => {
          const [file] = imgInp.files
          if (file) {
          blah.src = URL.createObjectURL(file)
          }
          }
     </script>