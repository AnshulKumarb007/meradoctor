<?php 

class cls_eng{
    public  $id; 
    public  $name;
    public  $password;
    public  $mobile;
    public  $email;
    public  $address;
  
  

    public function eng(cls_eng $b){
        include "conn.php";
        $sql="INSERT INTO `tbl_engneers`(`name`, `password`, `mobile`, `email`, `address`,`cdate`) VALUES
         ('$b->name','$b->password','$b->mobile','$b->email','$b->address',NOW())";
        if($conn->query($sql)==TRUE){	
            header("location:../add-eng.php?msg=Successfully Added");
        }else{echo "Error:" . $sql . "<br>" . $conn->error;}

    }


    public function update_eng(cls_eng $b){
        include "conn.php";

        $sql="update  `tbl_engneers` set `name`='$b->name', `password`='$b->password', `mobile`='$b->mobile', `email`='$b->email', `address`='$b->address' where id=$b->id";

        if($conn->query($sql)==TRUE){	
            header("location:../add-eng.php?msg=Update Successfully");
        }else{echo "Error:" . $sql . "<br>" . $conn->error;}

    }


}




?>