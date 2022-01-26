<?php include "header.php";
	if(type3){
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user-md"></i>Booking List</h1>
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
                         
						<th>Name</th> 
						<th>Guardian Name</th> 
						<th>Mobile Number</th>
						<th>Age</th> 
                        <th>Email</th> 
						<th>Action </th> 
					  </tr>
				</thead>
				<tbody>
				<?php  
				$sr=1;
				$sql="SELECT * from tbl_join";
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){ 
					?>
					 <tr>
				  	<td><?=$sr++;?></td> 
                    
					<td><?=$list['name'];?></td>
					<td><?=$list['gname'];?></td> 
					<td><?=$list['mobile'];?></td> 
                    <td><?=$list['age'];?></td> 
                    <td><?=$list['email'];?></td> 
					<td> <a href="#?id=<?=$list['bid'];?>"><i class="fa fa-fw fa-lg fa-2x fa-eye"></i></a></td>
				 
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