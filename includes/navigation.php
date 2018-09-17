<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><strong>Lifestyle Store</strong></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navi" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <?php
          if (isset($_SESSION['email'])){
         ?>
         <li><a href="../cart.php"><strong> <span class="glyphicon glyphicon-shopping-cart"></span>  Cart</strong></a></li>
         <li><a href="../settings.php"><strong> <span class="glyphicon glyphicon-cog"></span>  Settings</strong></a></li>
         <li><a href="includes/logout_script.php"><strong> <span class="glyphicon glyphicon-log-out"></span>  Logout</strong></a></li>
        <?php
          }else {
         ?>
         <li><a href="../login.php"><strong> <span class="glyphicon glyphicon-log-in"></span>  Login</strong></a></li>
         <li><a href="../signup.php"><strong> <span class="glyphicon glyphicon-user"></span>  Signup</strong></a></li>
        <?php
          }
         ?>
      </ul>
    </div>
  </div>
</nav>
