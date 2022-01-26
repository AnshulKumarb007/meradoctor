<?php 

class cls_pathlogy{
    public  $id; 
    public  $dposition;
    public  $pname;
    public  $cperson;
    public  $tdetails;
    public  $establish;
    public  $mobile;
    public  $address;
    public  $category; 
    public  $state; 
    public  $district; 
    public  $timeing; 

    

    public function pathlogysave(cls_pathlogy $b){
      
        $nameun=time().uniqid(rand());
		$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$image= addslashes($nameun.".".$ext); 		 
		move_uploaded_file($_FILES["image"]["tmp_name"],"../pathlogy-image/".$image);
        
        include "conn.php";
         $sql="INSERT INTO `tbl_pathlogy`(`dposition`, `pname`, `cperson`, `tdetails`, `establish`, `mobile`, `address`,`image`,`category`,`state`,`district`,`timeing`) VALUES ('$b->dposition','$b->pname','$b->cperson','$b->tdetails','$b->establish','$b->mobile','$b->address','$image','$b->category','$b->state','$b->district','$b->timeing')";
       
        if($conn->query($sql)==TRUE){	
            
                $user = new clsusertype();
				$user->name=$_POST['pname'];
				$user->password='P@12345';		
				$user->mobile=$_POST['mobile'];	
				$user->email="NA";	
				$user->type=3;	
				$user->status=1;	
				$user->create_type="Admin";
                $user->login_user_id=$conn->insert_id;
				$user->Add_user($user);



            header("location:../add-pathology.php?msg=Add Successfully");
        }else{echo "Error:" . $sql . "<br>" . $conn->error;}

    }

    public function update_pathlogy(cls_pathlogy $b){ 
       include "conn.php";
        
       $id=$b->id;

       if($_FILES['image']['name']==''){
       $sql1="select * from tbl_pathlogy where id=$id";
       $row=mysqli_fetch_assoc($conn->query($sql1));
       $image=$row['image'];
       $sql="UPDATE `tbl_pathlogy` SET `dposition`='$b->dposition',`pname`='$b->pname',`cperson`='$b->cperson',`tdetails`='$b->tdetails',`establish`='$b->establish',`mobile`='$b->mobile',`address`='$b->address',`image`='$image',`category`='$b->category',`state`='$b->state',`district`='$b->district',`timeing`='$b->timeing' WHERE id=$b->id";
       }else{
           $nameun=time().uniqid(rand());
           $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
           $image= addslashes($nameun.".".$ext); 		 
           move_uploaded_file($_FILES["image"]["tmp_name"],"../pathlogy-image/".$image);

           $sql="UPDATE `tbl_pathlogy` SET `dposition`='$b->dposition',`pname`='$b->pname',`cperson`='$b->cperson',`tdetails`='$b->tdetails',`establish`='$b->establish',`mobile`='$b->mobile',`address`='$b->address',`image`='$image',`category`='$b->category',`state`='$b->state',`district`='$b->district',`timeing`='$b->timeing' WHERE id=$b->id";
       } 



       if($conn->query($sql)==TRUE){	
           header("location:../add-pathology.php?msg=Update Successfully");
       }else{echo "Error:" . $sql . "<br>" . $conn->error;}

   }


}






class cls_healthcheck{

    public  $id; 
    public  $dposition;
    public  $pname;
    public  $cperson;
    public  $tdetails;
    public  $establish;
    public  $mobile;
    public  $address;
    public  $category; 
    public  $state; 
    public  $district; 
    public  $timeing; 

    

    public function healthcheckup(cls_healthcheck $b){
      
        $nameun=time().uniqid(rand());
		$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$image= addslashes($nameun.".".$ext); 		 
		move_uploaded_file($_FILES["image"]["tmp_name"],"../health/".$image);
        
        include "conn.php";
         $sql="INSERT INTO `tbl_healthcheckup`(`dposition`, `pname`, `cperson`, `tdetails`, `establish`, `mobile`, `address`,`image`,`category`,`state`,`district`,`timeing`) VALUES ('$b->dposition','$b->pname','$b->cperson','$b->tdetails','$b->establish','$b->mobile','$b->address','$image','$b->category','$b->state','$b->district','$b->timeing')";
       
        if($conn->query($sql)==TRUE){	


                $user = new clsusertype();
				$user->name=$_POST['pname'];
				$user->password='H@12345';		
				$user->mobile=$_POST['mobile'];	
				$user->email="NA";	
				$user->type=5;	
				$user->status=1;	
				$user->create_type="Admin";
                $user->login_user_id=$conn->insert_id;
				$user->Add_user($user);



            header("location:../add-pathology.php?msg=Add Successfully");
        }else{echo "Error:" . $sql . "<br>" . $conn->error;}

    }




    public function update_healthcheckup(cls_healthcheck $b){ 
       include "conn.php";
        
       $id=$b->id;

       if($_FILES['image']['name']==''){
       $sql1="select * from tbl_healthcheckup where id=$id";
       $row=mysqli_fetch_assoc($conn->query($sql1));
       $image=$row['image'];
       $sql="UPDATE `tbl_healthcheckup` SET `dposition`='$b->dposition',`pname`='$b->pname',`cperson`='$b->cperson',`tdetails`='$b->tdetails',`establish`='$b->establish',`mobile`='$b->mobile',`address`='$b->address',`image`='$image',`category`='$b->category',`state`='$b->state',`district`='$b->district',`timeing`='$b->timeing' WHERE id=$b->id";
       }else{
           $nameun=time().uniqid(rand());
           $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
           $image= addslashes($nameun.".".$ext); 		 
           move_uploaded_file($_FILES["image"]["tmp_name"],"../health/".$image);

           $sql="UPDATE `tbl_healthcheckup` SET `dposition`='$b->dposition',`pname`='$b->pname',`cperson`='$b->cperson',`tdetails`='$b->tdetails',`establish`='$b->establish',`mobile`='$b->mobile',`address`='$b->address',`image`='$image',`category`='$b->category',`state`='$b->state',`district`='$b->district',`timeing`='$b->timeing' WHERE id=$b->id";
       } 



       if($conn->query($sql)==TRUE){	
           header("location:../add-pathology.php?msg=Update Successfully");
       }else{echo "Error:" . $sql . "<br>" . $conn->error;}

   }


}

?>