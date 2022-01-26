<?php include "header.php";
	if(type3){
?>	
       <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-users"> </i> User Accounts </h1>
        </div>
       
      </div>
     <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title text-center">User Accounts</h3>
            
            <div class="tile-body">
			
<?php
$sql="SELECT a.*,b.cu_name,c.b_name FROM `tbl_user`  as a INNER JOIN tbl_member as b on a.nid=b.id inner JOIN branch as c on a.branchid=c.id order by b.id";
echo"<table id=\"sampleTable\" class=\"table table-striped table-bordered table-hover\" style=\"width:100%\">
        <thead>
            <tr>
            <td>SR</td>
            <td>Branch</td>
			<td>Member Name</td>
			<td>Type</td>
			<td>Mobile No</td>
			<td>Password</td>
			 
		 	 
			</tr>
			 </thead>
			
			 <tfoot>
            <tr>
            <td>SR</td>
            <td>Branch</td>
			<td>Member Name</td>
			<td>Type</td>
			<td>Mobile No</td>
			<td>Password</td>
			 
		 	 
			</tr>
			</tfoot>";
			echo"<tbody>";      
			$result = $conn->query($sql);
			$sr=1;
			while($list = $result->fetch_assoc())
			{
			      
				echo"<td>".$sr++."</td>";
				echo"<td>".$list['b_name']."</td>";		
				echo"<td>".$list['cu_name']."</td>";	
				
				 
				if($list['type']==1){
					echo"<td>Admin</td>";
				}elseif($list['type']==2){
						echo"<td>Branch</td>";
					}elseif($list['type']==3){
					echo"<td>Agent</td>";
				}else{
					echo"<td>Member</td>";
				}
				 
				echo"<td>".$list['mobile']."</td>";	
				echo"<td>".$list['password']."</td>";	
				//echo"<td>".$list['status']."</td>";	
				//echo "<td><a href='newuser.php?id=$list[id]' type=\"button\"><i class=\"fa fa-edit fa-2x text-warning\"></i></a> <a href='userdelete.php?id=$list[id]' type=\"button\" onclick=\"return confirm('Excuse Me Are you sure Sir')\";><i class=\"fa fa-trash fa-2x red\"></i></a></td>";
				 echo"</tr>";	
			
			}



 			echo"</tbody>";
             
            echo"<table>";
              
?>
		</div>
		</div>
		</div>
</main>
   
<?php include "footer.php";}else{
	echo "<script>alert('You Are Not a Member');document.location='../index.php'</script>";
} ?>
 