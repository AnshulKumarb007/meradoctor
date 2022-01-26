<?php include "header.php";
	if(type3){
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user-md"></i> Camp List</h1>
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
						<th> Camp NameName</th> 
						<th>Organizer Name</th>
						<th>Organizer Mobile</th> 
						<th>Date </th> 
						<th>Day</th> 
						<th>Action </th> 
					  </tr>
				</thead>
				<tbody>
				<?php  
				$sr=1;
				if($user_type==6){
				$sql="SELECT * FROM  `tbl_camp`";
				}else{
				    $sql="SELECT * FROM  `tbl_camp` where dis=$district";
				}
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){
					  
					?>
					 <tr>
				  	<td><?=$sr++;?></td>
				 
					<td><?=$list['cname'];?></td>
					<td><?=$list['orgnser_name'];?></td> 
					<td><?=$list['orgnser_mobile'];?></td> 
					<td><?=$list['date'];?></td> 
					<td><?=$list['day'];?></td>  
					 <?php 	if($user_type==1){?>
					<td> <a href="add-camp.php?ediit=<?=$list['id'];?>"><i class="fa fa-fw fa-lg fa-edit"></i></a> <a href="delete.php?id=<?=$list['id'];?>&&table=tbl_camp&&page=camp-list.php" onClick="return confirm('Are  You Sure');"><i class="fa fa-fw fa-lg fa-trash text-danger"></i></a></td>
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