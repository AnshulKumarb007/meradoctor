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
                        <th>BookingID</th> 
						<th>Name</th> 
						<th>Guardian Name</th> 
						<th>Mobile Number</th>
						<th>Pathology Name</th> 
						<th>Action </th> 
						<th>Delete </th> 
					  </tr>
				</thead>
				<tbody>
				<?php  
				$sr=1;
				if($user_type==3){$sql="SELECT a.*,b.pname as doctorname,a.id as bid FROM  `tbl_pathbook` as a inner join tbl_pathlogy as b on a.pathlogyid=b.id where a.pathlogyid=$login_user_id";}
				else if($user_type==6){
				    $sql="SELECT a.*,b.pname as doctorname,a.id as bid FROM  `tbl_pathbook` as a inner join tbl_pathlogy as b on a.pathlogyid=b.id where b.district=$district";
				}
				else{$sql="SELECT a.*,b.pname as doctorname,a.id as bid FROM  `tbl_pathbook` as a inner join tbl_pathlogy as b on a.pathlogyid=b.id";}
				
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){ 
					?>
					 <tr>
				  	<td><?=$sr++;?></td> 
                    <td><?=$list['bookingid'];?></td>
					<td><?=$list['name'];?></td>
					<td><?=$list['gname'];?></td> 
					<td><?=$list['mobile'] . " - " . $list['othermobile'];?></td> 
                    <td><?=$list['doctorname'];?></td> 
					<td> <a href="view-book.php?token=2&&id=<?=$list['bid'];?>"><i class="fa fa-fw fa-lg fa-2x fa-eye"></i></a></td><td>  <a href="book-delete.php?id=<?=$list['id'];?>&&table=tbl_pathbook&&page=booking-pathlist.php" onClick="return confirm('Are  You Sure');"><i class="fa fa-fw fa-lg fa-trash text-danger"></i></a></td>
				 
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