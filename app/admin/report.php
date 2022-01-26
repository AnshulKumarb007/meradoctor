<?php include "header.php";
	if(type3){
?>

<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-list"></i> Daily Report</h1>
    </div>
  </div>
<div class="row">
     <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
              <?php 
              if($user_type==1){ 
			  		$sql="select *,b.name,c.service_name,a.id as bookid from `tbl_booking` as a inner join tbl_user as b on a.userid=b.mobile inner join tbl_service as c on a.serviceid=c.id  group by a.bookingid order by a.id DESC ";

			  }elseif($user_type==2){
				$sql="select * from `tbl_booking` order by id DESC";
			  }elseif($user_type==3){
				$sql="select * from `tbl_booking` order by id DESC";
			  }
				$sr=1;
				$result=$conn->query($sql);
				if ($result) {
					echo "<table class=\"table table-hover table-bordered\" id=\"sampleTable\">
				<thead>
					<tr>
                            <th>SR. No.</th> 
                            <th>BookingID</th> 
                            <th>User Name</th>
                            <th>Service Name</th> 
                            <th>Time-Date</th> 
                            <th>District</th>
                            <th>Status</th>  
					</tr>
				</thead>
				<tbody>";

					$time_now=mktime(date('h')+5,date('i')+30,date('s'));
					$date = date('Y-m-d', $time_now); 
                    
				while ($list = $result->fetch_assoc()){ 
                    
 
					if($list['service_status']==1) {
						$status='<b class=text-warning>Pending</b>';
					} else if($list['service_status']==2) {
						$status='<b class=text-primary>Processing</b>';
					}else if($list['service_status']==3) {
						$status='<b class=text-success>Complite</b>';
					}else if($list['service_status']==4) {
						$status='<b>Complite but Payment Due</b>';
					}else if($list['service_status']==5) {
						$status='<b class=text-danger>Reject</b>';
					}

                 
					if($date==$list['date']) {
						$bg='style="background:red;color:#fff;"';
					 
					echo"<tr >
					<td>".$sr++."</td>							 
					<td>".$list['bookingid']."</td>
					<td>".$list['name']."</td>
					<td>".$list['service_name']."</td>
					<td $bg>".$list['time']." / ". $list['date']."</td>
					<td>".$list['district']."</td> 
					<td>".$status."</td> 
				 </tr>";
                    }	 
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