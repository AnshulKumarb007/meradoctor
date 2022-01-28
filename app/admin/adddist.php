<?php 
include "header.php";
include "include/conn.php";
include "dBase.php";

$c =  new cls_dis();
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$sql="SELECT * FROM `district` WHERE DistCode=$id";
	$list = mysqli_fetch_assoc($conn->query($sql));
	$c->DistCode=$list['DistCode'];
  $c->StCode=$list['StCode'];
	$c->DistrictName=$list['DistrictName'];
}

if($userd->utype<2){
?>
  
 
      <div class="app-title">
        <div>
          <h1><i class="fa fa-user"> </i> Add State</h1>
        </div>       
      </div>
        
   <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
          <form method="post" action="include/save.php" enctype="multipart/form-data">      
          <input type="hidden" name="DistCode"  value="<?php echo !empty($c->DistCode) ? $c->DistCode :'';?>"/>    
          
        
			  <div class="row"> 
			   <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">State</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
                                <select name="stcode" class="form-control">
                                    <option value="">--select state--</option>
                                    <?php  $sql="select * from state order by StCode DESC";
                                           $result=$conn->query($sql);
                                           if($result){
                                              while($list=$result->fetch_assoc()){?>
                      <option  value="<?=$list['StCode']?>" <?php if($c->StCode==$list['StCode']) echo'selected';?> ><?=$list['StateName']?></option>";
                                            <?php  }
                                           }
                                    ?>
                                </select>
                           </div>
                        </div>
                    </div>                
                </div>
                		  
		 

        <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-2 control-label">District</label>
                        <div class="col-sm-10">
                           <div class="input-group date">
                               <input type="text" name="DistrictName"  value="<?php echo !empty($c->DistrictName) ? $c->DistrictName :'';?>" placeholder="District Name" class="form-control"/>
                           </div>
                        </div>
                    </div>                
                </div>
                		  
			  </div> 
				
				
			          
                </div>
			 	 
			  
            <div class="tile-footer">
              <div class="row text-center">
                <div class="col-md-6">
                 <?php if(isset($_GET['id'])){ ?>
                  <button class="btn btn-primary btn-lg" type="submit" name="add-dis"> Update</button> 
                   <?php }else{?>
                  <button class="btn btn-primary btn-lg" type="submit" name="add-dis"> Register</button>
                   <?php }?>
                </div>
              </div>
            </div>          
 		</form>  
  	  </div>
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
						<th>State</th> 
						<th>District Name</th> 
						 
						<th>Action </th> 
					  </tr>
				</thead>
				<tbody>
				<?php  
                $sr=1; 
				    $sql="SELECT * FROM  `state` as a inner join district as b on a.StCode=b.StCode";
				 
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){
					  
					?>
					 <tr>
				  	<td><?=$sr++;?></td>
				 
				 
					<td><?=$list['StateName'];?></td> 
					<td><?=$list['DistrictName'];?></td> 
				 
					  
			<td><a href="adddist.php?edit=<?=$list['DistCode'];?>"><i class="fa fa-fw fa-lg fa-edit"></i></a></td>
				 
					</tr>
				<?php } ?>
						 
				</tbody>
                </table>
			</div>
		</div>
	  </div>
	</div>
  </div>




  </div>
  
<?php 
 
include "footer.php";
}
else{
echo"<script>alert('You Are Not a Member');document.location='../index.php'</script>";
}?>
  
     