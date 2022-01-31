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
        <a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a>
        </li>
       
        <li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Booking</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="booking-doclist.php"><i class="icon fa fa-circle-o"></i> Doctors</a></li>
            
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Sp. Doctors</a></li>
			
			
		
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Clinic & Hospital</a></li>
          </ul>
        </li>
 		<li class="treeview">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">New Entery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="doctor.php"><i class="icon fa fa-circle-o"></i> Doctors</a></li>
            
            <li><a class="treeview-item" href="doctor.php?sp"><i class="icon fa fa-circle-o"></i> Sp. Doctors</a></li>
			
			<li>
        <a class="treeview-item" href="doctor-list.php"> <i class="icon fa fa-circle-o"></i> <span class="app-menu__label"> Doctor List</span></a>
        </li>
		
		<li>
        <a class="treeview-item" href="doctor-list.php?sp=1"> <i class="icon fa fa-circle-o"></i>  <span class="app-menu__label"> Special Doctor List</span></a>
        </li>
		
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Clinic & Hospital</a></li>
          </ul>
        </li>
      
       	<li>
        <a class="app-menu__item" href="category.php"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Category</span></a>
        </li>
		
		 <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon   fa fa-flask"></i><span class="app-menu__label">Pathology</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="add-pathology.php"><i class="icon fa fa-circle-o"></i>Add Pathology</a></li>
          <li><a class="treeview-item" href="pathology-list.php"><i class="icon fa fa-circle-o"></i> Pathology List</a></li>
             
        </ul>
      </li>
	  
	  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon   	fa fa-stethoscope"></i><span class="app-menu__label">Diagnostic  Centre</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="add-diagnostic.php"><i class="icon fa fa-circle-o"></i>Add Diagnostic</a></li>
          <li><a class="treeview-item" href="diagnostic-list.php"><i class="icon fa fa-circle-o"></i> Diagnostic List</a></li>
             
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon   fa fa-ambulance"></i><span class="app-menu__label">Ambulance </span><i class="treeview-indicator fa fa-angle-right"></i></a>
        
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="add-ambulance.php"><i class="icon fa fa-circle-o"></i>Add Ambulance</a></li>
          <li><a class="treeview-item" href="ambulance-list.php"><i class="icon fa fa-circle-o"></i>Ambulance</a></li>
             
        </ul>
      </li>
	  
	  
	  <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon   fa fa-medkit"></i><span class="app-menu__label">	Medical Store</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="add-medical-store.php"><i class="icon fa fa-circle-o"></i>Add Medical Store</a></li>
          <li><a class="treeview-item" href="medical-store-list.php"><i class="icon fa fa-circle-o"></i> Medical Store List</a></li>
             
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon   fa fa-free-code-camp"></i><span class="app-menu__label">	Camp</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        

      
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="add-camp.php"><i class="icon fa fa-circle-o"></i>Add Camp</a></li>
          <li><a class="treeview-item" href="camp-list.php"><i class="icon fa fa-circle-o"></i> Camp List</a></li>
             
        </ul>
      </li>


      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon   fa fa-truck"></i><span class="app-menu__label">Marchery van</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        

      
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="add-marchery-van.php"><i class="icon fa fa-circle-o"></i>Add Marchery van</a></li>
          <li><a class="treeview-item" href="add-marchery-van.php"><i class="icon fa fa-circle-o"></i> Marchery van List</a></li>
             
        </ul>
      </li>
      	
         
        
        
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        
          <ul class="treeview-menu">
           <li><a class="treeview-item" href="add-user.php"><i class="icon fa fa-circle-o"></i> Add User</a></li>
            <li><a class="treeview-item" href="user-list.php"><i class="icon fa fa-circle-o"></i> User List</a></li> 
          </ul>
        </li>
        
         
        
      
        
        
         <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-handshake-o"></i><span class="app-menu__label">Reports</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="report.php"><i class="icon fa fa-circle-o"></i>Daily  Report</a></li> 
            <li><a class="treeview-item" href="district-wise-report.php"><i class="icon fa fa-circle-o"></i> District Wise  Report</a></li> 
             <li><a class="treeview-item" href="monthly-report.php"><i class="icon fa fa-circle-o"></i>  Monthly  Report</a></li> 
                    
          </ul>
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