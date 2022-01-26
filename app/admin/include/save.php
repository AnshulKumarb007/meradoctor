<?php 


include "cls_doctor.php";
include "clsusertype.php";
include "cls_pathlogy.php";
include "cls_docbooking.php";
include "cls_pathbook.php";
include "cls_diagnostic.php";
include "cls_show.php";
include "cls_join.php";

 extract($_POST);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	//----- SAVE BRANCH -----//
	if(isset($_POST['add-doctor']))
	{
		$B = new cls_doctor();
		$B->id=$id;
		$B->dname=$dname;
		$B->gender=$gender;
		$B->dcategory=$dcategory;
		$B->dposition=$dposition;
		$B->exp=$exp;
		$B->ddetails=$ddetails;
		$B->email=$email;
		$B->mobile=$mobile;
		$B->address=$address; 
		$B->fee=$fee; 
		$B->timeing=$timeing;
	 	$B->state=$state; 
	 	$B->dis=$district;
		if($id > 0){
			$B->update_doctor($B);
		}else{ 
			$B->addoctor($B);
		}
	}

	if(isset($_POST['save_user']))
	{
		$id=$id;
		$b = new clsusertype();
		$b->id=$id;
		$b->name=$name;
		$b->mobile=$mobile; 
		$b->password=$password; 
		$b->create_type=$create_type; 
		$b->type=$type; 
		if($id > 0){
			//$b->update_branch($b);
		}else{
			$b->Add_user($b);
	}
	}





	if(isset($_POST['pathlogy'])){
		$b = new cls_pathlogy();
		$b->id=$id; 
		$b->dposition=$dposition;
		$b->pname=$pname;
		$b->cperson=$cperson;
		$b->tdetails=$tdetails;
		$b->establish=$establish;
		$b->mobile=$mobile;
		$b->address=$address; 
		$b->category=$category; 
		$b->state=$state; 
		$b->district=$district; 
		$b->timeing=$timeing;
		if($id > 0){
 	
			$b->update_pathlogy($b);
		}else{

			$b->pathlogysave($b);


		}


	}


	if(isset($_POST['diagnostic'])){

		$b = new cls_dignostic();

		$b->id=$id; 
		$b->dposition=$dposition;
		$b->dname=$dname;
		$b->cperson=$cperson;
		$b->tdetails=$tdetails;
		$b->establish=$establish;
		$b->mobile=$mobile;
		$b->address=$address; 
		$b->category=$category; 


		$b->state=$state; 


		$b->district=$district; 


		if($id > 0){


		 	 


			$b->update_dignostic($b);


		}else{


			 


			$b->dignosticsave($b);


		}


	}








	if(isset($_POST['helthcheckup'])){





		$b = new cls_healthcheck();


		$b->id=$id; 


		$b->dposition=$dposition;


		$b->pname=$pname;


		$b->cperson=$cperson;


		$b->tdetails=$tdetails;


		$b->establish=$establish;


		$b->mobile=$mobile;


		$b->address=$address; 


		$b->category=$category; 


		$b->state=$state; 


		$b->district=$district; 


		$b->timeing=$timeing;


		if($id > 0){


		 	 


			$b->update_healthcheckup($b);


		}else{


			 


			$b->healthcheckup($b);


		}


	}








		if(isset($_POST['add-eng'])){





			$b = new cls_eng();


			$b->id=$id;


			$b->name=$name;


			$b->password=$password;


			$b->mobile=$mobile;


			$b->email=$email;


			$b->address=$address;


			 


			if($id > 0){


				$b->update_eng($b);


			}else{


				$b->eng($b);


			}


 


			 


		} 


		if(isset($_POST['book'])){

			$b = new cls_booking();
			$b->id=$id;
			$b->name=$name;
			$b->gname=$gname;
			$b->mobile=$mobile;
			$b->age=$age;
			$b->dob=$dob;
			$b->btime=$btime;
			$b->details=$details;
			$b->address=$address;
			$b->doctorid=$did;
			$b->othermobile=$othermobile;
			if($id > 0){
				$b->update_doc($b);
			}else{
				$b->book_doc($b);
			}


 


			 


		} 





		if(isset($_POST['book-path'])){


			$b = new cls_pbooking();


			$b->id=$id;


			$b->name=$name;


			$b->gname=$gname;


			$b->mobile=$mobile;


			$b->age=$age;


			$b->dob=$dob;


			$b->details=$details;


			$b->address=$address;


			$b->pathlogyid=$did;


			$b->othermobile=$othermobile;


			$b->timing=$timing;


			if($id > 0){


				$b->update_doc($b);


			}else{


				$b->book_doc($b);


			}


 


			 


		} 








		if(isset($_POST['helth-book'])){





			$b = new cls_hbooking();


			$b->id=$id;


			$b->name=$name;


			$b->gname=$gname;


			$b->mobile=$mobile;


			$b->age=$age;


			$b->dob=$dob;


			$b->details=$details;


			$b->address=$address;


			$b->healthid=$did;


			$b->othermobile=$othermobile;


			if($id > 0){


				$b->update_doc($b);


			}else{


				$b->book_doc($b);


			}


 


			 


		} 





		if(isset($_POST['book-dignostic'])){





			$b = new cls_ddbooking();


			$b->id=$id;


			$b->name=$name;


			$b->gname=$gname;


			$b->mobile=$mobile;


			$b->age=$age;


			$b->dob=$dob;


			$b->details=$details;


			$b->address=$address;


			$b->diognosticid=$did;


			$b->othermobile=$othermobile;


			if($id > 0){


				$b->update_doc($b);


			}else{


				$b->book_doc($b);


			}


 


			 


		} 








		if(isset($_POST['saveshop'])){





			$b = new cls_shop();


			$b->id=$id;


			$b->name=$name;


			$b->mobile=$mobile;


			$b->timing=$timing;


			$b->address=$address;


			$b->of=$of;


			$b->category=$category; 


			$b->email=$email;


			$b->cpname=$cpname;


			$b->category=$category; 


			$b->state=$state; 


			$b->dis=$district; 


			$b->dposition=$dposition; 


			if($id > 0){


				$b->update($b);


			}else{


				$b->add($b);


			}


 


			 


		} 








		if(isset($_POST['savemagency'])){





			$b = new cls_magency();


			$b->id=$id;


			$b->name=$name;


			$b->mobile=$mobile;


			$b->timing=$timing;


			$b->address=$address;


			$b->of=$of;


			$b->category=$category; 


			$b->email=$email;


			$b->cpname=$cpname;


			$b->category=$category; 


			$b->state=$state; 


			$b->dis=$district; 


			if($id > 0){


				$b->update($b);


			}else{


				$b->add($b);


			}


 


			 


		} 








		if(isset($_POST['amb'])){





			$b = new cls_amb();


			$b->id=$id;


			$b->name=$name;


			$b->mobile=$mobile;


			$b->timing=$timing;


			$b->address=$address;  


			$b->state=$state; 


			$b->dis=$district; 


			if($id > 0){


				$b->update($b);


			}else{


				$b->add($b);


			}


 


			 


		} 


		 


		 


		if(isset($_POST['camp'])){





			$b = new cls_camp();


			$b->id=$id;


			$b->cname=$cname;


			$b->orgnser_name=$orgnser_name;


			$b->orgnser_mobile=$orgnser_mobile;


			$b->location=$location;  


			$b->date=$date; 


			$b->doctorname=$doctorname; 


			$b->typetest=$typetest; 


			$b->category=$category; 


			$b->day=$day; 


			$b->state=$state; 


			$b->dis=$dis; 


			$b->address=$address; 


			if($id > 0){


				$b->update($b);


			}else{


				$b->add($b);


			}


 


			 


		} 








		if(isset($_POST['joinus'])){





			$b = new cls_join();


			$b->id=$id;


			$b->name=$name;


			$b->gname=$gname;


			$b->dob=$dob;


			$b->mobile=$mobile;  


			$b->othermobile=$othermobile; 


			$b->age=$age; 


			$b->email=$email; 


			$b->qualification=$qualification; 


			$b->exprience=$exprience; 


			$b->address=$address; 


			 


			if($id > 0){


				$b->update($b);


			}else{


				$b->add($b);


			}


 


			 


		} 





		 


}


?>