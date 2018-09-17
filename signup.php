<?php
  require 'includes/dbconnect.php';
  if (isset($_SESSION['email'])) {
    header("Location:/product.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Sign Up</title>
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
      <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 form_container">
              <h2>SIGN UP</h2>
              <form  action="includes/signup_script.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group <?php if($_GET['err'] == "already_exist"){echo "has-warning";}?>">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="contact" pattern="^[0-9]{10}$" placeholder="Contact" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="city" placeholder="City">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="address" placeholder="Address">
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </form>
            </div>
          </div>
      </div>
    </main>
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
