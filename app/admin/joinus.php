<?php include "header.php";?> 
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user"></i> Join Us</h1>
    </div>
  </div>

<div class="row">
     <div class="col-md-6">
          <div class="tile">
            <div class="tile-body">
			
		                 <div class="services-bottom"> 
						   <form action="include/save.php" method="post" enctype="multipart/form-data">
							 
							<input type="hidden" name="id" value="">    
							  <div class="admission-form">
								<div class="form-group">
									<input type="text" class="form-control"  name="name" placeholder="Full Name*" required="">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="gname" placeholder="Guardian Name*" required="">
								</div>

                                <div class="mt-3">
								<div class="form-group">
									<input type="date" class="form-control" name="dob" placeholder="Date" required="">
								</div>
							    </div>

								<div class="form-group">
									<input type="text" class="form-control" name="mobile" placeholder="Phone Number*" required="">
								</div>

								<div class="form-group">
									<input type="text" class="form-control" name="othermobile" placeholder="Other Number*" required="">
								</div>
								
								<div class="form-group">
									<input type="number" class="form-control" name="age" placeholder="Age*" required="">
								</div> 
							    </div>
							
                                <div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email*" required="">
								</div> 
							    </div>

                                <div class="form-group">
									<input type="text" class="form-control" name="exprience" placeholder="Exprience	*" required="">
								</div> 
							    </div>
							
							<div class="form-group">
								<textarea  class="form-control" name="qualification" placeholder="Qualification*" required=""></textarea>
							</div>
                            
							<div class="form-group">
								<textarea  class="form-control" name="address" placeholder="Address*" required=""></textarea>
							</div> 

                            <?php if(isset($_GET['ediit'])){?>
                <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" id="imgInp" name="image"><br/>
                       <img id="blah"  src="medical/<?=$list['image'];?>"  width="100%" height="200px"/> 
                  </div>
                  
                </div>
                  <?php }else{ ?> 
                    <div class="form-group row">
                  <label class="control-label col-md-3">Image</label>
                  <div class="col-md-8">
                       <input class="form-control" type="file" id="imgInp" name="image"><br/>
                       <img id="blah" src="#"  width="100%" height="200px"/> 
                  </div>
                  
                </div>

                <?php  } ?>

							<button type="submit" name="joinus" class="btn btn-primary submit">Save Now</button>
						</form>
				</div>
			</div>
			 
		</div>
	</div>
	</div>
		</div>
</div>
</main>

<!-- //w3l-content-photo-5 -->

<?php include "footer.php" ?>
<script>
          imgInp.onchange = evt => {
          const [file] = imgInp.files
          if (file) {
          blah.src = URL.createObjectURL(file)
          }
          }
     </script>