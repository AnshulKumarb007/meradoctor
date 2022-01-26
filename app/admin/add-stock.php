<?php include "header.php";
include "include/cls_stock.php";
$p =  new cls_stock();
if(isset($_GET['id'])){
$id=$_GET['id'];
$sql="select * from tbl_stocks where id=$id";
 
 $row=mysqli_fetch_assoc($conn->query($sql));
 $p->weight=$row['weight'];
 $p->pid=$row['pid'];
 $p->date=$row['cdate'];
 $p->id=$row['id'];
}







?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Stock</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Dashboard</li>
          
        </ul>
      </div>
      
      <form action="include/save.php" method="POST"  class="p-2">
      <input type="hidden" name="id" value="<?php echo !empty($p->id)?$p->id:'';?>"/>
        <div class="col-md-8">
          <div class="tile">
             
            <div class="tile-body">
              
             

            <div class="form-group">
              <label >Product Name</label>
     
              <select class="form-control" id="demoSelect"  name="pid">
                <optgroup label="Select Product">
                  <?php $sql="select * from tbl_product order by id desc";
                  $result=$conn->query($sql);
                  while($list=$result->fetch_assoc()){?> 
                  <option value="<?=$list['id']?>" <?php if($p->pid==$list['id']){echo"selected='selected'";} ?>><?=$list['pname']?></option> 
                 <?php } ?>
                </optgroup>
              </select>
            </div>


            <div class="form-group">
              <label >Weight</label>
             <input type="text" class="form-control" name="weight" value="<?php echo !empty($p->weight)?$p->weight:'';?>"   placeholder="Weight">
           </div>
 
            
           <div class="form-group">
              <label >Date</label>
             <input type="date" class="form-control" name="cdate" value="<?php echo !empty($p->date)?$p->date:'';?>">
           </div>
           
                
           <div class="form-group">
      <br/>
        <input type="submit" class="btn btn-warning" name="save_stocks" value="Save"/>
  </div>
</form>

            </div>
          </div>
        </div>
         
        
      </div>
    </main>


    <?php include "footer.php";?>