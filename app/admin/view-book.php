<?php 
	include "header.php"; 
     
	if(type4){

        $id=$_GET['id'];

        if($_GET['token']==1){
           $sql="SELECT * FROM  `tbl_docbook` where id = $id";
        }else if($_GET['token']==2){
          $sql="SELECT * FROM  `tbl_pathbook` where id = $id";
        }else if($_GET['token']==3){
          $sql="SELECT * FROM  `tbl_digbook` where id = $id";
        }else if($_GET['token']==4){
          $sql="SELECT * FROM  `tbl_helthbook` where id = $id";
        }


      
        $result=$conn->query($sql);
        while($list=$result->fetch_assoc()){    
          
          
          if($_GET['token']==1){           
           $bookid=$list['bookingid'];
           $name=$list['name'];
           $gname=$list['gname']; 
           $mobile=$list['mobile'] . " - " . $list['othermobile']; 
           $age=$list['age']; 
           $dob=$list['dob'];
           $details=$list['details'];
           $address=$list['address'];
          }else if($_GET['token']==2){
           $bookid=$list['bookingid'];
           $name=$list['name'];
           $gname=$list['gname']; 
           $mobile=$list['mobile'] . " - " . $list['othermobile']; 
           $age=$list['age']; 
           $dob=$list['dob'];
           $details=$list['details'];
           $address=$list['address'];
          }else if($_GET['token']==3){  

          $bookid=$list['bookingid'];
           $name=$list['name'];
           $gname=$list['gname']; 
           $mobile=$list['mobile'] . " - " . $list['othermobile']; 
           $age=$list['age']; 
           $dob=$list['dob'];
           $details=$list['details'];
           $address=$list['address'];


          }else if($_GET['token']==4){

           $bookid=$list['bookingid'];
           $name=$list['name'];
           $gname=$list['gname']; 
           $mobile=$list['mobile'] . " - " . $list['othermobile']; 
           $age=$list['age']; 
           $dob=$list['dob'];
           $details=$list['details'];
           $address=$list['address'];

          }
            
        }

?>
  
 <style>

        .tablexx  td{
          padding:10px;
          border-bottom:1px solid red;
          font-size:20px;
          text-align:center;
        }

</style>


<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"> </i> Patient Details</h1>
        </div>       
      </div>

       
      <div class="tile-body">
          <div class="row">

        <div class="col-md-7">
          <div class="tile">
            
            <div class="tile-body text-center">

              <img src="pat.png"  class="img-responsive" style="width:100px;height:100px"/>

            </div>
              </div>
                </div>
                  </div>


 
            <div class="tile-body">
            <div class="row">

<div class="col-md-7">
  <div class="tile">
     
    <div class="tile-body">
       
        <table class="table-resposnive tablexx"  width="100%"> 

            <tr>
              <td>BookingID </td>
              <td>-</td>
              <td><?=$bookid?></td>
            </tr>
            
            <tr>
              <td> Name </td>
              <td>-</td>
              <td><?=$name?></td>
            </tr>

            <tr>
              <td>Guardian Name </td>
              <td>-</td>
              <td><?=$gname?></td>
            </tr>

            <tr>
              <td>Mobile Number</td>
              <td>-</td>
              <td><?=$mobile?></td>
            </tr>

            

            <tr>
              <td>Age </td>
              <td>-</td>
              <td><?=$age?></td>
            </tr>

           

            <tr>
              <td>Illness Details </td>
              <td>-</td>
              <td><?=$details?></td>
            </tr>

            <tr>
              <td>Address </td>
              <td>-</td>
              <td><?=$address?></td>
            </tr>
           
        </table>
        
        
 
    </div>
  
  </div>
</div>
<div class="clearix"></div>

</div>
        <div class="clearix"></div>
       
      </div>
  
  	  </div> 
</main>
<?php 
 
include "footer.php";
}
else{
echo"<script>alert('You Are Not a Member');document.location='../index.php'</script>";
}?>
  
  <script>
          imgInp.onchange = evt => {
          const [file] = imgInp.files
          if (file) {
          blah.src = URL.createObjectURL(file)
          }
          }
     </script>