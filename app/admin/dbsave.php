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
    //echo" Check file size '5MB'"; die;
	    if($imgSize < 100000000)    {
			
	     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
	     $docphoto=$userpic;
	    }
	    else{
	     $errMSG = "Sorry, your file is too large.";
		 echo $errMSG;
	    }
   }
   else{
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
	echo $errMSG;
   }
			}
		return $docphoto;
	}
	
	if (isset($_REQUEST['doctor'])) {
		include 'include/cls_doctor.php';
		$doc = new cls_doctor();

		//pessonal
		$doc->id=$_POST['id'];
		$doc->doctorname=$_POST['doctorname'];
		$doc->gender=$_POST['gender'];
	
	 	$doc->photo=upload_Doc_Photo()??'NA';

		//professional
		if (isset($_REQUEST['dcategory'])) {
			$doc->dcategory=$_POST['dcategory'];
		}else{
			$doc->dcategory="NA";
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
		$doc->iconid=$_POST['iconid']??'0';
		//official
		$doc->booking=$_POST['booking']??0;
		$doc->premiummember=$_POST['premiummember']??0;
		
			try{
			
	//if($doc->id==0)
			if(empty($doc->dcategory)){
				//echo "dd";die;
 

echo	$sql = "INSERT INTO `tbl_doctor`(`dname`,`gender`,`Image`,dcategory,`exp`,`ddetails`,`fee`,`timeing`,`email`,`mobile`,`staffmobile`,`state`,`dis`,`address`,`booking`,`premiummember`,`iconid`) VALUES (	'$doc->doctorname',$doc->gender,'$doc->photo',$doc->dcategory,'$doc->exp','$doc->ddetails','$doc->fee','$doc->timeing','$doc->email','$doc->mobile','$doc->staffmobile','$doc->state','$doc->district','$doc->address','$doc->booking','$doc->premiummember','$doc->iconid')";
	}
		else{
			//echo "dd2";die;
		$sql = "INSERT INTO `tbl_doctor`(`dname`,`gender`,`Image`,dcategory,`exp`,`ddetails`,`fee`,`timeing`,`email`,`mobile`,`staffmobile`,`state`,`dis`,`address`,`booking`,`premiummember`,`iconid`) VALUES ('$doc->doctorname',$doc->gender,'$doc->photo','$doc->dcategory','$doc->exp','$doc->ddetails','$doc->fee','$doc->timeing','$doc->email','$doc->mobile','$doc->staffmobile','$doc->state','$doc->district','$doc->address','$doc->booking','$doc->premiummember',$doc->iconid)";
		}
	include "include/conn.php";
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