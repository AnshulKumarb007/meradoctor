<?php include "header.php" ?>

<style>

	.blink-text{
		color: #000;
		font-weight: bold;
		 background:White;
		animation: blinkingText 2s infinite;

	}

	@keyframes blinkingText{

		0%		{ color: #10c018;}

		25%		{ color: #1056c0;}

		50%		{ color: #ef0a1a;}

		75%		{ color: #254878;}

		100%	{ color: #04a1d5;}

	}

</style>

<!-- Slider -->


<div id="demo" class="carousel slide pt-1" data-ride="carousel">



  <!-- Indicators -->

  <ul class="carousel-indicators">

    <li data-target="#demo" data-slide-to="0" class="active"></li>

    <li data-target="#demo" data-slide-to="1"></li>

    <li data-target="#demo" data-slide-to="2"></li>

  </ul>



  <!-- The slideshow -->

  <div class="carousel-inner">

    <div class="carousel-item active">

      <img src="images/add.jpeg" width="100%" alt="" >

    </div>

    <div class="carousel-item">

      <img src="images/slider-2.png" alt="" >

    </div>

    <div class="carousel-item">

      <img src="images/slider-3.png" alt="" >

    </div>

  </div>



  <!-- Left and right controls -->

  <a class="carousel-control-prev" href="#demo" data-slide="prev">

    <span class="carousel-control-prev-icon"></span>

  </a>

  <a class="carousel-control-next" href="#demo" data-slide="next">

    <span class="carousel-control-next-icon"></span>

  </a>



</div>

<!--Our Services -->

<div class="container">

 <div class="row text-center pt-3">

 	<div class="col-lg-3 col-12">

	<div class="card   text-white bg-danger">

  <h2><i class="fa fa-user-md fa-3x text-white"></i></h2>

  

  <div class="card-body">

  <span>1000+</span>

    <h5 class="card-title">Doctor</h5>

    

   <a href="doctor.php" class="btn btn-outline-light btn-lg btn-block blink-text">Book</a>

  </div>

</div>

</div>

<div class="col-lg-3 col-12">

	<div class="card   text-white bg-danger">

  <h2><i class="fa fa-user-md fa-3x text-white"></i></h2>

  

  <div class="card-body">

  <span>1000+</span>

    <h5 class="card-title">Specialist Doctor's</h5>

    

   <a href="doctor.php" class="btn btn-outline-light btn-lg btn-block blink-text">Book</a>

  </div>

</div>

</div>


<div class="col-lg-3 col-12">

			<div class="card text-white bg-danger">

				<h2><i class="fa fa-heartbeat fa-3x text-white"></i></h2> 

					<div class="card-body">

					<span>250+</span>

					<h5 class="card-title">Clinic/ Hospital</h5> 

					<a href="helthcheck.php" class="btn btn-outline-light btn-lg btn-block blink-text">Book</a>

				</div>

			</div>

		</div>

	<div class="col-lg-3 col-12">

	<div class="card  text-white bg-danger">

  <h2><i class="fa fa-flask fa-3x text-white"></i></h2>

  

  <div class="card-body">

  <span>250+</span>

    <h5 class="card-title"> Pathology/Daignostic</h5>

    

   <a href="pathlogy.php" class="btn btn-outline-light btn-lg btn-block blink-text">Book</a>

  </div>

</div>

</div>



</div>



<div id="adsdemo" class="carousel slide pt-3" data-ride="carousel">



  <!-- Indicators -->

  <ul class="carousel-indicators">

    <li data-target="#demo" data-slide-to="0" class="active"></li>

    <li data-target="#demo" data-slide-to="1"></li>

    <li data-target="#demo" data-slide-to="2"></li>

  </ul>



  <!-- The slideshow -->

  <div class="carousel-inner">

    <div class="carousel-item active">

      <img src="images/b1.jpeg" width="100%" alt="">

    </div>

    <div class="carousel-item">

      <img src="images/ads12.jpeg" width="100%" alt="">

    </div>

    <div class="carousel-item">

      <img src="images/ads11.jpeg" width="100%" alt="">

    </div>

  </div>



  <!-- Left and right controls -->

  <a class="carousel-control-prev" href="#demo" data-slide="prev">

    <span class="carousel-control-prev-icon"></span>

  </a>

  <a class="carousel-control-next" href="#demo" data-slide="next">

    <span class="carousel-control-next-icon"></span>

  </a>



</div>



<div class="row text-center pt-3">

 	<div class="col-lg-3 col-12">

	<div class="card  text-white bg-primary">

  <h2><i class="fa fa-plus-square fa-3x text-white"></i></h2>

  

  <div class="card-body">

  <span>1000+</span>

    <h5 class="card-title">Medical Store</h5>

    

   <a href="medical-store.php" class="btn btn-outline-warning btn-lg btn-block blink-text">Details</a>

  </div>

</div>

</div>





	<div class="col-lg-3 col-12 ">

	<div class="card text-white bg-primary">

  <h2><i class="fa fa-ambulance fa-3x text-white"></i></h2>

  

  <div class="card-body">

  <span>25+</span>

    <h5 class="card-title">Ambulance</h5>

    

    <a href="ambulance.php" class="btn btn-outline-warning btn-lg btn-block blink-text">Details</a>

  </div>

</div>

</div>

		  



	<div class="col-lg-3 col-12">

	<div class="card text-white bg-primary">

  <h2><i class="fa fa-medkit fa-3x text-white"></i></h2>

  

  <div class="card-body">

  <span>75+</span>

    <h5 class="card-title">Blood Donation</h5>

    

   <a href="agency.php" class="btn btn-outline-warning btn-lg btn-block blink-text">Details</a>

  </div>

</div>

</div>

	<div class="col-lg-3 col-12 ">

	<div class="card text-white bg-primary">

  <h2><i class="fa fa-home fa-3x text-white"></i></h2>

  

  <div class="card-body">

  <span>25+</span>

    <h5 class="card-title">Camp</h5>

    

    <a href="camp.php" class="btn btn-outline-warning btn-lg btn-block blink-text">Details</a>

  </div>

</div>

</div>



</div>

</div>



<!--Our Ads -->


<!--About us and Notice -->
	
	<div class="container" style="margin-top:30px">

  <div class="row">

    <div class="col-sm-8">

    <div class="card">

		<div class="card-header bg-danger text-white">

		 <h4>About Mera Doctor</h4>

		</div>

		<div class="card-body">

     

     		 <p style="width: 100%;text-align:justify">Welcome to Mera Doctor Website. The content of the App (Web/Mobile), pertains to Mera Doctor, is the property of Subhdin India Pvt. Ltd, having its office at Banjari Road Near Police Line Gopalganj Bihar, amongst other services, facilitates in finding and comparing prospective doctors and health care providers in identified locations ("service") and this service is provided only in good faith. The services of Mera Doctor are essentially provided to bridge the information gap between patients and doctors



We are a healthcare startup that started in 2021, a technology that is acting as a bridge between verified doctors, trusted and leading labs and patients. The basic objective of Mera Doctor is to provide you superior healthcare facilities for utmost comfort. We are here to bring change and flourish in beneficial ways that will serve not only us but all generations to come

<a href="#" class="fs-2 text-right">more</a> 

				 </p>

		</div>

		</div>



		</div>

    <div class="col-sm-4">

    

		<div class="card">

		<div class="card-header bg-danger text-white">

		<h4>Latest Notification</h4>

		</div>

		<div class="card-body">

		<marquee direction="up" style="max-height: 250px" >

			<p class="card-text">My Doctor wants to make healthcare reliable and convenient.</p>

			<p class="card-text">For better medical information and better doctor's advice my doctor is working in the interest of society

.</p>

			<p class="card-text">You can get information of doctors of the entire district on this website and app.</p>

			<p class="card-text">Free health check up facility.</p>

			<p class="card-text">For better information and better guidance just choose my doctor.</p>

			 

		</marquee>

		

		

		</div>

		</div>

    </div>

  

  </div>

</div>



<!--Our Ads -->

	<div class="container-fluid">

<div class="pt-3 pb-3">

<img src="images/harsh.jpeg" width="100%" class="img-fluid" alt="...">

</div>

</div>

<div class="container py-4">
        <div class="row text-center">
            <div class="col">
                <h2>Our Product</h2>
            </div>

            <div id="mixedSlider">
                <div class="MS-content">
                    <div class="item">
                        <div class="imgTitle">
                            <h2 class="blogTitle">Product-1</h2>
                            <img src="http://placehold.it/500x300?text=IMAGE1" alt="" />
                        </div>
                        <a href="#">Read More</a>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                            <h2 class="blogTitle">Product-2</h2>
                            <img src="http://placehold.it/500x300?text=IMAGE1" alt="" />
                        </div>

                        <a href="#">Read More</a>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                            <h2 class="blogTitle">Product-3</h2>
                            <img src="http://placehold.it/500x300?text=IMAGE1" alt="" />
                        </div>

                        <a href="#">Read More</a>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                            <h2 class="blogTitle">Product-4</h2>
                            <img src="http://placehold.it/500x300?text=IMAGE1" alt="" />
                        </div>

                        <a href="#">Read More</a>
                    </div>
                    <div class="item">
                        <div class="imgTitle">
                            <h2 class="blogTitle">Product-5</h2>
                            <img src="http://placehold.it/500x300?text=IMAGE1" alt="" />
                        </div>

                        <a href="#">Read More</a>
                    </div>

                </div>
                <div class="MS-controls">
                    <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                    <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>

    </div>

<!--why we choose & Video start here-->

<!--Donate-->

 
<div class="container pt-3">

<div class="card  pt-3">

 <div class="card-header bg-danger">

   <h2 class="text-center text-white">Donate</h2> 

  </div>

  <div class="card-body ">

   	

   	<div class="row">

	

	<div class="col">

	<div class="card mb-3" >

  <div class="row g-0">

    <div class="col-md-4 ">

      <img src="images/donate.jpeg" class="img-fluid rounded-start" alt="...">

    </div>

    <div class="col-md-8">

      <div class="card-body">

      

        <h5 class="card-title ">Mera Doctor</h5>

        

        <p class="card-text text-justify"> Our country is a home of the largest numbers of children population in the world. Under the Emergency Medical Programme, we support treatment to the ones who are in need of critical medical treatment. Here, we are supporting all these needy children whose parents can’t afford the cost of the hospital as well as who are underprivileged. We ensure that children afflicted by Cancer or ingrained illnesses do not have to die in the dawn of their lives.



Mera Doctor interacts with different medical specialty departments of various hospital partners on a regular basis to track down updates on underprivileged children who need emergency medical treatment. We also endorse an appeal from other hospitals, other families of underprivileged patients and NGO’s for Emergency Medical Support.



However, there are many children who are suffering from constant pain and anxiety due to congenital heart diseases and cancer. Approximately,70% of these children are underprivileged for whom it’s inconceivable for getting treated. Mera Doctor till date support 100+ children and tries best to get a solution for these issues by raising funds through sources like our Online Fund Raising Campaigns, Tele-calling Teams, and Media Advertisements. However, our support doesn’t stop here, but once the patient is in the recuperation stage we take regular updates about the patient’s medical status along with familys' status.</p>

        

      </div>

    </div>

  </div>

</div>

	

	</div>	 

 </div>

  </div>

</div>

</div>


	<!--Doctor List-->

  <div class="container text-center my-3">

     

    <div class="row mx-auto my-auto">

        <div id="doctorlist" class="carousel slide w-100" data-ride="carousel">

        <br/>

          <h2>Our Doctor</h2>

            <div class="carousel-inner" role="listbox">

			<?php 

				$cnt=1;

				include"admin/admin/include/conn.php";

				$count=0;

				$sr=1;

				$sql="SELECT * FROM  `tbl_doctor`";

				$result=$conn->query($sql);

				while($list=$result->fetch_assoc()){ 

				$cnt1=$cnt++;

				

				if($cnt1==1){

					$active="active";

				}else{

					$active="";

				}

				

				if($count==0){

					echo " <div class='carousel-item py-5 $active'>

                    <div class='row'>

                     <div class='col-sm-4'>

                    <div class='card text-white bg-danger'>
					<div class='card-header'>
						Doctor
					</div>
                              <div class='card-body'>
                              <img  src='admin/admin/image-doctor/$list[Image]' style='height: 200px;width:200px'  alt='test'>
                                <h4 class='card-title'>$list[dname]</h4>

                               

                                <a href=\"doc-booking.php?did=$list[id]\" class=\"btn btn-primary btn-lg\" role=\"button\">Book</a>

                              </div>

                            </div>

                        </div>";

                        $count=1;

				}

				else if($count==1){

					echo "<div class='col-sm-4'>
					<div class='card'>
  <div class='card-body'>
    <img src='images/add.jpeg' class='img-fluid'/>
  </div>
</div>
					</div>
					<div class='col-sm-4'>

                            <div class='card text-white bg-primary'>

							<div class='card-header bg-default'>
							Doctor
							</div>

                              <div class='card-body'>

                                <img  src='admin/admin/image-doctor/$list[Image]' style='height: 200px;width:200px'  alt='test'>

                               <h4 class='card-title'>$list[dname]</h4>

                               

                                <a href=\"doc-booking.php?did=$list[id]\" class=\"btn btn-primary btn-lg\" role=\"button\">Book</a>

                              </div>

                            </div>

                            </div>

                            </div>

                            </div>";

                            $count=0;

				}

}

				?>

			

              </div> 

            </div>

        </div>

   

    <div class="row">

        <div class="col-12">

            <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">

                <span class="fa fa-chevron-left" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">

                <span class="fa fa-chevron-right" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>

    </div>

</div>   



	<div class="container">

		<div class="row">

			<div class="col-12 text-center">

				<h3>HOW DOES IT WORK ?</h3>

			<br/>

			</div>

		</div>

		<div class="row">

			<div class="col-12 col-md-6">

			    

			<b>Patients - Download and Doctor Booking & More Service</b>

				 <p align="justify">Helps you quickly find doctors and book appointments online by specialty, location, services. Apart from this, you can also access My Doctor service information at home and get expert opinion in case of need. Additionally, you will be informed about the broadcasts/sessions by our experts and can also be viewed on the website and in your mobile app.  </p>

				

				 <iframe width="100%" height="315" src="https://www.youtube.com/embed/tocZQzQNn4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

			          

			</div>



			<div class="col-12 col-md-6">

			<b>Doctor : Suggestion & More Service</b>

			<br/> 

				 <p align="justify">The Doctor- Patient relationship is one factor in determining the patient's compliance with medical advice.Patients adhere more closely to medical advice when the healthcare provider is friendly, doesn't interrupt the patient, or has good verbal communication skills. </p>

			     

			     <br/>

			     

				 <iframe width="100%" height="315" src="https://www.youtube.com/embed/tocZQzQNn4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 

			</div>

		</div>

		

	</div>



 <div class="container text-center my-3">

	 <div class="row mx-auto my-auto">

        <div id="doctorlist" class="carousel slide w-100" data-ride="carousel">

        <br/>

          <h2>Our Pathology</h2>

            <div class="carousel-inner" role="listbox">

			<?php 

				$cnt=1;

				include"admin/admin/include/conn.php";

				$count=0;

				$sr=1;

				$sql="SELECT * FROM  `tbl_pathlogy`";

				$result=$conn->query($sql);

				while($list=$result->fetch_assoc()){ 

				$cnt1=$cnt++;

				

				if($cnt1==1){

					$active="active";

				}else{

					$active="";

				}

				

				if($count==0){

					echo " <div class='carousel-item py-5 $active'>

                    <div class='row'>

                     <div class='col-sm-6'>

                            <div class='card text-white bg-danger'>

                              <div class='card-body'>

                              <img  src='admin/admin/pathlogy-image/$list[image]' style='height: 200px;width:200px'  alt='test'>

                                <h4 class='card-title'>$list[pname]</h4>

                               

                                <a href=\"doc-booking.php?did=$list[id]\" class=\"btn btn-primary btn-lg\" role=\"button\">Book</a>

                              </div>

                            </div>

                        </div>";

                        $count=1;

				}

				else if($count==1){

					echo "<div class='col-sm-6'>

                            <div class='card text-white bg-danger'>

                              <div class='card-body'>

                                <img  src='admin/admin/pathlogy-image/$list[image]' style='height: 200px;width:200px'  alt='test'>

                               <h4 class='card-title'>$list[pname]</h4>

                               

                                <a href=\"doc-booking.php?did=$list[id]\" class=\"btn btn-primary btn-lg\" role=\"button\">Book</a>

                              </div>

                            </div>

                            </div>

                            </div>

                            </div>";

                            $count=0;

				}

}

				?>

			

              </div> 

            </div>

        </div>


    <div class="row">

        <div class="col-12">

            <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">

                <span class="fa fa-chevron-left" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">

                <span class="fa fa-chevron-right" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>

    </div>

</div>  





 <div class="container text-center my-3">

    <div class="row mx-auto my-auto">

        <div id="doctorlist" class="carousel slide w-100" data-ride="carousel">

        <br/>

          <h2>Our Medical Store</h2>

            <div class="carousel-inner" role="listbox">

			<?php 

				$cnt=1;

				include"admin/admin/include/conn.php";

				$count=0;

				$sr=1;

				$sql="SELECT * FROM  `tbl_mstore` where dposition=2";

				$result=$conn->query($sql);

				while($list=$result->fetch_assoc()){ 

				$cnt1=$cnt++;

				

				if($cnt1==1){

					$active="active";

				}else{

					$active="";

				}

				

				if($count==0){

					echo " <div class='carousel-item py-5 $active'>

                    <div class='row'>

                     <div class='col-sm-6'>

                            <div class='card text-white bg-success'>

                              <div class='card-body'>

                              <img  src='admin/admin/medical/$list[image]' style='height: 200px;width:200px'  alt='test'>

                                <h4 class='card-title'>$list[name]</h4>

                               

                                

                              </div>

                            </div>

                        </div>";

                        $count=1;

				}

				else if($count==1){

					echo "<div class='col-sm-6'>

                            <div class='card text-white bg-success'>

                              <div class='card-body'>

                                <img  src='admin/admin/medical/$list[image]' style='height: 200px;width:200px'  alt='test'>

                               <h4 class='card-title'>$list[name]</h4>

                               

                                

                              </div>

                            </div>

                            </div>

                            </div>

                            </div>";

                            $count=0;

				}

}

				?>

			

              </div> 

            </div>

        </div>

    <div class="row">

        <div class="col-12">

            <a class="carousel-control-prev text-dark" href="#myCarousel" role="button" data-slide="prev">

                <span class="fa fa-chevron-left" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>

            <a class="carousel-control-next text-dark" href="#myCarousel" role="button" data-slide="next">

                <span class="fa fa-chevron-right" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

        </div>

    </div>

</div



 





<div class="container">
		<div class="row">

			<div class="col-12 text-center" >

			     <h2>Our Partners</h2>

			        <marquee >

			     

                <img src="images/p.jpeg" width="100px" height="100px" class="img-responsive"/>

                <img src="images/p1.jpeg" width="100px" height="100px" class="img-responsive"/>

                 

          

             </marquee>

			

			</div>

		</div>

    <br/>

</div>

	

	<div class="container  text-justify">

	<h2 style="text-align:center">About Informataion</h2>

	<br/>

	<div class="row">

		<div class="col-12 col-md-3 text-center"> 

				 <img src="images/s.jpeg"  width="100%"   class="img-responsive"/>

				<br/> <b style="text-align:center">Doctor</b><br/>

				 <p style="text-align:justify">Assists you to quickly search for doctors by speciality , location, services and schedule. Additionally, you will be notified about the broadcasts/sessions by our specialists.</p>

		</div>

		<div class="col-12 col-md-3 text-center">

				 <img src="images/s1.jpeg" width="100%" class="img-responsive"/>

				<br/><b style="text-align:center">Pathlogy</b><br/>

				 <p style="text-align:justify">Assists you to quickly search for Pathology Test, location, services and schedule an appointment. Additionally, you will be notified about the broadcasts/sessions by our specialists.</p>

		</div>

		<div class="col-12 col-md-3 text-center">

				 <img src="images/s2.jpg" width="100%"  class="img-responsive"/>

				<br/> <b style="text-align:center">Health Checkup</b><br/>

				 <p style="text-align:justify"> Assists you to quickly search for Health Checkup Centre, location, services and schedule an appointment. Additionally, you will be notified about the broadcasts/sessions by our specialists.</p>

		</div>

		<div class="col-12 col-md-3 text-center">

				 <img src="images/s4.png" width="100%"   class="img-responsive"/>

				<br/> <b style="text-align:center">Medical Store</b><br/>

				 <p style="text-align:justify"> Assists you to quickly search for Medical Store, location, services and Purchase Medicine. Additionally, you will be notified about the broadcasts/sessions by our specialists.</p>

		</div>

		</div>

  </div>

  <div class="container">

		<div class="row">
			<div class="col-12 text-center" >
			     <h2>Our Team</h2>
			        <marquee>
			            <?php
			        	include"admin/admin/include/conn.php"; 
        				$sql="SELECT photo FROM  `tbl_join`";
	       				$result=$conn->query($sql);
        				while($list=$result->fetch_assoc()){ 
			                ?> 

                        <img src="admin/admin/join/<?=$list['photo'];?>" width="100px" height="100px" class="img-responsive"/> 

                        <?php }  ?>

             </marquee>
			</div>
		</div>

</div>


<?php include "footer.php" ?>
<script src="js/multislider.js"></script>
<script>
    $('#basicSlider').multislider({
        continuous: true,
        duration: 2000
    });
    $('#mixedSlider').multislider({
        duration: 750,
        interval: 3000
    });
</script>


