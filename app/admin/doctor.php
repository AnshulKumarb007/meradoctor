<?php 
include "header.php";
include "include/cls_doctor.php";
if($userd->utype<2){
$a=new cls_doctor();
$sp=0;
$Title="Doctor";
if(isset($_GET['sp'])){
	$sp=1;
	$Title="Sp.Doctor";
}

if(isset($_GET['ediit'])){



  $sql="SELECT * FROM  `tbl_doctor` WHERE id=$_GET[ediit]";

  $list=mysqli_fetch_assoc($conn->query($sql));

  $a->id=$list['id']; 

  $a->dname=$list['dname'];
  $a->gender=$list['gender'];
  $a->dcategory=$list['dcategory'];
  $a->dposition=$list['dposition'];
  $a->exp=$list['exp'];
  $a->ddetails=$list['ddetails'];
  $a->email=$list['email'];
  $a->mobile=$list['mobile'];
  $a->staffmobile=$list['staffmobile'];
  $a->address=$list['address'];
  $a->fee=$list['fee'];
  $a->timeing=$list['timeing'];
  $a->state=$list['state'];
  $a->dis=$list['dis'];

}else{
    if($userd->utype==6){ $a->dis=$district;}else{$a->dis=$district='';}
}




?>
 <div class="app-title">
        <div>
          <h1><i class="fa fa-user-md text-danger" ></i> <?=$Title;?></h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="dashboard.php">DashBoard</a></li>
        </ul>
      </div>

  <div class="row">
        <div class="col-md-12">
          <form action="dbsave.php" method="post" enctype="multipart/form-data" class="form-horizontal">
          <div class="tile">
           
            <div class="tile-body">
           
                <input type="hidden" value="<?php echo !empty($a->id) ? $a->id :'';?>"  name="id"/>
				<div class="card">
				 <div class="card-header bg-primary">
				Pesonal Details
				</div>
				<div class="card-body">
			
				<div class="form-group row">
                  <label class="control-label col-md-3">Doctor Name</label>
                  <div class="col-md-8">
                    <input class="form-control" name="doctorname" value="<?php echo !empty($a->doctorname) ? $a->doctorname :'';?>"    type="text" placeholder="Enter full name">
                  </div>
                </div>
				<div class="form-group row">
                  <label class="control-label col-md-3">Gender</label>
                  <div class="col-md-8">
                    <select class="form-control" name="gender">

                      <option>---Select Gender---</option>

                         <option <?php if($a->gender==1){echo"selected='selected'";} ?> value="1">Male</option>
                         <option <?php if($a->gender==2){echo"selected='selected'";} ?> value="2">Female</option>
                    </select>      
                  </div>
                </div>
				<div class="form-group row">

                  <label class="control-label col-md-3">Image</label>

                  <div class="col-md-8">

                       <input class="form-control" type="file" id="imgInp" name="photo"><br/>

                       <img id="blah" src="#"  width="100%" height="200px"/> 

                  </div>

                  
 				</div>
            </div>
            </div>
                <div class="card">
				 <div class="card-header bg-primary">
				Professional Details
				</div>
				<div class="card-body">
                <?php if($sp==1){ ?>
					<div class="form-group row">

	             <label class="control-label col-md-3">Category</label>

	             <div class="col-md-8">

            		<select name="dcategory" id="statee" class="form-control"  required="" >

            			<option value="">--Select Category--</option>
            			<option value="1">Gen-Physician/???????????? ???????????????????????? ??????????????????</option>
<option value="1">Gynaecologist/?????????????????? ????????? ????????????????????????</option>
<option value="1">Dentist/????????????????????????</option>
<option value="1">General Surgeon/???????????? ???????????????</option>
<option value="1">Homeopathic/????????????????????????????????? ????????????????????????</option>
<option value="1">Ayurvedic/?????????????????????????????? ????????????????????????</option>
<option value="1">Child Specialist/?????????????????? ??????????????????????????????</option>
<option value="1">Ear/Nose/Throat Doctor/?????????/?????????/????????? ?????? ??????????????????</option>
<option value="1">Local Doctor/????????????????????? ????????????????????????</option>
<option value="1">Orthopaedician /??????????????? ????????? ???????????????????????? </option>
<option value="1">Neurologist /??????????????????????????????????????? ??????????????????</option>
<option value="1">Gaestroentologist/?????????????????????????????????????????????????????????</option>
<option value="1">Dermatologist/??????????????? ????????????????????????</option>
<option value="1">Assistant Consultant/??????????????? ?????????????????????</option>
<option value="1">Yoga Consultant/????????? ?????????????????????</option>
<option value="1">Therapist/????????????????????????</option>
<option value="1">Ophiologist/????????????,????????????????????????</option>
<option value="1">Unani/??????????????????</option>
<option value="1">Eye Specialist/??????????????? ????????????????????????</option>
<option value="1">Heart Specialist/???????????? ????????????????????????</option>
<option value="1">Sexologist/???????????????????????????????????????</option>

                       
				</select>

		    </div>

		  </div>


      <div class="form-group row">
                        <label class="col-sm-3 control-label">Icon</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
                                <select name="icon" class="form-control">
                                    <option value="">--select icon--</option>
                                    <?php  $sql="select * from tbl_category order by id DESC";
                                           $result=$conn->query($sql);
                                           if($result){
                                              while($list=$result->fetch_assoc()){?>
                      <option  value="<?=$list['id']?>" <?php if($a->iconid==$list['id']) echo'selected';?> ><?=$list['category_name']?></option>";
                                            <?php  }
                                           }
                                    ?>
                                </select>
                           </div>
                        </div>
                    </div>    







				<?php } ?>
				<div class="form-group row">

                  <label class="control-label col-md-3">Doctot Details</label>

                  <div class="col-md-8">

                    <textarea class="form-control" name="ddetails"  rows="4" placeholder="Enter your address"><?php echo !empty($a->ddetails) ? $a->ddetails :'';?></textarea>

                  </div>

                </div>
				<div class="form-group row">

                  <label class="control-label col-md-3">Exprince</label>

                  <div class="col-md-8">

	        <input class="form-control" type="text" name="exprince" value="<?php echo !empty($a->exprince) ? $a->exprince :'';?>"  placeholder="Enter Exprince">

	      </div>

        </div>
 				<div class="form-group row">

          <label class="control-label col-md-3">Fee</label>

          <div class="col-md-4">

            <input class="form-control" type="number" maxlength="10" value="<?php echo !empty($a->fee) ? $a->fee :'';?>" name="fee" placeholder="Enter Fee">

          </div>

        </div>
 				<div class="form-group row">

                  <label class="control-label col-md-3">Timing</label>

                  <div class="col-md-8">

        	        <input class="form-control" type="text" name="timeing" value="<?php echo !empty($a->timeing) ? $a->timeing :'';?>"  placeholder="Enter Timing">

        	      </div>

                </div>
 	</div>
    </div>
 				<div class="card">
				 <div class="card-header bg-primary">
				Contact Details
				</div>
				<div class="card-body">
 				<div class="form-group row">

                  <label class="control-label col-md-3">Email</label>

                  <div class="col-md-8">

                    <input class="form-control col-md-8" name="email" value="<?php echo !empty($a->email) ? $a->email :'';?>" type="email" placeholder="Enter email address">

                  </div>

                </div>
				<div class="form-group row">

	      <label class="control-label col-md-3">Doctor Mobile</label>

	      <div class="col-md-8">

	        <input class="form-control" type="text" maxlength="10" value="<?php echo !empty($a->mobile) ? $a->mobile :'';?>" name="mobile" placeholder="Enter Mobile">

	      </div>

	    </div>

				<div class="form-group row">

	      <label class="control-label col-md-3">Staff Mobile No.</label>

	      <div class="col-md-8">

	        <input class="form-control" type="text" maxlength="10" value="<?php echo !empty($a->staffmobile) ? $a->staffmobile :'';?>" name="smobile" placeholder="Enter Mobile">

	      </div>

	    </div>

				<div class="form-group row">

	             <label class="control-label col-md-3">State</label>

	             <div class="col-md-8">

            		<select name="state" id="statee" class="form-control"  >

            			<option value="">--Select State--</option>
            			<option value="1">Bihar</option>

                       
				</select>

		    </div>

		  </div>

           		<div class="form-group row">

	             <label class="control-label col-md-3">District</label>

	             <div class="col-md-8">

            		<select name="dis" id="statee" class="form-control"  >

            			<option value="">--Select State--</option>
            			<option value="1">Gopalganj</option>

                       
				</select>

		    </div>

		  </div>

                <div class="form-group row">

                  <label class="control-label col-md-3">Address</label>

                  <div class="col-md-8">

                    <textarea class="form-control" rows="4"    name="address" placeholder="Enter your address"><?php echo !empty($a->address) ? $a->address :'';?></textarea>

                  </div>

                </div>

</div>
    </div>
				<div class="card">
				 <div class="card-header bg-danger">
				Official Details
				</div>
				<div class="card-body">
<div class="form-group row">

                  <label class="control-label col-md-3">Booking</label>

                  <div class="col-md-8">

                     <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1" name="booking" type="checkbox">Booking
                    </label>
                  </div>

                  </div>

                </div>

<div class="form-group row">

                  <label class="control-label col-md-3">Premium Member</label>

                  <div class="col-md-8">

                     <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" value="1" name="premiummember" type="checkbox">Premium Member
                    </label>
                  </div>

                  </div>

                </div>


             
          </div>
            </div>
               
             
            </div>
            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                   <button class="btn btn-primary" name="doctor" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                </div>
              </div>
            </div>
 
          </div>
          </form>
        </div>
      </div>
    

<?php include "footer.php"; 
}
?>
  <!-- Page specific javascripts-->
    <!-- Data table plugin-->
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <!-- Google analytics script-->