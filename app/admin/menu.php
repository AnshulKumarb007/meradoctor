<?php

 if(!isset($_SESSION['userd']))
 	echo "<script>alert('Plese Login');document.location='../index.html'</script>";
 	

 $userd=new user();
 $userd=unserialize($_SESSION["userd"]);
/*
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

	0=>Super Admin
	1=>Admin(State)
	2=>Admin(District/Franchise)
	3=>User(Doctor/Spl. Doctor)
	4=>User(Doctor/Spl. Doctor)
	5=>User(Pathlogy/Diagnostic/Helth Center/Acupressure)
	6=>User(Medicine Dealer)
	>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
	
*/

if($userd->utype==0){ ?>
		 <ul class="app-menu">
        <li>
        <a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
        <a class="app-menu__item" href="Doctor-list.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">List</span></a>
        </li>
        <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Booking</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Doctors</a></li>
            
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Sp. Doctors</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Clinic & Hospital</a></li>
          </ul>
        </li>
 		<li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">New Entery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="doctor.php"><i class="icon fa fa-circle-o"></i> Doctors</a></li>
            
            <li><a class="treeview-item" href="doctor.php?sp"><i class="icon fa fa-circle-o"></i> Sp. Doctors</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Clinic & Hospital</a></li>
          </ul>
        </li>
      
       	<li>
        <a class="app-menu__item" href="category.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Category</span></a>
        </li>
        
        <li>
        <a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a>
        </li>
    	<li>
        <a class="app-menu__item" href="../logout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a>
        </li>
      </ul>
<?php
}elseif($userd->utype==1){?>
		<ul class="app-menu">
          <li>
        <a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Booking</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Doctors</a></li>
            
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Sp. Doctors</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Clinic & Hospital</a></li>
          </ul>
        </li>
        <li>
        <a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a>
        </li>
        <li>
        <a class="app-menu__item" href="../logout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a>
        </li>
        </ul>	
<?php }
		elseif($userd->utype==2){ ?>
		
		<?php }
		elseif($userd->utype==3){?>
			<ul class="app-menu">
        <li>
        <a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
        <li>
        <a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Booking List</span></a>
        </li>
        <li>
        <a class="app-menu__item" href="dashboard.html"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a>
        </li>
        <li>
        <a class="app-menu__item" href="../logout.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Logout</span></a>
        </li>
        </ul>	
	<?php }?>