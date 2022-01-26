<?php
class clsusertype
{
public $id;
public $userx;
public $password;
public $number;
public $email;
public $utype;
}
class user{
	public $ID;
	public $FirstName;
	public $Email;
	public $Mobile;
	public $uPassword;
	public $utype;
	public $cdate;
	
	
	public function check_userType($utype){
		$userType = "";

switch ($utype) {
	
  	case 0:
    return "Super Admin!";
    break;
  	case 1:
    return "Admin(State)!";
    break;
  	case 2:
    return "Admin(Dist./Franchise)!";
    break;
  	case 3:
    return "Doctor/Spl. Doctor!";
    break;
    case 4:
    return "Hospital!";
    break;
    case 5:
    return "PT|DI|HC|Ac!";
    break;
    case 6:
    return "Medicine Dealer";
    break;
}
	}

	
	public function Add_user(user $u)

{
	include "conn.php";
	$sql = "INSERT INTO tbl_user(`FirstName`, `Email`, `Mobile`, `uPassword`, `utype`, `cdate`) VALUES (?,?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->bind_param("ssssis", $u->FirstName, $u->Email, $u->Mobile,$u->uPassword,$u->utype,$u->cdate);
//$stmt->bind_param("i", $u->utype);
//$stmt->bind_param("s", $u->cdate);
$stmt->execute();
header("location:newuser.php");	

}
	
	public function Add_user2(user $u)
{
	$sql="INSERT INTO tbl_user(`FirstName`, `Email`, `Mobile`, `uPassword`, `utype`, `cdate`)
	VALUES('$u->FirstName','$u->Email','$u->Mobile','$u->uPassword','$u->utype','$u->cdate')";

include "conn.php";
if($conn->query($sql))
{
	header("location:newuser.php?msg=user created");	
}	

	else
	{
		echo "Error:" . $sql1 . "<br>" . $conn->error;
	}

}



public function update_add(user $u)
{
	include "conn.php";
	$sql = "UPDATE tbl_user SET `FirstName`=?, `Email`=?, `Mobile`=?, `uPassword`=?, `utype`=? WHERE ID=?";
$stmt= $conn->prepare($sql);
$stmt->bind_param("ssssii",$u->FirstName,$u->Email, $u->Mobile, $u->uPassword,$u->utype,$u->ID);
$stmt->execute();
header("location:userlist.php");
	


}


}
class cls_profile
{
	public $id;
	public $sname;
	public $address;
	public $phone;
	public $email;
	public $website;
	public $logo;
	public $status;
	public $date;
	
	public function update_profile(cls_profile $c)
	{
		$img='soi.png';
		if($file=$_FILES['logo']['tmp_name'] =='')
		{
$sql="UPDATE `tbl_compney` SET sname='$c->sname',address='$c->address',phon='$c->phon',email='$c->email',website='$c->website',logo='$img',startdate=NOW() WHERE id=1";
		include"conn.php";
		if($conn->query($sql)==TRUE)
		{
			header("location:profile.php");
		}
		else
		{
			echo"Erorr:".$sql."<br>".$conn->error;
		}
	}
	else
{
	$uniqname=time().uniqid(rand());
	$file=$_FILES['logo']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['logo']['tmp_name']));
	$image_name= addslashes($uniqname.$_FILES['logo']['name']);
	$ext = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
	move_uploaded_file($_FILES["logo"]["tmp_name"],"../img/".$uniqname. $_FILES["logo"]["name"]);
			
$sql="UPDATE `tbl_compney` SET sname='$c->sname',address='$c->address',phon='$c->phon',email='$c->email',website='$c->website',logo='$image_name',startdate=NOW() WHERE id=1";
		include"conn.php";
		if($conn->query($sql)==TRUE)
		{
			header("location:profile.php");
		}
		else
		{
			echo"Erorr:".$sql."<br>".$conn->error;
		}
	}
}
	
}
?>