<?php
  session_start();
  $book_isbn = $_GET['bookisbn'];
  // connecto database
  require_once "./database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }

  $title = $row['book_title'];
  require "./header.php";
?>
      <!-- Example row of columns -->
      <div class="container mt-5">
      <div class="row">
        <div class="col-md-5 mt-5 text-center">
          <img class="img-responsive img-thumbnail w-75" src="./images/<?php echo $row['book_image']; ?>">
        </div>
        <div class="col-md-6 mt-5">
          <h2 class="text-black">Book Description</h2>
          <p><?php echo $row['book_descr']; ?></p>
          <h2 class="text-black">Book Details</h2>
          <table class="table">
            <?php foreach($row as $key => $value){
              if($key == "book_descr" || $key == "book_image" || $key == "publisherid" || $key == "book_title"){
                continue;
              }
              switch($key){
                case "book_isbn":
                  $key = "ISBN";
                  break;
                case "book_title":
                  $key = "Title";
                  break;
                case "book_author":
                  $key = "Author";
                  break;
                case "book_price":
                  $key = "Price";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="bookisbn" value="<?php echo $book_isbn;?>">
            <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-secondary ">
          </form>
        </div>
      </div>
    </div>
<?php
  require "./footer.php";
?>