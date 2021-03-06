<?php
session_start();
if (!$_SESSION['userID'] == 0) {
  $_SESSION['userID'] = 0;
  header("Location: ../landing/landing.php");
}
if (isset($_SESSION['failedLogin']) == false) {
  $_SESSION['failedLogin'] = 0;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Master-Race Signin</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
<main class="form-signin">
  <form action="sigininform.php" method="post">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">
      <?php
        if ($_SESSION['failedLogin'] == 1) {
          $_SESSION['failedLogin'] = 0;
          echo "Please Sign In Again (Wrong email or password)";
        } else if ($_SESSION['failedLogin'] == 0) {
          echo "Please Sign In";
        }
      ?>
    </h1>
    <label for="inputEmail" class="visually-hidden">Email address</label>
    <input type="email" class="form-control" name="emailInput" id="inputEmail" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" class="form-control" name="passwordInput" id="inputPassword" placeholder="Password" required>
    <br></br>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign in</button>
    <br></br>
    <button class="w-100 btn btn-lg btn-primary" type="button" onclick="document.location='register.php'">No Account? Register Now!</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
  </form>
</main>


  </body>
</html>
