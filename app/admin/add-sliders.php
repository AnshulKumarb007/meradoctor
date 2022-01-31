<?php 
	include "header.php"; 
   // include "include/cls_slider.php";
 
 // $a = new cls_slider();
	if($userd->utype){
        $catid='';
		if(isset($_GET['ediit'])){

		  $sql="SELECT * FROM  `tbl_slider` WHERE id=$_GET[ediit]";
			$list=mysqli_fetch_assoc($conn->query($sql));
            $id=$list['id'];
            $catid=$list['catid'];
            $file_name=$list['file_name'];
          
		}
       
?>
 
 
 
      <div class="app-title">
        <div>
          <h1><i class="fa fa-flask"> </i> Add Camp</h1>
        </div>       
      </div>
        
 
            <div class="tile-body">
            <div class="row">

<div class="col-md-7">
  <div class="tile">
    <h3 class="tile-title">Register Camp</h3>
    <hr/>
    <div class="tile-body">
      <form action="save_slider.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo !empty($id) ? $id :'';?>">
      
       
                <div class="form-group row">
                    <label class="control-label col-md-3">Category</label>
                    <div class="col-md-8">
                    <select id="inputState" name="catid" class="form-control">
                <option >--Select  Category--</option>
                <option   value="1" <?php if($catid==1)echo"selected='selected'";?>>Doctor</option>
                <option   value="2" <?php if($catid==2)echo"selected='selected'";?>>Pathology</option>
                <option   value="3" <?php if($catid==3)echo"selected='selected'";?>>Health</option>
                <option   value="4" <?php if($catid==4)echo"selected='selected'";?>>Clinic</option> 
                <option   value="5" <?php if($catid==5)echo"selected='selected'";?>>Medical </option> 
                <option   value="5" <?php if($catid==6)echo"selected='selected'";?>>Ambulance</option>  
                <option   value="5" <?php if($catid==7)echo"selected='selected'";?>>Slider1</option>   
                <option   value="5" <?php if($catid==8)echo"selected='selected'";?>>Slider2</option>                  
                </select>
                </div>
                </div>
        

                
        <?php if(isset($_GET['ediit'])){?>
                <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" name="files[]" multiple id="imgInp"><br/>
                       <img id="blah"  src="slider/<?=$list['file_name'];?>"  width="100%" height="200px"/> 
                  </div>
                  
                </div>
                  <?php }else{ ?> 
                    <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" name="files[]" multiple  id="imgInp"><br/>
                       <img id="blah" src="#"  width="100%" height="200px"/> 
                  </div>
                  
                </div>

                <?php  } ?>


            

                        <div class="tile-footer">
      <div class="row">
        <div class="col-md-8 col-md-offset-3">
          <button class="btn btn-primary" name="submit" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
        </div>
      </div>
    </div>

      </form>
    </div>
  
  </div>
</div>
<div class="clearix"></div>

</div>
        <div class="clearix"></div>
       
      </div>
  
  	  </div> 
 
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