<?php
  require 'dbconnect.php';
  $user_id = $_SESSION['id'];
  $item_id = $_GET['id'];
  $query = "INSERT INTO user_items(user_id,item_id,status) VALUES ('$user_id','$item_id','Added to cart')";
  $status = mysqli_query($connection, $query) or die('unable to add!!!');
  header("Location: /product.php");
 ?>
