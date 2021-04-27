<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&family=Satisfy&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
    
    <style>
      .carousel-control-next-icon,
.carousel-control-prev-icon {
  background-image: none;
  color: red;
  font-size: 20px;
}


</style>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg py-3 navbar-light bg-light  shadow-sm ">
  <div class="container">
    <a href="index.php" class="navbar-brand">
      <span class="text-uppercase font-weight-bold border border-dark shadow p-2 mb-5 bg-white rounded">Phoenix</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item "><a href="index.php" class="nav-link"><i class="icon-home" aria-hidden="true"></i> Home</a></li>
        <li class="nav-item"><a href="books.php" class="nav-link"><i class="icon-book" aria-hidden="true"></i> Books</a></li>
       <li class="nav-item"><a href="cart.php" class="nav-link"><i class="icon-shopping-cart" aria-hidden="true"></i> Cart</a></li>
        <li class="nav-item"><a href="publisher_list.php" class="nav-link"><i class="icon-face" aria-hidden="true"></i> Publisher</a></li>
        <li class="nav-item"><a href="contact.php" class="nav-link"><i class="icon-envelope-o" aria-hidden="true"></i> Contact</a></li>
         <li class="nav-item"><a href="admin.php" class="nav-link"><i class="icon-github-alt" aria-hidden="true"></i> Admin Page</a></li>
        
      </ul>
    </div>
  </div>
</nav>
 
<?php if(isset($title) && $title == "Index") { ?>
<div class="container " style="margin-top:5%;">
        <div class="row mt-5">
          <div class="col-md-6 ml-auto order-md-2 mt-5">
            <div class="site-block-cover-content">
              <div class="container text-center " style="margin-top:10%;" >
            <h2 style="font-family: 'Satisfy', cursive;">#For book lovers</h2>
            <h1 style="font-family: 'Bitter', serif; ">Meet Your Next Favorite Book</h1>
            <br>
            <p><a href="books.php" class="btn btn-dark btn-lg ">Purchase</a></p>
            </div>
          </div>
          </div>
          <div class="col-md-4 order-1 align-self-end mb-5">
            <img src="images/books.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
      <?php } ?>