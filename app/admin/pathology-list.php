<?php include "header.php";
	 if($userd->utype<2){
?>

  <div class="app-title">
    <div>
      <h1><i class="fa fa-user-md"></i> Pathology List</h1>
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
						<th>Pathlogy Position</th> 
						<th>Pathlogy Name</th> 
						<th>Contact Person</th>
						<th>Contact</th> 
						<th>Action </th> 
					 
					  </tr>
				</thead>
				<tbody>
				<?php  
				$sr=1;
			 if($userd->utype==6){
				$sql="SELECT * FROM  `tbl_pathlogy` where district=$district";}
				else{
				   	$sql="SELECT * FROM  `tbl_pathlogy`"; 
				}
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){
					 
					if($list['dposition']==1){
						$dposition="Normal";
					}else if($list['dposition']==2){
						$dposition="Premium";
					}
					?>
					 <tr>
				  	<td><?=$sr++;?></td>
					<td><?=$dposition;?></td>
					<td><?=$list['pname'];?></td>
					<td><?=$list['cperson'];?></td> 
					<td><?=$list['mobile'];?></td> 
					 
					<td> <a href="add-pathology.php?ediit=<?=$list['id'];?>"><i class="fa fa-fw fa-lg fa-edit"></i></a>   <a href="delete.php?id=<?=$list['id'];?>&&table=tbl_pathlogy&&page=pathology-list.php" onClick="return confirm('Are  You Sure');"><i class="fa fa-fw fa-lg fa-trash text-danger"></i></a> </td>
				  
					</tr>
				<?php } ?>
						 
				</tbody>
                </table>
			</div>
		</div>
	  </div>
	</div>
  </div>
 



<?php include "footer.php";}else{
	echo "<script>alert('You Are Not a Member');document.location='../index.php'</script>";
} ?>