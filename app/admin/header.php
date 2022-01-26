<?php                                                                    
include"include/cls_usertype.php";               
include"include/conn.php";
session_start(); 
 if(!isset($_SESSION['userd']))
 	echo "<script>alert('Plese Login');document.location='../index.html'</script>";
 
 function get_post($utype){
	$post="";
	switch ($utype) {
  case 0:
    $post="Super Admin";
    break;
  case 1:
    $post="State";
    break;
  case 2:
    $post="District/Franchise";
    break;
    case 3:
    $post="Doctor/Spl. Doctor";
    break;
    case 4:
    $post="Clinic/Hospital";
    break;
    case 5:
    $post="Pathlogy/Diagnostic/Helth Center/Acupressure";
    break;
    case 6:
    $post="Medicine Dealer";
    break;
    
  default:
    $post="User";
}
return $post;
}
 $userd=new user();
 $userd=unserialize($_SESSION["userd"]);
 /*
	echo	$userd->ID;
	echo	$userd->FirstName;
	echo	$userd->Email;
	echo	$userd->Mobile;
	echo	$userd->uPassword;
	echo	$userd->utype;
	echo	$userd->cdate;
	>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	
	0=>Super Admin
	1=>Admin(State)
	2=>Admin(District/Franchise)
	3=>User(Doctor/Spl. Doctor)
	4=>User(Clinic/Hospital)
	5=>User(Pathlogy/Diagnostic/Helth Center/Acupressure)
	6=>User(Medicine Dealer)
	>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

*/

?>
<html lang="en">
  <head>
    <meta name="description" content="Mera Doctor">
  
    <title>Mera Doctor</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
    <a class="app-header__logo" href="dashboard.php">Mera Doctor</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
         <li style="color:#fff;margin-right: 26px;
    		margin-top: 13px;"><?=$userd->FirstName;?></li>
        <!--Notification Menu-->
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
     <!-- <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">-->
        <div>
          <p class="app-sidebar__user-name"><?=$userd->FirstName;?></p>
          <p class="app-sidebar__user-designation"><?=$userd->check_userType($userd->utype)?></p>
        </div>
      </div>
      <?php include "menu.php" ?>
      </aside>

    <main class="app-content">
   