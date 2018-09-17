<?php
  require 'includes/dbconnect.php';
  if (!isset($_SESSION['email'])) {
    header("Location: /index.php");
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title>Lifestyle Store | Success</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="css/style.css"/>
   </head>

   <body>
     <?php
       require 'includes/navigation.php';
      ?>
    <main>
      <?php
        $id = $_GET['id'];
        $user_id = $_SESSION['id'];
        foreach ($id as $value) {
          $query = "UPDATE user_items SET status='Confirmed' WHERE item_id='$value' AND user_id='$user_id'";
          $status = mysqli_query($connection,$query) or die('unable to confirm!!!');
        }
      ?>
      <div class="container">
        <div class="jumbotron">
          <h1 class="display-3">Thankyou!</h1>
          <p class="lead">Your order is confirmed. Thank you for shopping with us.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="product.php" role="button">shop more..</a>
          </p>
        </div>
      </div>
    </main>
     <?php
       require 'includes/footer.php';
      ?>
   </body>
 </html>
