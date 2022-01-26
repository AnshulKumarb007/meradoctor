<?php 
	include "header.php"; 
    include "include/cls_show.php";
 
  $a = new cls_shop();
	if(type2){

		if(isset($_GET['ediit'])){

		  $sql="SELECT * FROM  `tbl_mstore` WHERE id=$_GET[ediit]";
			$list=mysqli_fetch_assoc($conn->query($sql));
            $a->id=$list['id'];
            $a->name=$list['name'];
            $a->mobile=$list['mobile'];
            $a->timing=$list['timing'];
            $a->address=$list['address'];
            $a->of=$list['of'];
            $a->image=$list['image'];
            $a->email=$list['email']; 
            $a->cpname=$list['cpname']; 
            $a->state=$list['state'];
            $a->dis=$list['dis'];
            $a->dis=$list['dis'];
            $a->dposition=$list['dposition'];

		}else{
		    if($user_type==6){ $a->dis=$district;}else{$a->dis=$district='';}
		}
?>
  
 
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-flask"> </i> Add Medical</h1>
        </div>       
      </div>
        
 
            <div class="tile-body">
            <div class="row">

<div class="col-md-7">
  <div class="tile">
    <h3 class="tile-title">Register Medical</h3>
    <hr>
    <div class="tile-body">
      <form action="include/save.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo !empty($a->id) ? $a->id :'';?>">
      
       <div class="form-group row">
                  <label class="control-label col-md-3">  Position</label>
                  <div class="col-md-8">
                    <select class="form-control"  name="dposition">
                      <option value="1"  <?php if($a->dposition=='1'){echo"selected='selected'";} ?>>Normal</option>
                      <option value="2"  <?php if($a->dposition=='2'){echo"selected='selected'";} ?>>Premium</option>
                    </select>
                  </div>
                </div>
      
      
        <div class="form-group row">
                  <label class="control-label col-md-3">Medical Store Category</label>
                  <div class="col-md-8">
                      <select name="category" class="form-control">
                        <option value="">--Select Category--</option>
                        <option <?php if($a->category=='Medical Shop'){echo"selected='selected'";} ?> value="Medical Shop">Medical Shop</option>
                        <option <?php if($a->category=='Homeo Medico'){echo"selected='selected'";} ?> value="Homeo Medico">Homeo Medico</option>
                        <option <?php if($a->category=='Ayush Medico'){echo"selected='selected'";} ?> value="Ayush Medico">Ayush Medico</option> 
                        <option <?php if($a->category=='Medical Agency'){echo"selected='selected'";} ?> value="Medical Agency">Medical Agency</option> 
                      </select>
                  </div>
                </div>
     
    <div class="form-group row">
          <label class="control-label col-md-3">Shop Name</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="name" value="<?php echo !empty($a->name) ? $a->name :'';?>" placeholder="Enter full name">
          </div>
        </div>
         <div class="form-group row">
          <label class="control-label col-md-3">Contact Person</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="cpname" value="<?php echo !empty($a->cpname) ? $a->cpname :'';?>" placeholder="Contact Person">
          </div>
        </div>
     
   
        <div class="form-group row">
            <label class="control-label col-md-3">Timing</label>
            <div class="col-md-8">
        <input class="form-control" type="text" name="timing" value="<?php echo !empty($a->timing) ? $a->timing :'';?>"   placeholder="Timing">
    </div>
            </div>
<div class="form-group row">
  <label class="control-label col-md-3">Mobile</label>
  <div class="col-md-8">
    <input class="form-control" type="text" name="mobile" maxlength="10" value="<?php echo !empty($a->mobile) ? $a->mobile :'';?>" placeholder="Enter Mobile">
  </div>
</div>

<div class="form-group row">
  <label class="control-label col-md-3">Email</label>
  <div class="col-md-8">
    <input class="form-control" type="text" name="email"  value="<?php echo !empty($a->email) ? $a->email :'';?>" placeholder="Enter Email">
  </div>
</div>

            <div class="form-group row">
                  <label class="control-label col-md-3">Online facility</label>
                  <div class="col-md-8">
                    <select class="form-control"  name="of" id="exampleSelect1">
                    <option value="1"  <?php if($a->of=='1'){echo"selected='selected'";} ?>>Yes</option>
                      <option value="2"  <?php if($a->of=='2'){echo"selected='selected'";} ?>>No</option>
                    </select>
                  </div>
                </div>
        <div class="form-group row">
          <label class="control-label col-md-3">Address</label>
          <div class="col-md-8">
            <textarea class="form-control" name="address" rows="4"  placeholder="Enter your address"><?php echo !empty($a->address) ? $a->address :'';?></textarea>
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
            	        <option <?php if($a->dis==71){echo"selected='selected'";} ?> value="71">Gopalganj</option>
            	        <option <?php if($a->dis==94){echo"selected='selected'";} ?> value="94">Siwan</option>
      	        </select>
		    </div>
		  </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Address</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4"    name="address" placeholder="Enter your address"><?php echo !empty($a->address) ? $a->address :'';?></textarea>
                  </div>
                </div>




        <?php if(isset($_GET['ediit'])){?>
                <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" id="imgInp" name="image"><br/>
                       <img id="blah"  src="medical/<?=$list['image'];?>"  width="100%" height="200px"/> 
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
          <button class="btn btn-primary" name="saveshop" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        </div>
      </div>
    </div>

      </form>
    </div>
  
  </div>
</div>
<div class="clearix"></div>

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
  
  <script>
          imgInp.onchange = evt => {
          const [file] = imgInp.files
          if (file) {
          blah.src = URL.createObjectURL(file)
          }
          }
     </script>