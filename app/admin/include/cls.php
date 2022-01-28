<?php

	/** CLS CATEGORY	**/

class cls_category{
	public $id;
	public $category_name;
	public $category_icon;
	public $date;
	
	



	public function save_category(cls_category $c){
		 
		include "conn.php";
		$date=date("Y/m/d");
		$sql ="INSERT INTO `tbl_category`(`category_name`, `category_icon`, `date`) VALUES ('$c->category_name','$c->category_icon',$date)";		
		//echo $conn;die;
		 if($conn->query($sql)==true)
		// $stmt= $conn->prepare($sql);
		// $stmt->bind_param("sss", $c->category_name,$c->category_icon,$date);
		// $stmt->execute();

		header("location:../category.php?msg=$c->category_name Successfully Saved");
		else
		echo "Error:" . $sql ."<br>".$conn->error;
		
	}
	
	public function update_category(cls_category $c)
	{
		include "conn.php";
		$date=date("Y/m/d");
	$sql = "UPDATE `tbl_category` SET `category_name`=?,`category_icon`=?,`date`=? WHERE id=?";
	$stmt= $conn->prepare($sql);
	$stmt->bind_param("sssi",$c->category_name,$c->category_icon, $date,$c->id);
	$stmt->execute();
	header("location:../admin/category.php?msg=$c->category_name Successfully Update");
	}
	
}
	/** // CLS CATEGORY **/


	class cls_state{

		public $StCode;
		public $StateName;


		public function save(cls_state $c){
			include "conn.php";
			$date=date("Y/m/d");
			  $sql ="INSERT INTO `state`(`StateName`, `date`) VALUES ('$c->StateName','$date')";				
			 if($conn->query($sql)==true)	
			header("location:../addstate.php?msg=$c->StateName Successfully Saved");
			else
			echo "Error:" . $sql ."<br>".$conn->error;
		}


		public function update(cls_state $c){

			include "conn.php";
			$date=date("Y/m/d");
			  $sql ="Update  `state` Set `StateName`='$c->StateName' where StCode=$c->StCode";				
			 if($conn->query($sql)==true)	
			header("location:../addstate.php?msg=$c->StateName Successfully Update");
			else
			echo "Error:" . $sql ."<br>".$conn->error;

		}






	}




	class cls_dis{
		public $DistCode;
		public $StCode;
		public $DistrictName;


		public function save(cls_dis $c){
			include "conn.php";
			$date=date("Y/m/d");
			  $sql ="INSERT INTO `district`(`StCode`, `DistrictName`) VALUES ('$c->StCode','$c->DistrictName')";				
			 if($conn->query($sql)==true)	
			header("location:../adddist.php?msg=$c->DistrictName Successfully Saved");
			else
			echo "Error:" . $sql ."<br>".$conn->error;
		}


		public function update(cls_dis $c){

			include "conn.php";
			$date=date("Y/m/d");
			  $sql ="Update  `district` Set `StCode`='$c->StCode',`DistrictName`='$c->DistrictName' where DistCode=$c->DistCode";				
			 if($conn->query($sql)==true)	
			header("location:../adddist.php?msg=$c->DistrictName Successfully Update");
			else
			echo "Error:" . $sql ."<br>".$conn->error;

		} 


	}












?>