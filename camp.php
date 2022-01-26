<?php include "header.php" ?>
 
 <style>
     

 .searchbar {
     position: relative;
     min-width: 50px;
     width: 0%;
     height: 50px;
     float: right;
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
   
  
  
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"  class="pt-3 pb-3">
<div class="row pt-3 pb-3" style="background:#CE254B;">
    <div class="col-md-3 col-12"> 
    	<select id="inputState" name="cat" class="form-control">
      <option >--Select  Category--</option>
       <option value="Medical Camp" >Medical Camp</option>
       <option   value="Gynaecologist Doctor">Blood Donation</option>
                         
      </select>
	</div>
    <div class="col-md-3 col-12"> 
    	<select name="state" id="statee" class="form-control">
            			<option value="0">--Select State--</option>
                         <?php 
                         include"admin/admin/include/conn.php";
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
                            <option value="<?php echo $row['StCode'];?>" <?=$selected; ?>><?php echo $row['StateName'];?></option> 
                       <?php  } ?>
                       
				</select>
      </div>
    <div class="col-md-3 col-12"> 
    	<select id="inputState" name="dis" class="form-control">
	        <option >--Select District--</option>
	        <option  value="71">Gopalganj</option>
	        <option  value="94">Siwan</option>
      	</select>
      </div>
   
    <div class="col-md-2 col-12"> 
    <button type="submit" class="btn btn-outline-warning btn-lg btn-block " name="search2">Search</button>
    </div>
</div>
</form>
  

<div class="row">

<?php 

        include"admin/admin/include/conn.php";
				$sr=1;
				   if(isset($_POST['search'])){
                     $sreach= $_POST['search'];
				      $sql="SELECT * FROM  `tbl_camp` WHERE cname LIKE '%$sreach%';";  
				    
				   }else if(isset($_POST['search2'])){
                     $cat= $_POST['cat'];
                     $state= $_POST['state'];
                     $dis= $_POST['dis'];
				       $sql="SELECT * FROM  `tbl_camp` WHERE dcategory='$cat' and state=$state and dis= $dis";  
				     
				   }
				   else{
				       $sql="SELECT * FROM  `tbl_camp`";
				   }
 
				
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){ 
					?>
<div class="col-md-4" style="margin-top:60px;">
<div class="card">
  <div class="card-header bg-primary text-white">
    <h5 class="card-title"><?=$list['cname'];?></h5>
  </div>
  <div class="text-center">
  <img class="card-img-top" src="admin/admin/camp-image/<?=$list['image'];?>" style="height: 200px;width:200px" class="rounded mx-auto d-block"  alt="Card image cap">
  </div>
  <div class="card-body">
   
    <p class="card-text font-weight-bold"> Organizer Name- <?=$list['orgnser_name'];?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> Location <span class="badge badge-danger pull-right"><?=$list['location'];?></span></li>
    <li class="list-group-item">Organizer Mobile <span class="pull-right"><i class="fa fa-mobile" aria-hidden="true"></i> <?=$list['orgnser_mobile'];?></span></li>
     <li class="list-group-item">Day & Date <span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i> <?=$list['day'];?> - <?=$list['date'];?></span></li>
       
    <li class="list-group-item">
    <span class="badge badge-info"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
    <?=$list['address'];?></li>
  </ul>
 
</div>

</div> 
<?php } ?> 
</div>
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