<?php include "header.php";
	if(type3){
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-list"></i>Engneers List</h1>
    </div>
  </div>
<div class="row">
     <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              <?php 
              if($user_type==1){
			  	$sql="select * from `tbl_engneers`";
			  }elseif($user_type==2){
				$sql="select * from `tbl_engneers`";
			  }elseif($user_type==3){
				$sql="select * from `tbl_engneers`";
			  }
				$sr=1;
				$result=$conn->query($sql);
				if ($result) {
					echo "<table class=\"table table-hover table-bordered\" id=\"sampleTable\">
				<thead>
					<tr>
						<th>SR. No.</th> 
						<th>User Name</th> 
						<th>Mobile</th>
						<th>Address</th>
				 
						<th>Status</th> 
						<th>Action </th>
						 
					</tr>
				</thead>
				<tbody>";
				while ($list = $result->fetch_assoc()){
				 
							echo"<tr>
							<td>".$sr++."</td>							 
					<td>".$list['name']."</td> 
					<td>".$list['mobile']."</td>
					<td>".$list['address']."</td>
					<td>".$list['status']."</td>
					<td><a href=\"add-eng.php?ediit=$list[id]\" title=\"Edit Details\"><i style=\"font-size: 1.50em\" class=\"fa fa-edit fa fa-2x text-primary\"></i></a> </td>
							 
						</tr>";
						 
				}
				  echo "</tbody>
                </table>";
				}
				?>
			</div>
		</div>
	  </div>
	</div>
  </div>
</main>



<?php include "footer.php";}else{
	echo "<script>alert('You Are Not a Member');document.location='../index.php'</script>";
} ?>