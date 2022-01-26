<?php

class clsusertype{
	
public $id;
public $name;
public $password;
public $mobile;
public $email;
public $type;
public $status;
public $user_id;
public $create_type;
public $login_user_id; 
public $district;

  
 
 
public function Add_user(clsusertype $u){
    $dis=$u->district?$u->district:2;
	include "conn.php";	 
	
     $sql="INSERT INTO tbl_user(`name`,`password`,`mobile`,`email`,`type`,`create_type`,`login_user_id`,`district`)
	VALUES('$u->name','$u->password','$u->mobile','NA','$u->type','$u->create_type','$u->login_user_id',$dis)";
	 
if($conn->query($sql)){
	header("location:../add-user.php?msg=Successfully Add");	
}else{
	echo "Error:" . $sql . "<br>" . $conn->error;
	} 
}


public function update_add(clsusertype $u){
	$sql="UPDATE  tbl_user SET type='$u->type',user='$u->user',password='$u->password',number='$u->number',email='$u->email',district=$u->district WHERE id='$u->id'";
include "conn.php";
if($conn->query($sql)){header("location:createuser.php");}else{
	echo "Error:" . $sql . "<br>" . $conn->error;}
}
  

}
?>