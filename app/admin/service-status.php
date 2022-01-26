<?php
include "include/conn.php"; 
if(isset($_GET['val'])){
    $id=$_GET['id'];
    $status=$_GET['val'];
   $sql="update tbl_booking set service_status=$status where id=$id";
 
    if($conn->query($sql)==TRUE){
        header("location:book-service-list.php");
    }else{
        echo "Error:".$sql."<br/>".$conn->error;
    }




}



?>