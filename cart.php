<?php
  require 'includes/dbconnect.php';
  if (!isset($_SESSION['email'])) {
    header("Location: /login.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Cart</title>
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
            <table class="table">
              <thead>
                <tr>
                  <th>Item Number</th>
                  <th>Item Name</th>
                  <th>Price</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $user_id = $_SESSION['id'];
                  $query = "SELECT * FROM user_items INNER JOIN items ON user_items.item_id = items.id WHERE status='Added to cart' AND user_id='$user_id'";
                  $result = mysqli_query($connection, $query) or die("can't fetch!!!");
                  if (mysqli_num_rows($result) < 1) {  ?>
                    <tr>
                      <td>&nbsp;</td>
                      <td>Add items to the cart first!</td>
                      <td>&nbsp;</td>
                      <td><a class="btn btn-primary" href="product.php">Go to products page!</a></td>
                    </tr>
                  <?php } else {
                      $price = 0;
                      $item_num = 1;
                      $url = "success.php?";
                      while ($row = mysqli_fetch_array($result)) {
                        $price = $price + $row['price'];
                        $rem_link = "includes/cart-remove.php?id=".$row['item_id'];
                        $url = $url."id[]=".$row['item_id']."&"; ?>
                        <tr>
                          <td><?php echo $item_num;?></td>
                          <td><?php echo $row['name'];?></td>
                          <td>Rs <?php echo $row['price'];?>.00/-</td>
                          <td><a class="btn btn-primary" href="<?php echo $rem_link;?>">Remove</a></td>
                        </tr>
                      <?php $item_num++;
                        }  ?>
                        <tr>
                          <td>&nbsp;</td>
                          <td>Total</td>
                          <td>Rs <?php echo $price;?>.00/-</td>
                          <td><a class="btn btn-primary" href="<?php echo $url;?>">Confirm Order</a></td>
                        </tr>
                    <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
