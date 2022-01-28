<?php 
include "header.php";
include "include/conn.php";
include "dBase.php";

$db =  new dbase();

$c =  new cls_category();
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="SELECT * FROM `tbl_category` WHERE id=$id";
	$list = mysqli_fetch_assoc($conn->query($sql));
	$c->id=$list['id'];
	$c->category_name=$list['category_name'];
	$c->category_icon=$list['category_icon'];
}

if($userd->utype<2){
?>
    
    <div class="app-title">
        <div>
          <h1><i class="fa fa-users text-danger" ></i> Manage Category</h1>
         
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="dashboard.php">DashBoard</a></li>
          <li class="breadcrumb-item"><a href="category.php">Category List</a></li>
        </ul>
      </div>

   <div class="row">
    <div class="col-md-12">
   
      <div class="card">
        <div class="card-header">
        	<h3 class="card-title"> Add New Category</h3>
        </div>
        <div class="card-body">
          <form class="row" action="include/save.php" enctype="multipart/form-data" method="post">
            <div class="form-group col-md-4">
              <label class="control-label">Category Name</label>
              <input name="id" type="hidden" value="<?php echo !empty($c->id) ? $c->id : ''; ?>"/>
              <input class="form-control" type="text" placeholder="Enter Category Name" name="category_name" value="<?php echo !empty($c->category_name) ? $c->category_name : ''; ?>" required>
            </div>
            <div class="form-group col-md-4">
              <label class="control-label">Category Icon</label>
              <input class="form-control" type="file" name="photo" required>
            </div>
            <div class="form-group col-md-4 align-self-end">
              <?php if(isset($_GET['id'])){ ?>
                  <button class="btn btn-primary" name="save_category" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i> Update Category</button> 
                   <?php }else{?>
                  <button class="btn btn-primary" name="save_category" type="submit" ><i class="fa fa-fw fa-lg fa-check-circle"></i> Add Category</button>
              <?php }?>
              
            </div>
          </form>
        </div>
      </div>
   
   <br>
   <br>
      <div class="card">
        <div class="card-header bg-primary">
          <div class="card-tools text-center">
          	<h4 class="text-white">Category List</h4>
          </div>
        </div>
      
        <div class="card-body">
         <div class="table-responsive">
            <?php
            	$db->get_category_List();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
    

<?php include "footer.php"; 
}
?>