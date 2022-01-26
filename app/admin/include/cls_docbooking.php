<?php 
class cls_booking{

    public $id; 
    public $name;
    public $gname;
    public $mobile;
    public $age;
    public $dob;
    public $btime;
    public $details;
    public $address;
    public $doctorid;
    public $status;
    public $othermobile; 



    public function gen_bookingid(){

      include "conn.php";

      $y= date("Y"); 

      $sql="SELECT IFNULL(max(id),0)+1 as bookingid FROM tbl_docbook"; 

      $list=mysqli_fetch_assoc($conn->query($sql));

      $id=$list['bookingid']; 						

       $bookingid=$y.str_pad($id, 5, "0", STR_PAD_LEFT);

      return $bookingid;

}



   public function return_docname($docid){

      	include "conn.php";
		//include "cls_doctor.php";
		$doc=new cls_doctor();
		$sql="SELECT `id`, `dname`, `gender`, `dcategory`, `dposition`, `exp`, `ddetails`, `email`, `mobile`, `staffmobile`, `address`, `status`, `Image`, `fee`, `timeing`, d.DistrictName,s.StateName FROM  tbl_doctor doc 
LEFT join  district d on doc.dis= d.DistCode
LEFT join state s on doc.state=s.StCode where doc.id=$docid"; 
		$result=$conn->query($sql);
		while($list=$result->fetch_assoc()){ 
			$doc->id=$list["id"];
			$doc->dname=$list["dname"];
			$doc->gender=$list["gender"];
			$doc->dcategory=$list["dcategory"];
			$doc->dposition=$list["dposition"];
			$doc->exp=$list["exp"];
			$doc->ddetails=$list["ddetails"];
			$doc->email=$list["email"];
			$doc->mobile=$list["mobile"];
			$doc->staffmobile=$list["staffmobile"];
			$doc->address=$list["address"];
			$doc->fee=$list["fee"];
			$doc->timeing=$list["timeing"];
			$doc->state=$list["StateName"];
			$doc->dis=$list["DistrictName"]; 
		}
      return $doc;

}





	public function book_doc(cls_booking $b){

      $bookingid=$this->gen_bookingid();

		include"conn.php";
		//include "cls_doctor.php";
		
          $sql="INSERT INTO `tbl_docbook`(`name`, `gname`, `mobile`, `age`, `dob`, `details`, `address`, `doctorid`,`bookingid`,`othermobile`,status) VALUES 

        ('$b->name','$b->gname','$b->mobile','$b->age','$b->dob','$b->details','$b->address','$b->doctorid','$bookingid','$b->othermobile',0)";

  

        if($conn->query($sql)==TRUE){

          //header("location:../../../doc-booking.php?msg=Successfully Booked");
        $doctorid=$b->doctorid;  
		
		$doc=new cls_doctor();
        $doc=$this->return_docname($doctorid);
        
        	
          $category_mail=1;//for understaning doctor name or pathlogy name and more...
			
         

          //$dname=$this->
       
          include "send-mail.php";

          send_mail($category_mail,$b,$doc);

              

		}else{echo "Error:" . $sql . "<br>" . $conn->error;}





    }



    public function update_doc(cls_booking $b){

        include"conn.php";

        $sql="UPDATE `tbl_docbook` SET `name`='$b->name',`gname`='$b->gname',`mobile`='$b->mobile',`age`='$b->age',`dob`='$b->dob',`details`='$b->details',`address`='$b->address',`doctorid`='$b->doctorid',`othermobile`='$b->othermobile' WHERE id=$b->id";

        if($conn->query($sql)==TRUE){	

			header("location:../../../doc-booking.php?msg=Successfully Update");

		}else{echo "Error:" . $sql . "<br>" . $conn->error;}



    }





}
?>