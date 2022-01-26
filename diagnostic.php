<?php include "header.php" ?>
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
<div class="contact">
	<div class="container">
		<div class="contact-agile">
			<div class="contact-top"><br/>
				<h2 align="center">Diagnostic Book</h2>
				<p> </p>
			</div> 
<!-- end Search Doctor -->

<section class="w3l-contact py-5">
<div class="container">
<div class="row">
        <form class="searchbar" method="post" action="<?php $_SERVER['PHP_SELF']; ?>"> 
    <input type="search" placeholder="Please Search Medical Store Name Only" name="search" class="searchbar-input" onkeyup="buttonUp();" required> 
    <input type="submit" class="searchbar-submit" value="GO"> <span class="searchbar-icon"><i class="fa fa-search" aria-hidden="true"></i></span> </form>
    </div>
                </div>
   
  
  
  <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>"  class="pt-3 pb-3">
<div class="row pt-3 pb-3" style="background:#CE254B;">
    <div class="col-md-3 col-12"> 
    	<select id="inputState" name="cat" class="form-control">
      <option >--Select  Category--</option>
                          <option   value="Ultrasound">Ultrasound</option>
                        <option   value="Xray">Xray</option>
                        <option  value="CT-Scan">CT-Scan</option> 
                        <option  value="MRI">MRI</option> 
                     
        
       
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

<?php 

        include"admin/admin/include/conn.php";
				$sr=1;
				$sql="SELECT * FROM  `tbl_diagnostic`";
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){ 
					?>
<div class="col-md-4" style="margin-top:20px;">
<div class="card">
  <div class="card-header bg-primary text-white">
    <h5 class="card-title"><?=$list['dname'];?></h5>
  </div>
  <div class="text-center">
  <img class="card-img-top" src="admin/admin/dignostic-image/<?=$list['image'];?>" style="height: 200px;width:200px" class="rounded mx-auto d-block"  alt="Card image cap">
  </div>
  <div class="card-body">
   
    <p class="card-text font-weight-bold"><?=$list['tdetails'];?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> Years of experience <span class="badge badge-danger pull-right"><?=$list['establish'];?></span></li>
  <li class="list-group-item"> Category <span class="badge badge-danger pull-right"><?=$list['category'];?></span></li>
    <li class="list-group-item">
    <span class="badge badge-info"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
    <?=$list['address'];?></li>
  </ul>
  <div class="card-body">
   
    <a href="dignostic-book.php?did=<?=$list['id'];?>" class="btn btn-warning btn-lg btn-block" role="button" aria-pressed="true">Book Now</a>
   
   
  </div>
   
</div>

</div> 
<?php } ?> 
</div>
</div>
        </div>
</section>
</div></div></div>
<?php include "footer.php" ?>