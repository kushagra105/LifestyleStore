<?php
  require 'dbconnect.php';
  $user_id = $_SESSION['id'];
  $item_id = $_GET['id'];
  //create query
  $query = "DELETE FROM user_items WHERE user_id=$user_id AND item_id=$item_id";
  $status = mysqli_query($connection, $query) or die('unable to remove!!!');
  header("Location: /cart.php");
 ?>
