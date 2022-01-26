<?php  

if(isset($_GET['id'])){
include "include/conn.php";
$id=$_GET['id'];
$page=$_GET['page'];
$table=$_GET['table'];

  $sql="DELETE FROM $table WHERE id = $id";
 
if($conn->query($sql)==true){

    header("location:$page?msg=Delete Successfully");

}else{

    echo "Error:" . $sql . "<br>" . $conn->error;

}




}








?>