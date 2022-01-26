<?php 
include "header.php" ;
include "admin/admin/include/conn.php";
$cat="";$dis=0;$state=0;
 if(isset($_POST['search2'])){

 $cat= $_POST['cat'];
 $state= $_POST['state'];
 $dis= $_POST['dis'];
}
  ?>

 

 <style>

 .searchbar {

     position: relative;

     min-width: 100%;

     width: 0%;

     height: 50px;

     

     overflow: hidden;

     -webkit-transition: width 0.3s;

     -moz-transition: width 0.3s;

     -ms-transition: width 0.3s;

     -o-transition: width 0.3s;

     transition: width 0.3s

 }
 .searchbar-input {

     top: 0;

     right: 0;

     border: 0;

     outline: 0;

     background: #6200EA;

     width: 100%;

     height: 50px;

     margin: 0;

     padding: 0px 55px 0px 20px;

     font-size: 20px;

     color: #fff

 }

 .searchbar-input::-webkit-input-placeholder {

     color: #fff

 }
 .searchbar-input:-moz-placeholder {
     color: #fff
 }
 .searchbar-input::-moz-placeholder {
     color: #fff
 }
 .searchbar-input:-ms-input-placeholder {
     color: #fff
 }



 .searchbar-icon,

 .searchbar-submit {

     width: 50px;

     height: 50px;

     display: block;

     position: absolute;

     top: 0;

     font-family: verdana;

     font-size: 22px;

     right: 0;

     padding: 0;

     margin: 0;

     border: 0;

     outline: 0;

     line-height: 50px;

     text-align: center;

     cursor: pointer;

     color: #fff;

     background: #6200EA;

     border-left: 1px solid white

 }

 .searchbar-open {

     width: 100%

 }

 </style>



<!-- Search Doctor -->

	<div class="container">

<!-- end Search Doctor -->

    

<div class="row">
 <div class="col-md-12">
    <br/>

    <form class="searchbar" method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 

    <input type="search" placeholder="Please Search Doctor Name Only" name="search" class="searchbar-input" onkeyup="buttonUp();" required> 

    <input type="submit" class="searchbar-submit" value="GO"> <span class="searchbar-icon"><i class="fa fa-search" aria-hidden="true"></i></span> </form>

    </div>

 </div>

 <div class="row ">
<div class="col-md-12">
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"  class="pt-3 pb-3">

<div class="row pt-3 pb-3" style="background:#CE254B;">

<div class="col-md-3 col-12"> 

<select name="state" id="statee" class="form-control"  >

        			<option value="">--Select State--</option>

                     <?php 
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

<option value="<?php echo $row['StCode'];?>" <?=$selected; ?>>
<?php echo $row['StateName'];?></option> 

                   <?php  } ?>
</select>

      </div>
      <div class="col-md-3 col-12"> 

    	<select id="inputState" name="dis" class="form-control">

	        <option value="">--Select District--</option>

	        <option  value="71" <?=$dis==71?"Selected":"";?> >Gopalganj</option>

	        <option  value="94" <?=$dis==94?"Selected":"";?>>Siwan</option>

	        

      	</select>

      </div>
    <div class="col-md-3 col-12"> 

    	<select id="inputState" name="cat" class="form-control">

      <option value="">--Select Doctor Category--</option>

       <option value="Gen Physician Doctor"    >Gen Physician Doctor</option>

                          <option   value="Gynaecologist Doctor">Gynaecologist Doctor</option>

                          <option   value="Dentist Doctor">Dentist Doctor</option>

                          <option   value="General Surgeon">General Surgeon</option>

                          <option   value="Homeopathic Doctor">Homeopathic Doctor</option>

                          <option   value="Ayurvedic Doctor">Ayurvedic Doctor</option>

                          <option   value="Child Specialist Doctor">Child Specialist Doctor</option>

                          <option   value="Ear/Nose/Throat Doctor">Ear/Nose/Throat Doctor</option>

                          <option   value="Local Doctor">Local Doctor</option>

                          <option   value="Orthopaedician Doctor">Orthopaedician Doctor</option>

                          <option   value="Neurologist Doctor">Neurologist Doctor</option>

                          <option   value="Gaestroentologist">Gaestroentologist</option>

                          <option   value="Dermatologist">Dermatologist</option>

                          <option   value="Assistant Consultant">Assistant Consultant</option>

                          <option   value="Yoga Consultant">Yoga Consultant</option>

                          <option   value="Therapist">Therapist</option>

                          <option   value="Ophiologist (सर्प,विशेषज्ञ)">Ophiologist (सर्प,विशेषज्ञ)</option>

                          <option   value="Unani"> Unani</option>

                          <option   value="Eye Specialist"> Eye Specialist</option>

                          <option   value="Heart Specialist">Heart Specialist</option>

                          <option   value="Sexologist"> Sexologist</option>

                     

        

       

      </select>

	</div>

    

    

   

    <div class="col-md-2 col-12"> 

    <button type="submit" class="btn btn-warning btn-lg btn-block blink-text" name="search2">Search</button>

    </div>

</div>

</form>
</div>
 </div>
  	

  	    <div id="adsdemo" class="carousel slide pt-3" data-ride="carousel">
 
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
 
  </ul>

  <!-- The slideshow -->



  <div class="carousel-inner ">

        <?php  
    $sql="select file_name from tbl_slider where catid=1";
        $result=$conn->query($sql);
        $sr=0;
        while($list=$result->fetch_assoc()){
            $sr++;
          $ac=$sr==1?"active":"";
        ?>

            <div class="carousel-item <?= $ac;?>"> 

              <img src="https://www.meradoctor.live/admin/admin/slider/<?=$list['file_name'];?>" width="100%" alt=""/> 

            </div>

    <?php } ?>

     

  </div>

	     
</div>


<div class="row pt-5">
<?php 
		$sr=1;

			$dsql="SELECT * FROM  `tbl_doctor` ORDER BY RAND()";
				   if(isset($_POST['search'])){
                     $sreach= $_POST['search'];
				      $dsql="SELECT * FROM  `tbl_doctor`  WHERE dname LIKE '%$sreach%' ORDER BY RAND()";}
				   elseif(isset($_POST['search2'])){

                     $cat= $_POST['cat'];
                     $state= $_POST['state'];
                     $dis= $_POST['dis'];
                     $dsql="";
                     $dsql="SELECT * FROM  `tbl_doctor` where 1=1 ";
					
					if(!empty($state))
					$dsql.=" And  state=$state";
					if(!empty($dis))
					$dsql.=" And dis= $dis";
					if(!empty($cat))
					$dsql.=" And dcategory='$cat'";
		   }

				$result=$conn->query($dsql);
				while($list=$result->fetch_assoc()){ 

					?>


<div class="col-12 col-md-4">
<div class="card">

 

  <div class="text-center">

  <img  src="admin/admin/image-doctor/<?=$list['Image'];?>" style="height: 200px;width:200px" class="img-thumbnail"  alt="<?=$list['dname'];?>" />

  </div>
<h4 class="bg-danger text-white text-center"><?=$list['dname'];?></h4>
  <div class="card-body">

   

    <p class="card-text"><?=$list['ddetails'];?></p>

  </div>

  <ul class="list-group list-group-flush">

    <li class="list-group-item"> Years Of Experience <span class="badge badge-danger pull-right"><?=$list['exp'];?></span></li>

    <li class="list-group-item"> <i class="fa fa-inr" aria-hidden="true"></i> Fee <span class="pull-right"> <?=$list['fee'];?>/-</span></li>

     <li class="list-group-item"> <i class="fa fa-clock-o" aria-hidden="true"> Timing <span class="pull-right"></i> <?=$list['timeing'];?></span></li>

      <li class="list-group-item"> <i class="fa fa-user-md"></i> Category <span class="pull-right"> <?=$list['dcategory'];?></span></li>

    <li class="list-group-item">

    <span class="badge badge-info"><i class="fa fa-map-marker" aria-hidden="true"></i></span>

    <?=$list['address'];?></li>

  </ul>

  <div class="card-body">

   

    <a href="doc-booking.php?did=<?=$list['id'];?>" class="btn btn-warning btn-lg btn-block blink-text" role="button" aria-pressed="true">Book Now</a>

   

   

  </div>

 </div>

</div>


<?php } ?> 

</div>

</div>

<?php include "footer.php" ?>

<script>

     $(document).ready(function(){

 var submitIcon = $('.searchbar-icon');

 var inputBox = $('.searchbar-input');

 var searchbar = $('.searchbar');

 var isOpen = false;

 submitIcon.click(function(){

 if(isOpen == false){

 searchbar.addClass('searchbar-open');

 inputBox.focus();

 isOpen = true;

 } else {

 searchbar.removeClass('searchbar-open');

 inputBox.focusout();

 isOpen = false;

 }

 });

 submitIcon.mouseup(function(){

 return false;

 });

 searchbar.mouseup(function(){

 return false;

 });

 $(document).mouseup(function(){

 if(isOpen == true){

 $('.searchbar-icon').css('display','block');

 submitIcon.click();

 }

 });

 });

 function buttonUp(){

 var inputVal = $('.searchbar-input').val();

 inputVal = $.trim(inputVal).length;

 if( inputVal !== 0){

 $('.searchbar-icon').css('display','none');

 } else {

 $('.searchbar-input').val('');

 $('.searchbar-icon').css('display','block');

 }

 }

</script>