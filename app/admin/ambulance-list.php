<?php include "header.php";
	if(type3){
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user-md"></i> Ambulance  List</h1>
    </div>
  </div>

<div class="row">
     <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              <table class="table table-hover table-bordered" id="sampleTable">
					<thead>
					  <tr>
						<th>SR. No.</th>  
						<th>Driver-Name</th> 
						<th>Driver-Mobile</th>
						<th>Timing</th> 
						 
					 
						<th>Action </th> 
					  </tr>
				</thead>
				<tbody>
				<?php  
				$sr=1;
				 if($user_type==6){
				$sql="SELECT * FROM  `tbl_ambulance` where dis=$district";}
				else{
				 	$sql="SELECT * FROM  `tbl_ambulance`";
				}
			
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){
					 
					?>
					 <tr>
				  	<td><?=$sr++;?></td> 
					<td><?=$list['name'];?></td> 
					<td><?=$list['mobile'];?></td> 
					<td><?=$list['timing'];?></td>  
				 
					  <?php 	if($user_type==1){?>
					<td> <a href="add-ambulance.php?ediit=<?=$list['id'];?>"><i class="fa fa-fw fa-lg fa-edit"></i></a> <a href="delete.php?id=<?=$list['id'];?>&&table=tbl_ambulance&&page=ambulance-list.php" onClick="return confirm('Are  You Sure');"><i class="fa fa-fw fa-lg fa-trash text-danger"></i></a></td>
				 <?php }else{echo"<td> - </td>";}?>
					</tr>
				<?php } ?>
						 
				</tbody>
                </table>
			</div>
		</div>
	  </div>
	</div>
  </div>
</main>



<?php include "footer.php";}else{
	echo "<script>alert('You Are Not a Member');document.location='../index.php'</script>";
} ?>