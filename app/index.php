<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>SOI Lite</title>
  <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">


  <form action="logincode.php" method="post" class="form-signin border-dark">
    <img class="mb-4" src="../images/logo.png" alt="" width="95" height="95">

    <h1 class="h3 mb-3 font-weight-normal">CRM Next</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="inputEmail" class="form-control" name="Email" placeholder="Enter Email" required
      autofocus><br>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="uPassword" class="form-control" placeholder="Password" required>

    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login-submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
  </form>
</body>

</html>