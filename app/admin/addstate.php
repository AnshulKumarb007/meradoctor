<?php 
include "header.php";
include "include/conn.php";
 
include "dBase.php";
 

$c =  new cls_state();
if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$sql="SELECT * FROM `state` WHERE StCode=$id";
	$list = mysqli_fetch_assoc($conn->query($sql));
	$c->StCode=$list['StCode'];
	$c->StateName=$list['StateName'];
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
          <form method="post" action="include/save.php">      
          <input type="hidden" name="StCode"  value="<?php echo !empty($c->StCode) ? $c->StCode :'';?>"/>         
			  <div class="row"> 
			   <div class="col-md-6">                    
                    <div class="form-group row">
                        <label class="col-sm-4 control-label">State</label>
                        <div class="col-sm-8">
                           <div class="input-group date">
        <input class="form-control datepicker required"   name="state" type="text" value="<?php echo !empty($c->StateName) ? $c->StateName :'';?>" placeholder="State">
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
                  <button class="btn btn-primary btn-lg" type="submit" name="add-state"> Update</button> 
                   <?php }else{?>
                  <button class="btn btn-primary btn-lg" type="submit" name="add-state"> Save</button>
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
						 
						<th>Action </th> 
					  </tr>
				</thead>
				<tbody>
				<?php  
                $sr=1; 
				    $sql="SELECT * FROM  `state`";
				 
				$result=$conn->query($sql);
				while($list=$result->fetch_assoc()){
					  
					?>
					 <tr>
				  	<td><?=$sr++;?></td>
				 
				 
					<td><?=$list['StateName'];?></td> 
				 
					  
			<td><a href="addstate.php?edit=<?=$list['StCode'];?>"><i class="fa fa-fw fa-lg fa-edit"></i></a></td>
				 
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
  
     