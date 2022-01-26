<?php 
	include "header.php"; 
    include "include/cls_show.php";
 
  $a = new cls_camp();
	if(type2){

		if(isset($_GET['ediit'])){

		  $sql="SELECT * FROM  `tbl_camp` WHERE id=$_GET[ediit]";
			$list=mysqli_fetch_assoc($conn->query($sql));
            $a->id=$list['id'];
            $a->cname=$list['cname'];
            $a->orgnser_name=$list['orgnser_name'];
            $a->orgnser_mobile=$list['orgnser_mobile'];
            $a->location=$list['location']; 
            $a->date=$list['date']; 
            $a->doctorname=$list['doctorname'];
            $a->typetest=$list['typetest'];
            $a->category=$list['category'];
            $a->image=$list['image'];
            $a->day=$list['day'];
            $a->state=$list['state'];
            $a->dis=$list['dis'];
            $a->address=$list['address'];
		}else{
		    if($user_type==6){ $a->dis=$district;}else{$a->dis=$district='';}
		}
?>
 
 
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-flask"> </i> Add Camp</h1>
        </div>       
      </div>
        
 
            <div class="tile-body">
            <div class="row">

<div class="col-md-7">
  <div class="tile">
    <h3 class="tile-title">Register Camp</h3>
    <hr/>
    <div class="tile-body">
      <form action="include/save.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo !empty($a->id) ? $a->id :'';?>">
      
       
       <div class="form-group row">
          <label class="control-label col-md-3">Category</label>
           <div class="col-md-8">
       	<select id="inputState" name="cat" class="form-control">
      <option >--Select  Category--</option>
       <option value="Medical Camp" >Medical Camp</option>
       <option   value="Gynaecologist Doctor">Blood Donation</option>
                         
      </select>
       </div>
       </div>
       
    <div class="form-group row">
          <label class="control-label col-md-3">Camp Name</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="cname" value="<?php echo !empty($a->cname) ? $a->cname :'';?>" placeholder="Camp Name">
          </div>
        </div>
          
   
            <div class="form-group row">
                <label class="control-label col-md-3">Organizer  Name</label>
                <div class="col-md-8">
            <input class="form-control" type="text" name="orgnser_name" value="<?php echo !empty($a->orgnser_name) ? $a->orgnser_name :'';?>"   placeholder="Organizer  Name ">
                    </div>
                </div>

<div class="form-group row">
  <label class="control-label col-md-3">Organizer Mobile</label>
  <div class="col-md-8">
    <input class="form-control" type="text" name="orgnser_mobile" maxlength="10" value="<?php echo !empty($a->orgnser_mobile) ? $a->orgnser_mobile :'';?>" placeholder="Organizer Mobile">
  </div>
</div>
 
<div class="form-group row">
            <label class="control-label col-md-3">Date</label>
            <div class="col-md-8">
        <input class="form-control" type="date" name="date" value="<?php echo !empty($a->date) ? $a->date :'';?>"   placeholder="Timing">
                </div>
            </div>

            <div class="form-group row">
            <label class="control-label col-md-3">Day</label>
            <div class="col-md-8">
        <input class="form-control" type="text" name="day" value="<?php echo !empty($a->day) ? $a->day :'';?>"   placeholder="Day">
                </div>
            </div>




            <div class="form-group row">
          <label class="control-label col-md-3">Doctor's Name</label>
          <div class="col-md-8">
            <textarea class="form-control" name="doctorname" rows="4"  placeholder="Doctor's Name"><?php echo !empty($a->doctorname) ? $a->doctorname :'';?></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label class="control-label col-md-3">Type Of Test </label>
          <div class="col-md-8">
            <textarea class="form-control" name="typetest" rows="4"  placeholder="Type Of Test"><?php echo !empty($a->typetest) ? $a->typetest :'';?></textarea>
          </div>
        </div>
        
        <div class="form-group row">
                  <label class="control-label col-md-3">Location Category</label>
                  <div class="col-md-8">
                      <select name="category" class="form-control">
                        <option value="">--Select Category--</option>
                        <option <?php if($a->category=='District'){echo"selected='selected'";} ?> value="District">District</option>
                        <option <?php if($a->category=='State'){echo"selected='selected'";} ?> value="State">State</option>
                        <option <?php if($a->category=='Block'){echo"selected='selected'";} ?> value="Block">Block</option> 
                        
                      </select>
                  </div>
                </div>

        <div class="form-group row">
            <label class="control-label col-md-3">Location</label>
            <div class="col-md-8">
        <input class="form-control" type="text" name="location" value="<?php echo !empty($a->location) ? $a->location :'';?>"   placeholder="Timing">
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
            		<select id="inputState" name="dis" class="form-control">
            	        <option >--Select District--</option>
            	        <option <?php if($a->dis==71){echo"selected='selected'";} ?> value="71">Gopalganj</option>
            	        <option <?php if($a->dis==94){echo"selected='selected'";} ?> value="94">Siwan</option>
      	        </select>
		    </div>
		  </div>

                
        <?php if(isset($_GET['ediit'])){?>
                <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" id="imgInp" name="image"><br/>
                       <img id="blah"  src="camp-image/<?=$list['image'];?>"  width="100%" height="200px"/> 
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
          <button class="btn btn-primary" name="camp" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
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