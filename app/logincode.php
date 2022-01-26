<?php
 ini_set('display_errors', 1); 
 ini_set('display_startup_errors', 1); 
 error_reporting(E_ALL);
 
include "admin/include/conn.php";
include"admin/include/cls_usertype.php";
session_start();

if (isset($_POST['login-submit'])) {
	
	if (empty($_POST['Email']) ) {
		echo "<script>alert('Plese Enter Your Name ');
		document.location='index.html'</script>";

	}
	elseif(empty($_POST['uPassword'])) {
		echo "<script>alert('Plese Enter Your Password');
			document.location='index.html'</script>";

	}

	else{
		$user=$_POST['Email'];
		$psw=$_POST['uPassword'];
		$sql="select * FROM tbl_user WHERE Email=? AND uPassword=? ";
		$stmt= $conn->prepare($sql);
		$stmt->bind_param("ss", $user, $psw);
		$stmt->execute();
		$result = $stmt->get_result();
	//$row = $result->fetch_row();
	
	//$query = mysqli_query($conn, $sql)
	//or die("faild to query database".mysql_error());
		$row = mysqli_fetch_assoc($result);

		
			if($row['Email']==$user && $row['uPassword']==$psw)
			{
				//if($row['utype']==0)
				//{
					$userd=new user();
					$userd->ID=$row['ID'];
					$userd->FirstName=$row['FirstName'];
					$userd->Email=$row['Email'];
					$userd->Mobile=$row['Mobile'];
					$userd->uPassword=$row['uPassword'];
					$userd->utype=$row['utype'];
					$userd->cdate=$row['cdate'];
					$_SESSION['userd']=serialize($userd);
					header("location:admin/dashboard.php");
				//}
			}

		else{
			//echo "your password are wrong";
			echo "<script>alert('Your User name and Password is Wrong');
				document.location='index.html'</script>";
			}


}
	}


	


?>