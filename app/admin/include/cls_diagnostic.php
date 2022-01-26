<?php 

class cls_dignostic{
    public  $id; 
    public  $dposition;
    public  $dname;
    public  $cperson;
    public  $tdetails;
    public  $establish;
    public  $mobile;
    public  $address;
    public  $category; 
    public  $state; 
    public  $district; 
      

    
     
    public function dignosticsave(cls_dignostic $b){
      
        $nameun=time().uniqid(rand());
		$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$image= addslashes($nameun.".".$ext); 		 
		move_uploaded_file($_FILES["image"]["tmp_name"],"../dignostic-image/".$image);
        
        include "conn.php";
        $sql="INSERT INTO  `tbl_diagnostic`(`dposition`, `dname`, `cperson`, `tdetails`, `establish`, `mobile`, `address`,`image`,`category`,`state`,`district`) VALUES ('$b->dposition','$b->dname','$b->cperson','$b->tdetails','$b->establish','$b->mobile','$b->address','$image','$b->category','$b->state','$b->district')";
       
        if($conn->query($sql)==TRUE){	
            
            
            $user = new clsusertype();
            $user->name=$_POST['dname'];
            $user->password='Dig@A12345';		
            $user->mobile=$_POST['mobile'];	
            $user->email="NA";	
            $user->type=4;	
            $user->status=1;	
            $user->create_type="Admin";
            $user->login_user_id=$conn->insert_id;
            $user->Add_user($user);


            header("location:../add-diagnostic.php?msg=Add Successfully");
        }else{echo "Error:" . $sql . "<br>" . $conn->error;}

    }

    public function update_dignostic(cls_dignostic $b){ 
       include "conn.php";
        
       $id=$b->id;

       if($_FILES['image']['name']==''){
       $sql1="select * from tbl_diagnostic where id=$id";
       $row=mysqli_fetch_assoc($conn->query($sql1));
       $image=$row['image'];
        $sql="UPDATE `tbl_diagnostic` SET `dposition`='$b->dposition',`dname`='$b->dname',`cperson`='$b->cperson',`tdetails`='$b->tdetails',`establish`='$b->establish',`mobile`='$b->mobile',`address`='$b->address',`image`='$image',`category`='$b->category',`state`='$b->state',`district`='$b->district' WHERE  id=$b->id";
      
       }else{
           $nameun=time().uniqid(rand());
           $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
           $image= addslashes($nameun.".".$ext); 		 
           move_uploaded_file($_FILES["image"]["tmp_name"],"../dignostic-image/".$image);

            $sql="UPDATE `tbl_diagnostic` SET `dposition`='$b->dposition',`dname`='$b->dname',`cperson`='$b->cperson',`tdetails`='$b->tdetails',`establish`='$b->establish',`mobile`='$b->mobile',`address`='$b->address',`image`='$image',`category`='$b->category',`state`='$b->state',`district`='$b->district'  WHERE id=$b->id";
          
       } 



       if($conn->query($sql)==TRUE){	
           header("location:../add-diagnostic.php?msg=Update Successfully");
       }else{echo "Error:" . $sql . "<br>" . $conn->error;}

   }


}



class cls_ddbooking{

    public $id; 
    public $name;
    public $gname;
    public $mobile;
    public $age;
    public $dob;
    public $details;
    public $address;
    public $diognosticid;
    public $status;
    public $othermobile; 

    public function gen_bookingid(){
      include "conn.php";
      $y= date("Y"); 
      $sql="SELECT IFNULL(max(id),0)+1 as bookingid FROM tbl_digbook"; 
      $list=mysqli_fetch_assoc($conn->query($sql));
      $id=$list['bookingid']; 						
       $bookingid=$y.str_pad($id, 5, "0", STR_PAD_LEFT);
      return $bookingid;
}

public function return_dig($dig){
      include "conn.php";
       
      $sql="SELECT name FROM tbl_digbook where id=$dig"; 
      $list=mysqli_fetch_assoc($conn->query($sql));
      $pname=$list['name']; 	 
      return $pname;
}


    public function book_doc(cls_ddbooking $b){
      $bookingid=$this->gen_bookingid();
        include"conn.php";
        $sql="INSERT INTO `tbl_digbook`(`name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `diognosticid`,`bookingid`,`othermobile`) VALUES 
        ('$b->name','$b->gname','$b->mobile','$b->age','$b->dob','$b->details','$b->address','$b->diognosticid',$bookingid,$b->othermobile)";

        if($conn->query($sql)==TRUE){	
			header("location:../../../dignostic-book.php?msg=Successfully Booked");
			$category_mail=4;//for understaning doctor name or h health  and more...
          $dig=$b->diognosticid;
          $dname=$this->return_dig($dig);
		  $fname=$b->name;
          $gname=$b->gname;
          $mnumber=$b->mobile;
          $onumber=$b->othermobile;
          $age=$b->age;
          $date=$b->dob;
          $ill=$b->details;
          $add=$b->address;
           
          include "send-mail.php";
         send_mail($fname,$gname,$mnumber,$onumber,$age,$date,$ill,$add,$bookingid,$dname,$category_mail);
		}else{echo "Error:" . $sql . "<br>" . $conn->error;}


    }

    public function update_doc(cls_ddbooking $b){
        include"conn.php";
        $sql="UPDATE `tbl_digbook` SET `name`='$b->name',`gname`='$b->gname',`mobile`='$b->mobile',`age`='$b->age',`dob`='$b->dob',`details`='$b->details',`address`='$b->address',`diognosticid`='$b->diognosticid',`othermobile`='$b->othermobile' WHERE id=$b->id";
        if($conn->query($sql)==TRUE){	
			header("location:../../../dignostic-book.php?msg=Successfully Update");
		}else{echo "Error:" . $sql . "<br>" . $conn->error;}

    }


}




?>