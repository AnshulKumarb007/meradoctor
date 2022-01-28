<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	function upload_Doc_Photo(){
		$docphoto="";
			$imgFile = $_FILES['photo']['name'];
			$tmp_dir = $_FILES['photo']['tmp_name'];
			$imgSize = $_FILES['photo']['size'];
			if(!empty($imgFile)){
				$upload_dir = 'images/Doctor/'; // upload directory
 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
   // valid image extensions
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
   // rename uploading image
   $userpic = rand(1000,1000000).".".$imgExt;
   // allow valid image file formats
   if(in_array($imgExt, $valid_extensions)){   
    // Check file size '5MB'
	    if($imgSize < 1000000)    {
	     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
	     $docphoto=$upload_dir.$userpic;
	    }
	    else{
	     $errMSG = "Sorry, your file is too large.";
	    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   }
			}
		return $docphoto;
	}
	
	if (isset($_REQUEST['doctor'])) {
		include '../include/cls_doctor.php';
		$doc = new cls_doctor();

		//pessonal
		$doc->id=$_POST['id'];
		$doc->doctorname=$_POST['doctorname'];
		$doc->gender=$_POST['gender'];
	
	 	$doc->photo=upload_Doc_Photo();

		//professional
		if (isset($_REQUEST['dcategory'])) {
			$doc->dcategory=$_POST['dcategory'];
		}
		//$doc->dposition=$_POST['dposition'];
		$doc->exprince=$_POST['exprince'];
		$doc->ddetails=$_POST['ddetails'];
		$doc->fee=$_POST['fee'];
		$doc->timeing=$_POST['timeing'];

		//Addresss
		$doc->email=$_POST['email'];
		$doc->mobile=$_POST['mobile'];
		$doc->staffmobile=$_POST['smobile'];
		$doc->state=$_POST['state'];
		$doc->district=$_POST['dis'];
		$doc->address=$_POST['address'];

		//official
		$doc->booking=$_POST['booking']==""?0:1;
		$doc->premiummember=$_POST['premiummember']==""?0:1;
		
			try{
			
		if($doc->id==0)
			if(empty($doc->dcategory)){
	$sql = "INSERT INTO `tbl_doctor`(`doctorname`,`gender`,photo,`exprince`,`ddetails`,`fee`,`timeing`,`email`,`mobile`,`staffmobile`,`state`,`district`,`address`,`booking`,`premiummember`) VALUES (	'$doc->doctorname',$doc->gender,'$doc->photo','$doc->exprince','$doc->ddetails','$doc->fee','$doc->timeing','$doc->email','$doc->mobile','$doc->staffmobile','$doc->state','$doc->district','$doc->address','$doc->booking','$doc->premiummember')";
	}
	else{
		$sql = "INSERT INTO `tbl_doctor`(`doctorname`,`gender`,photo,dcategory,`exprince`,`ddetails`,`fee`,`timeing`,`email`,`mobile`,`staffmobile`,`state`,`district`,`address`,`booking`,`premiummember`) VALUES ('$doc->doctorname',$doc->gender,'$doc->photo',$doc->dcategory,'$doc->exprince','$doc->ddetails','$doc->fee','$doc->timeing','$doc->email','$doc->mobile','$doc->staffmobile','$doc->state','$doc->district','$doc->address','$doc->booking','$doc->premiummember')";
}
	else
	if(empty($doc->dcategory)){
		//for sp. Doctor
			$sql = "";
	}
	else{
		//for sp. Doctor
		$sql = "";
	}
	include "../include/conn.php";

	if($conn->query($sql))
	{
		header("location:doctor.php");	
	}	
	else
	{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
	}
	catch(Exception $e){
		 echo 'Message: ' .$e->getMessage();
	}
		
	}
}
?>