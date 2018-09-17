<?php
  require 'includes/dbconnect.php';
  if (isset($_SESSION['email'])) {
    header("Location: product.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Login</title>
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
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 login_form_container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">LOGIN</h3>
              </div>
              <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form action="includes/login_script.php" method="post">
                  <div class="form-group <?php if($_GET['err'] == "no_user"){echo "has-warning";}?>">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group <?php if($_GET['err'] == "no_pass"){echo "has-error";}?>">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                  <button type="submit" name="button" class="btn btn-primary">Login</button>
                </form>
              </div>
              <div class="panel-footer">
                <p class="text-info">Don't have an account? <a href="signup.php"><b class="text-primary">Register</b></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
