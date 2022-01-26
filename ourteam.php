<?php include "header.php" ?>
 <div class="contact">
	<div class="container">
		<div class="contact-agile">
			<div class="contact-top text-center" style="margin-top:10px;">
              
				<h2>Our Team</h2>
				 
			</div> 
 </div></div>

<!-- Search Doctor -->
	<div class="container">
<!-- end Search Doctor --> 
<div class="row" style="margin-top:10px;"> 
<?php 

        include"admin/admin/include/conn.php";
				$sr=1;
				   
				       $sql="SELECT * FROM  `tbl_join`";
				   
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){ 
					?>
<div class="col-md-4" >
<div class="card">
  <div class="card-header bg-primary text-white">
    <h5 class="card-title"><?=$list['name'];?></h5>
  </div>
  <div class="text-center">
 <img src="admin/admin/join/<?=$list['photo'];?>" width="100%" height="350px" class="img-responsive"/> 
  </div>
 
  <!-- <ul class="list-group list-group-flush">
     <li class="list-group-item">Mobile <span class="pull-right"><i class="fa fa-mobile" aria-hidden="true"></i> <?=$list['mobile'];?>/-</span></li>
      
  </ul>  -->
 
</div>
<br/><br/>
</div> 

<?php } ?> 
</div>
</div>
       

</div>
<?php include "footer.php" ?>
 