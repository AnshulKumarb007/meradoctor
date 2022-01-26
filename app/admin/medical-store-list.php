<?php include "header.php";
	if(type3){
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user-md"></i>Medical shop List</h1>
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
						<th> Name</th> 
						<th>Contact Person</th>
						<th>Contact</th> 
						<th>Timing </th> 
						<th>Online facility </th> 
						<th>Action </th> 
					  </tr>
				</thead>
				<tbody>
				<?php  
				$sr=1;
				$sql="SELECT * FROM  `tbl_mstore`";
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){
					 
					if($list['of']==1){
						$dposition="Yes";
					}else if($list['of']==2){
						$dposition="No";
					}
					?>
					 <tr>
				  	<td><?=$sr++;?></td>
				 
					<td><?=$list['name'];?></td>
					<td><?=$list['cpname'];?></td> 
					<td><?=$list['mobile'];?></td> 
					<td><?=$list['timing'];?></td> 
					<td><?=$dposition;?></td> 
					 <?php 	if($user_type==1){?>
					<td> <a href="add-shop.php?ediit=<?=$list['id'];?>"><i class="fa fa-fw fa-lg fa-edit"></i></a></td>
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