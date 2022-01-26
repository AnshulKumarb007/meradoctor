<?php



	class cls_doctor{



	public $id;

	 public $dname;

	 public $gender;

	 public $dcategory;

	 public $dposition;

	 public $exp;

	 public $ddetails;

	 public $email;

	 public $mobile;
	
	public $staffmobile;

	 public $address;

	 public $fee;

     public $timeing;

     public $state;

     public $dis;





		// --Login Type-- 

		

		// Type       value

		// 1			Admin

		// 2			doctor

		// 3			pathlogy

		// 4			Diognostic

		// 5			health check up



		// --Login Type--

		

	 public function  addoctor(cls_doctor $s){

		   // include "clsusertype.php";

			include "conn.php"; 

			$nameun=time().uniqid(rand());

			$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

			$image= addslashes($nameun.".".$ext); 		 

			move_uploaded_file($_FILES["image"]["tmp_name"],"../image-doctor/".$image); 



		   $sql="INSERT INTO `tbl_doctor`(`dname`, `gender`, `dcategory`, `dposition`, `exp`, `ddetails`, `email`, `mobile`,`staffmobile`, `address`,`fee`,`image`,`timeing`,`state`,`dis`) VALUES ('$s->dname','$s->gender','$s->dcategory','$s->dposition','$s->exp','$s->ddetails','$s->email','$s->mobile','$s->staffmobile','$s->address',$s->fee,'$image','$s->timeing','$s->state','$s->dis')"; 

			if($conn->query($sql)==TRUE){	

				$user = new clsusertype();
				$user->name=$_POST['dname'];
				$user->password='D@12345';		
				$user->mobile=$_POST['mobile'];	
				$user->email=$_POST['email'];	
				$user->type=2;	
				$user->status=1;	
				$user->create_type="Admin";
				$user->login_user_id=$conn->insert_id;
				$user->Add_user($user);


				header("location:../add-doctor.php?msg=Successfully Added");

			}else{echo "Error:" . $sql ."<br>".$conn->error;}

	}	



	public function  update_doctor(cls_doctor $S){

		include "conn.php"; 

		$id=$S->id;

         

		if($_FILES['image']['name']==''){ 
		$sql1="select * from tbl_doctor where id=$id"; 
		$row=mysqli_fetch_assoc($conn->query($sql1)); 
		$image=$row['Image'];

         
		    $sql="UPDATE `tbl_doctor` SET `dname`='$S->dname',`gender`='$S->gender',`dcategory`='$S->dcategory',`dposition`='$S->dposition',`exp`='$S->exp',`ddetails`='$S->ddetails',`email`='$S->email',`mobile`='$S->mobile',staffmobile='$S->staffmobile',`address`='$S->address',`fee`=$S->fee, `image`='$image' ,`timeing`='$S->timeing',`state`='$S->state',`dis`='$S->dis' WHERE id=$id";

	        

		}else{

			$nameun=time().uniqid(rand());
			$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);

			$image= addslashes($nameun.".".$ext); 		 
			move_uploaded_file($_FILES["image"]["tmp_name"],"../image-doctor/".$image);

            
		   $sql="UPDATE `tbl_doctor` SET `dname`='$S->dname',`gender`='$S->gender',`dcategory`='$S->dcategory',`dposition`='$S->dposition',`exp`='$S->exp',`ddetails`='$S->ddetails',`email`='$S->email',`mobile`='$S->mobile',staffmobile='$S->staffmobile',`address`='$S->address',`fee`=$S->fee,`image`='$image',`timeing`='$S->timeing',`state`='$S->state',`dis`='$S->dis' WHERE id=$id";
        
		}   

	 

		if($conn->query($sql)==TRUE){	

			header("location:../add-doctor.php?msg=Successfully Update");

		}else{echo "Error:" . $sql . "<br>" . $conn->error;}
	

	}

	}



?>