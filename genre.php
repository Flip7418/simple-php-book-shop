<?php
	session_start();
	$count = 0;
	require_once "./database_functions.php";
	// get pubid
	if(isset($_GET['book_genre'])){
		$genre = $_GET['book_genre'];
	} else {
		echo "Wrong query! Check again!";
		exit;
	}
    
  
  
  
 if ($genre!='all'){
    $query = "SELECT book_isbn, book_image,book_title,book_price FROM books WHERE book_genre ='$genre' ";
  }
  if ($genre=='all'){
    $query = "SELECT book_isbn, book_image,book_title,book_price FROM books ";
  }
	$conn = db_connect();
	
	

	
	
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty books ! Please wait until new books coming!";
		exit;
	}

require "./header.php";
$title = "Books Of genres";
?>
	<div class="site-section m-5">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">

            

      
            <div class="row">

 <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>


      <div class="container mb-5 mt-3">
      <div class="row">
        <?php while($query_row = mysqli_fetch_assoc($result)){
        	
        ?>
          <div class="col-lg-6 col-md-6 item-entry mb-3" style="margin-bottom: 50px">
            <a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>">
              <img class="img-responsive img-thumbnail w-75" src="./images/<?php echo $query_row['book_image']; ?>">
            </a>
           <h4 class="item-title " ><a href="book.php?bookisbn=<?php echo $query_row['book_isbn']; ?>" class="text-muted"><?php echo $query_row['book_title'];?></a></h4>
                <strong class="item-price">$<?php echo $query_row['book_price']; ?></strong>
          </div>
        <?php
          $count++;
          if($count >= 2){
              $count = 0;
              break;
            }
          } ?> 
      </div>
    </div>
<?php
      }
  
?>
</div>

</div>
 <?php
    require_once "./category.php";
    ?>

      </div>
    </div>


    <?php
    require_once "./footer.php";
    ?>