<?php 
include "header.php";
include "include/cls_doctor.php";
$a=new cls_doctor();
$sp=0;
$Title="Doctor";
if(isset($_GET['sp'])){
	$sp=1;
	$Title="Sp.Doctor";
	
}
if($userd->utype<2){
?>




  <div class="app-title">

    <div>

      <h1><i class="fa fa-user-md"></i> Doctor List</h1>

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
						<th>Doctor Name</th>
						<th>Gender</th>
						<th>Category</th>
						<th>Position</th>
						<th>Experience</th>
						<th>Details</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Staff Mobile</th>
						<th>Address</th>
						<th>Status</th>
						<th>Image</th>
						<th>Fee</th>
						<th>Timeing</th>
						<th>State</th>
						<th>District</th>
        				<th>Action </th>  
					

					  </tr>

				</thead>

				<tbody>

				<?php  

				$sr=1;
//                  if($user_type==6){
// 				    	$sql="SELECT `id`, `dname`, `gender`, `dcategory`, `dposition`, `exp`, `ddetails`, `email`, `mobile`, `staffmobile`, `address`, `status`, `Image`, `fee`, `timeing`, d.DistrictName,s.StateName FROM  tbl_doctor doc 
// LEFT join  district d on doc.dis= d.DistCode
// LEFT join state s on doc.state=s.StCode where doc.dis=$district";
// 				}else{ 
				$sql="SELECT `id`, `dname`, `gender`, `dcategory`, `dposition`, `exp`, `ddetails`, `email`, `mobile`, `staffmobile`, `address`, `status`, `Image`, `fee`, `timeing`, d.DistrictName,s.StateName FROM  tbl_doctor doc 
LEFT join  district d on doc.dis= d.DistCode
LEFT join state s on doc.state=s.StCode";

// }
				$result=$conn->query($sql);

				while($list=$result->fetch_assoc()){
				

					if($list['gender']==1){

						$gender="Male";

					}else if($list['gender']==2){

						$gender="Female";

					}

					if($list['dposition']==1){

						$dposition="Normal";

					}else if($list['dposition']==2){

						$dposition="Premium";

					}

					?>

				  <tr>

				  	<td><?=$sr++;?></td>

					<td><?=$list['dname'];?></td>

					<td><?=$gender;?></td>

					<td><?=$list['dcategory'];?></td>

					<td><?=$dposition??'NA';?></td>

					<td><?=$list['exp'];?></td> 
					<td><?=$list['ddetails'];?></td>
					<td><?=$list['email'];?></td>
					<td><?=$list['mobile'];?></td> 
					<td><?=$list['staffmobile'];?></td>
					<td><?=$list['address'];?></td> 
					<td><?=$list['status'];?></td> 
					<td> 
					<img class="img-fluid" src="image-doctor/<?=$list['Image'];?>" /></td> 
					<td><?=$list['fee'];?></td> 
					<td><?=$list['timeing'];?></td>
					<td><?=$list['DistrictName'];?></td>
					<td><?=$list['StateName'];?></td>
                     <?php 	if(isset($user_type)){?>
					<td class='text-center'><a href="add-doctor.php?ediit=<?=$list['id'];?>"><i class="fa fa-fw fa-lg fa-edit"></i></a>   <a href="delete.php?id=<?=$list['id'];?>&&table=tbl_doctor&&page=doctor-list.php" onClick="return confirm('Are  You Sure');"><i class="fa fa-fw fa-lg fa-trash text-danger"></i></a></td>
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








<?php include "footer.php";}else{

	echo "<script>alert('You Are Not a Member');document.location='../index.php'</script>";

} ?>