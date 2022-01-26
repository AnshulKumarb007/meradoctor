<?php 

class cls_join {

    public $name;
    public $gname;
    public $dob;
    public $mobile;
    public $othermobile;
    public $age;
    public $email;
    public $qualification;
    public $exprience;
    public $address;
 



    public function add(cls_join $c){
        include"conn.php";
        $nameun=time().uniqid(rand());
		$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$image= addslashes($nameun.".".$ext); 		 
		move_uploaded_file($_FILES["image"]["tmp_name"],"../join/".$image);
         $sql="INSERT INTO `tbl_join`(`name`, `gname`, `dob`, `mobile`, `othermobile`, `age`, `email`, `qualification`, `exprience`, `address`,`photo`,cdate) VALUES ('$c->name','$c->gname','$c->dob','$c->mobile','$c->othermobile','$c->age','$c->email','$c->qualification','$c->exprience','$c->address','$image',NOW())";
       
        if($conn->query($sql)==TRUE){	
        header("location:../joinus.php?msg=Successfully Added");
        }else{echo "Error:" . $sql ."<br>".$conn->error;}


    }



}








?>