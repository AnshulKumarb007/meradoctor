<?php 

class cls_pbooking{

    public $id; 
    public $name;
    public $gname;
    public $mobile;
    public $age;
    public $dob;
    public $details;
    public $address;
    public $pathlogyid;
    public $status;
    public $othermobile; 
    
    public function gen_bookingid(){
      include "conn.php";
      $y= date("Y"); 
      $sql="SELECT IFNULL(max(id),0)+1 as bookingid FROM tbl_pathbook"; 
      $list=mysqli_fetch_assoc($conn->query($sql));
      $id=$list['bookingid']; 						
       $bookingid=$y.str_pad($id, 5, "0", STR_PAD_LEFT);
      return $bookingid;
}

 public function return_path($path){
      include "conn.php";
       
      $sql="SELECT pname FROM tbl_doctor where id=$path"; 
      $list=mysqli_fetch_assoc($conn->query($sql));
      $pname=$list['pname']; 	 
      return $pname;
}


    public function book_doc(cls_pbooking $b){
      $bookingid=$this->gen_bookingid();
        include"conn.php";
        $sql="INSERT INTO `tbl_pathbook`(`name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `pathlogyid`,`bookingid`,`othermobile`) VALUES 
        ('$b->name','$b->gname','$b->mobile','$b->age','$b->dob','$b->details','$b->address','$b->pathlogyid',$bookingid,$b->othermobile)";

        if($conn->query($sql)==TRUE){	
			header("location:../../../pathlogy-book.php?msg=Successfully Booked");
			
		  $category_mail=2;//for understaning doctor name or pathlogy name and more...
          $path=$b->pathlogyid;
          $dname=$this->return_path($path);//dname means pathlogy name  
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

    public function update_doc(cls_pbooking $b){
        include"conn.php";
        $sql="UPDATE `tbl_pathbook` SET `name`='$b->name',`gname`='$b->gname',`mobile`='$b->mobile',`age`='$b->age',`dob`='$b->dob',`details`='$b->details',`address`='$b->address',`pathlogyid`='$b->pathlogyid',`othermobile`='$b->othermobile' WHERE id=$b->id";
        if($conn->query($sql)==TRUE){	
			header("location:../../../pathlogy-book.php?msg=Successfully Update");
		}else{echo "Error:" . $sql . "<br>" . $conn->error;}

    }


}







class cls_hbooking{

  public $id; 
  public $name;
  public $gname;
  public $mobile;
  public $age;
  public $dob;
  public $details;
  public $address;
  public $healthid;
  public $status;
  public $othermobile; 

  public function gen_bookingid(){
    include "conn.php";
    $y= date("Y"); 
    $sql="SELECT IFNULL(max(id),0)+1 as bookingid FROM tbl_helthbook"; 
    $list=mysqli_fetch_assoc($conn->query($sql));
    $id=$list['bookingid']; 						
     $bookingid=$y.str_pad($id, 5, "0", STR_PAD_LEFT);
    return $bookingid;
}


 public function return_hbooking($hid){
      include "conn.php";
       
      $sql="SELECT name FROM tbl_helthbook where id=$hid"; 
      $list=mysqli_fetch_assoc($conn->query($sql));
      $hname=$list['name']; 	 
      return $hname;
}




  public function book_doc(cls_hbooking $b){
    $bookingid=$this->gen_bookingid();
      include"conn.php";
      $sql="INSERT INTO `tbl_helthbook`(`name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `healthid`,`bookingid`,`othermobile`) VALUES 
      ('$b->name','$b->gname','$b->mobile','$b->age','$b->dob','$b->details','$b->address','$b->healthid',$bookingid,$b->othermobile)";

      if($conn->query($sql)==TRUE){	
    header("location:../../../health-book.php?msg=Successfully Booked");
    
          $category_mail=3;//for understaning doctor name or h health  and more...
          $hid=$b->healthid;
          $dname=$this->return_hbooking($hid);
          
          
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

  public function update_doc(cls_hbooking $b){
      include"conn.php";
      $sql="UPDATE `tbl_helthbook` SET `name`='$b->name',`gname`='$b->gname',`mobile`='$b->mobile',`age`='$b->age',`dob`='$b->dob',`details`='$b->details',`address`='$b->address',`healthid`='$b->healthid',`othermobile`='$b->othermobile' WHERE id=$b->id";
      if($conn->query($sql)==TRUE){	
    header("location:../../../health-book.php?msg=Successfully Update");
  }else{echo "Error:" . $sql . "<br>" . $conn->error;}

  }


}







?>