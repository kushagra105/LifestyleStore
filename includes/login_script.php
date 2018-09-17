<?php
  require 'dbconnect.php';
  $email = mysqli_real_escape_string($connection,$_POST['email']);
  $password = mysqli_real_escape_string($connection,$_POST['password']);
  $md5_password = md5($password);
  //user existence query
  $query = "SELECT id,email,name,password FROM users WHERE email='$email'";
  $result = mysqli_query($connection,$query) or die('email query unsuccessful!!!');
  $num_rows = mysqli_num_rows($result);
  if ($num_rows < 1) {
    header("Location: /login.php?err=no_user");
  } else {
    //check for password
    $res_arr = mysqli_fetch_array($result);
    if ($md5_password == $res_arr['password']) {
      $_SESSION['id'] = $res_arr['id'];
      $_SESSION['email'] = $res_arr['email'];
      $_SESSION['name'] = $res_arr['name'];
      header("Location: /product.php");
    } else {
      header("Location: /login.php?err=no_pass");
    }
  }
 ?>
