<?php
  require 'includes/dbconnect.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Products</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>

  <body>
    <!--    navigation bar   -->
    <?php
      require 'includes/navigation.php';
      require 'includes/check_if_added.php';
     ?>

    <!--       main body      -->
    <main>
      <div class="container">
        <div class="jumbotron">
          <h1>Welcome to our Lifestyle Store!</h1>
          <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div> <!--jumbotron-->
        <div class="row text-center">
          <?php
            $query_text = "SELECT * FROM items";
            $result = mysqli_query($connection,$query_text) or die(mysqli_error($result));
            while ($row = mysqli_fetch_array($result) ) { ?>
              <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                  <img src="images/<?php echo $row['image']?>" alt="<?php echo $row['image']?>"/>
                  <div class="caption">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>price <?php echo $row['price']; ?>.00</p>
                    <?php
                      if (isset($_SESSION['email'])) {
                        if (check_if_added_to_cart($row['id'])) { ?>
                          <a class="btn btn-default btn-block disabled" href="#">Added to cart</a>
                        <?php } else {
                          $add = "includes/cart-add.php?id=".$row['id']; ?>
                          <a class="btn btn-primary btn-block" href="<?php echo $add;?>">Add to cart</a>
                        <?php }
                          } else { ?>
                        <a class="btn btn-primary btn-block" href="login.php">Buy Now</a>
                      <?php
                        }  ?>
                  </div>
                </div>
              </div><!-- column -->
          <?php
            }  ?>
        </div><!--row -->
      </div><!-- container -->
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
