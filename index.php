<?php
  require 'includes/dbconnect.php';
  if (isset($_SESSION['email'])) {
    header("Location: ");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Home</title>
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
      <div id="banner" class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div id="banner_content" class="jumbotron">
              <h1>We sell lifestyle.</h1>
              <p class="lead">Flat 40% OFF on premium brands</p><br>
              <p class="lead">
                <a class="btn btn-info btn-lg" href="product.php" role="button"><strong>Shop Now!</strong></a>
              </p>
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
