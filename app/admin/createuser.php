<?php include "header.php";
if(type3){
$newuser=new clsusertype();
	if(isset($_GET['id'])){
		$id=$_GET['id'];
$sql="select id,username,password,mobile,email from tbl_admin where id=$id";
	$result=$conn->query($sql);
	if($result){
		while($list=$result->fetch_assoc()){
			$newuser->id=$list['id'];
			$newuser->name=$list['name'];
			$newuser->password=$list['password'];
			$newuser->mobile=$list['mobile'];
			$newuser->email=$list['email'];
			$newuser->type=$list['type'];
		}
	}
	
	}	
	
	
 ?>
 
 <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script>
$(document).ready(function(){
    $('#demoSelect').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">--Select Block first--</option>'); 
                }
            }); 
        }else{
$('#state').html('<option value="">--Select District  first--</option>');
$('#city').html('<option value="">--Select Block First--</option>'); 
        }
    });
});
</script>
 
 
 
 
 
 
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-users"> </i> Create User</h1>
        </div>
      </div>
     <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <form action="include/save.php" method="post" class="form-horizontal" enctype="multipart/form-data" role="form">
          <!-- Form Name -->
    <input type="hidden" name="id" value="<?php echo !empty($newuser->id) ? $newuser->id : '';?>">
     <input type="hidden" name="user_id"  value="<?=$user_id;?>">
   <div class="form-group">
		<label class="col-sm-4 control-label">User Type</label>
             <div class="col-sm-8">
             	<select name="type" class="form-control">
             		<option>--Select Type--</option>
             		<?php if($user_type==1){?>
					<option value="1">Admin</option>
					<option value="3">Agent</option>
             		<option value="4">Member</option>
					<?php } ?>
					<?php  if($user_type==2){?>
					<option value="3">Agent</option>
             		<option value="4">Member</option>
					<?php } if($user_type==3){ ?>				
             		<option value="4">Member</option>
             		<?php } ?>
             	</select>
             </div>         
    </div>         
         
<div class="form-group">
<label class="col-sm-4 control-label" for="textinput">User Name</label>
     <div class="col-sm-8">
            <select class="form-control" name="username" id="demoSelect" multiple="">
                <optgroup label="Select User">
                <?php 
                 $sql="select * from tbl_member ORDER BY id DESC";
                 $result=$conn->query($sql);
                 if($result){
				 	while($list=$result->fetch_assoc()){
					 	$id=$list['id'];
	     			 	$pname=$list['cu_name']?>
			<option value="<?=$id;?>"><?=$pname. ' - '. $id;?></option>
					 <?php }}?>
                </optgroup>
              </select>
            </div>
     </div>
            
            
    
        
          	 <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput">Password</label>
             <div class="col-sm-8">
              <input type="password" required="" name="password" placeholder="Password" value="<?php echo !empty($newuser->password) ? $newuser->password : '';?>" class="form-control">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput">Email</label>
             <div class="col-sm-8">
              <input type="email"  name="email" id="email" placeholder="Email" value="<?php echo !empty($newuser->email) ? $newuser->email : '';?>" class="form-control">
            </div>
          </div>
         
          	 <div class="form-group">
            <label class="col-sm-4 control-label" for="textinput">Mobile Number</label>
             <div class="col-sm-8">
              <input type="text" required="" name="number" value="<?php echo !empty($newuser->mobile) ? $newuser->mobile : '';?>"  placeholder="Mobile" class="form-control">
            </div>
          </div>
         
          <!-- Text input-->
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
              <div class="pull-left">
			  <button type="submit" name="userx" name="add_user" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
          <br/><br/>
      </form> 
            </div>
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
                      <th>SR.</th>
                      <td>Name</td>
                      <td>Password</td>
                      <td>Mobile</td>
                      <td>Email</td>                     
                      <th>Type</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
       <?php 
       $sr=1;
       if($user_type==1){
	   	$sql="select a.*,b.cu_name from tbl_user as a inner join tbl_member as b on a.nid=b.id ORDER BY id DESC";
	   }elseif($user_type==2){
	   	$sql="select a.*,b.cu_name from tbl_user as a inner join tbl_member as b on a.name=b.id where type !=1 and user_id=$user_id ORDER BY id DESC";
	   }
       
       $result=$conn->query($sql);
       if($result){while($list=$result->fetch_assoc()){
       	$status=$list['status'];
       	if($status==1){$statusx="Active";}else{$statusx="Inactive";}
       	$type=$list['type'];
if($type==1){$typex="Admin";}elseif($type==2){$typex="Branch";}elseif($type==3){$typex="Agent";}else{$typex="Member";}
       	?>
                    <tr>
                      <td><?=$sr++;?></td>
                      <td><?=$list['cu_name'];?></td>
                      <td><?=$list['password'];?></td>
                      <td><?=$list['mobile'];?></td>
                      <td><?=$list['email'];?></td>
                      <td><?=$typex;?></td>
                      <td><?=$statusx;?></td>
<td><a href="?id=<?=$list['id'];?>" class="btn btn-success">Edit</a></td>                      
                    </tr>
                    <?php }}?> 
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

    <script type="text/javascript"> 
      $('#demoSelect').select2();
    </script>