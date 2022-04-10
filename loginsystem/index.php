<?php
  
  session_start();
  if(isset($_SESSION['uid'])) {
    header("Location: dashboard.php");
  }

?>

<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.0/examples/sign-in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>CF:LOGIN PAGE</title>

    <!-- Bootstrap core CSS -->
    <link href="./login2_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./login2_files/signin.css" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="./login2_files/abc.css" />

    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" action="index-throw.php" method="post">
      <img class="mb-4" class="img.avatar" src="download.jpg" alt="CFlogo">
      <h1 class="h3 mb-3 font-weight-normal">HELLO ENTREPRENEURS</h1>
      <!--label for="uname" class="sr-only">Username</label-->
      <input type="text" class="form-control" placeholder="Username" name="uname" required autofocus="">
      <!--label for="psw">Password</label-->
      <input type="password" class="form-control" placeholder="Password" name="psw" required="">
      <!--div class="checkbox mb-3 __web-inspector-hide-shortcut__">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div-->
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">LOGIN</button>
      
    </form>
  

</body></html>