<?php error_reporting(E_ALL);

ini_set('display_errors', '1');

?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>Mera Doctor</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="icon" href="logox.jpeg">
  
 <link href="css/slider.css" rel="stylesheet" type="text/css">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P6WDWDVP9W"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P6WDWDVP9W');
</script>

  <style>

  

  .fakeimg {

    height: 200px;

    background: #aaa;

  }

 .navbar-dark .navbar-nav .nav-link {
    color: rgb(12 12 12 / 50%);
}
  .nav-item

{

  font-family: 'Lato', sans-serif;
  font-size: 25px;
  margin: 0px;
 color: #fff;
}



 

	.blink-text{
		color: #000;
		font-weight: bold;
		 //background:White;
		animation: blinkingText 2s infinite;

	}

	@keyframes blinkingText{

		0%		{ color: #10c018;}

		25%		{ color: #1056c0;}

		50%		{ color: #ef0a1a;}

		75%		{ color: #254878;}

		100%	{ color: #04a1d5;}

	}

 @font-face {
    font-family: "myFirstFont";
    src: url("Wonderbar.otf");
}

.harlow {
    font-family: "myFirstFont";
}


  </style>

</head>

<body style="background-color: #e5eded;">

<!-- top bar -->

<nav class="navbar navbar-expand-sm bg-danger text-white">

<div class="col-6 col-sm-4">

<a href="#" class="text-white"><i class="fa fa-mobile " ></i> 7004534062</a>

</div>

<div class="col-6 col-sm-8 text-right">

  

<a href="https://www.facebook.com/Mera-Doctor-141046868118885/" class="fa fa-facebook  text-white p-1"></a>

<a href="https://www.instagram.com/invites/contact/?i=vi5f0xa37tn0&utm_content=mgznndn" class="blink-text fa fa-instagram  text-white p-1"></a>

<a href="https://youtube.com/channel/UCVm86gDFC10D0Dp0EAm5tZg" class="fa fa-youtube  text-white p-1"></a>



<a href="https://api.whatsapp.com/send?phone=7004534062&text=7004534062" class="fa fa-whatsapp  text-white p-1"></a>

</div>

</nav>

<!-- logo and image -->



<div class="container" style="padding:10px;">

	<div class="row">

		

			<div class="col-4  col-sm-4 col-md-4">

				<img src="images/logo.png" class="img-fluid" style="height:80px;" />

			</div>

			<div class="col-8 col-sm-8 col-md-8 text-right ">

				<img src="images/headertop.jpeg" class="img-fluid" style="height:80px;" />

			</div>

		</div>

</div>

<nav class="navbar navbar-expand-lg navbar-light bg-danger ">
  <a class="navbar-brand text-white harlow" href="index.php" style=" font-size: 32px;">Mera Doctor</a>
  <button class="navbar-toggler blink-text" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
         
        <a class="nav-link   m-1" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link   m-1" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle   m-1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item   m-1" href="service.php">Services List</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item   m-1" href="#">Suggestion</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item   m-1"  href="#">Membership</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item   m-1" href="#">Insurance</a>
            <div class="dropdown-divider"></div>
          <a class="dropdown-item   m-1" href="#">Education</a>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link   m-1" href="#">Franchise</a>
      </li>
        <li class="nav-item">
        <a class="nav-link   m-1" href="ourteam.php">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   m-1" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link   m-1" href="#">Donation</a>
      </li>
     <li class="nav-item">
        <a class="nav-link   m-1" href="#">Contact</a>
      </li>  
		  
      
     <li class="nav-item">
        <a class="nav-link  m-1" href="admin/">Login</a>
      </li>   
    </ul>
   
  </div>
</nav>

<!-- Menu -->
