<!-- connect file -->
<?php
include('../includes/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shope-Checkout page</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


   <!-- css file -->
   <link rel="stylesheet" href="style.css">
   <style>
    .logo{
      width:7%;
      height:7;
    }
   </style>
</head>
<body>
    <!-- navbar -->
    <div class="container-fluid p-0">
         <!-- first child -->
         <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img src="./images/d.png" alt="" class="logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_registration.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_all.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
        
    </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    <div>
  </div>
</nav>
<!-- second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar-nav me-auto">
      <?php
       if(!isset($_SESSION['username'])){
        echo " <li class='nav-item'>
         <a class='nav-link' href='#'>Welcome Guest</a>
       </li>";
       } else{
         echo "  <li class='nav-item'>
         <a class='nav-link' href='#'>Welcome ".$_SESSION['username']."</a>
       </li>";
       }
      if(!isset($_SESSION['username'])){
        echo "  <li class='nav-item'>
        <a class='nav-link' href='./user_login.php'>Logout</a>
      </li>";
      } else{
        echo "  <li class='nav-item'>
        <a class='nav-link' href='logout.php'>Login</a>
      </li>";
      }
      
      ?>
  
  </ul>
</nav>
<!-- third child -->
<div class="bg-light">
  <h3 class="text-center">J K TRADING</h3>
  <p class="text-center">Deals are in mobile phones of all brand</p>
</div>

<!-- forth child -->
<div class="row px-1">
  <div class="col-md-12"> 
    <!-- produtes -->
      <div class="row">
        <?php
      if(!isset($_SESSION['username'])){
        include('user_login.php');
      }else{
        include('payment.php');

      }
      ?>

</div>
<!-- col end-->
    
  </div>
</div>

  
  
<!-- last child --> 
<!-- include footer -->
<?php include("../includes/footer.php") ?>
  
</div>

  
  
          
<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>