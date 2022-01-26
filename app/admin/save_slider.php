<?php 
// Include the database configuration file 
include_once 'include/conn.php'; 
     
if(isset($_POST['submit'])){ 

    if($_POST['id']>0){

        if($_FILES['files']['name']==''){ 
            $sql1="select * from tbl_doctor where id=$id"; 
            $row=mysqli_fetch_assoc($conn->query($sql1)); 
            $image=$row['Image'];
        }else{
            $arryx=$_FILES["files"]["tmp_name"];
            $aarayxyy=implode(" ",$arryx); //covert array to variable
            $temp=$_FILES['files']['name'];
            $immg=implode(" ",$temp); 
            $nameun=time().uniqid(rand());
			$ext = pathinfo($immg, PATHINFO_EXTENSION); 
			$image= addslashes($nameun.".".$ext); 		 
			move_uploaded_file($aarayxyy,"slider/".$image);
        }


      $id=$_POST['id'];
      $catid=$_POST['catid'];
       $sql="UPDATE `tbl_slider` SET `catid`=$catid,`file_name`='$image' WHERE id=$id";
      
      if($conn->query($sql)){  
        header("location:add-sliders.php?msg=Successfully Updated");
     }else{
         echo"error";
     }


    }else{


    $catid=$_POST['catid'];
    // File upload configuration 
    $targetDir = "slider/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 

            $nameun=time().uniqid(rand());

			$ext = pathinfo($_FILES['files']['name'][$key], PATHINFO_EXTENSION);

			$fileName= addslashes($nameun.".".$ext); 		  


            //$fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                      $insertValuesSQL .= "('".$fileName."', $catid),"; 
                  
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            } 
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
       
        if(!empty($insertValuesSQL)){ 
             
           $insertValuesSQL = trim($insertValuesSQL, ','); 
           $sql="INSERT INTO `tbl_slider`(`file_name`,`catid`) VALUES $insertValuesSQL";
            // Insert image file name into database 
            // $insert = $conn->query("INSERT INTO tbl_slider (file_name, uploaded_on) VALUES $insertValuesSQL"); 
         
            if($conn->query($sql)){ 
               // $statusMsg = "Files are uploaded successfully.".$errorMsg; 
               header("location:add-sliders.php?msg=Successfully Added");
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }else{ 
        $statusMsg = 'Please select a file to upload.'; 
    } 


    
    }











} 


?>