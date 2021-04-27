<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./header.php";
  require_once "./database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
  ?>
  
 <div class="container mt-5 ">
  <div class="row">
      
   <div class=" col-md-4 text-center mb-5" >
       <img src="images/delivery.png" class="mb-4" style="margin-top:11%;" alt="">
       
        <h2>Free shipping </h2>
        <h5>On orders over $30 in USA</h5>
    </div>
   <div class="col-md-4 text-center mb-5 ">
       <img src="images/coin.png" class="mb-4 mt-2" alt="">
       
        <h2>Free shipping </h2>
        <h5>On orders over $30 in USA</h5>
        </div>
        <div class="col-md-4 text-center mb-5">
       <img src="images/chat.png" class="mb-4" alt="">
       
        <h2>Free shipping </h2>
        <h5>On orders over $30 in USA</h5>
        </div>
  </div>
</div>



 

      <div class="container ">
      
          <div class="title-section mb-5 mt-5 ">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
      <div class="row">
        <?php foreach($row as $book) { ?>
        <div class="col-md-3">
          <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./images/<?php echo $book['book_image']; ?>">
          </a>
        </div>
        <?php } ?>
      </div>
    </div>


        <!-- Wrapper for carousel items -->
        
  <div class=" container title-section mb-5 mt-5 ">
            <h2 class="text-uppercase">Consumer reviews</h2>
          </div>
    </div>
  </div>
  <div class="container">
    <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4">
                 <p>"Design quality is minimalist, sleek, and clean. On top of all that, customer support is beyond amazing.<br> I've seriously never had such amazing customer support before."</p>
                 <p><font style="color:#fcd000; font-size:14px; text-transform: uppercase; font-weight: bold; font-style:italic">JESSEQLI</font></p>
            </div>
            <div class="carousel-item text-center p-4">
                
                                 <p>"Very nice theme,it adapts to whatever you need and has a great design. Do not hesitate to buy it. <br>Quality and efficient technical support."</p>
                 <p><font style="color:#fcd000; font-size:14px; text-transform: uppercase; font-weight: bold; font-style:italic">ALEXGL</font></p>
            </div>
        </div>
        <a class="carousel-control-prev"   href="#carouselContent" role="button" data-slide="prev">
            <button type="button" class="btn btn-light"><</button>
            <span class="sr-only"  >Previous</span>
        </a>
        <a class="carousel-control-next"   href="#carouselContent" role="button" data-slide="next">
            <button type="button" class="btn btn-light">></button>
            <span class="sr-only"  >Next</span>
        </a>
    </div>
</div>
    <?php
    require_once "./footer.php";
    ?>
   

   









     
    
   