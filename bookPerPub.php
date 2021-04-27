<?php
	session_start();
	require_once "./database_functions.php";
	// get pubid
	if(isset($_GET['pubid'])){
		$pubid = $_GET['pubid'];
	} else {
		echo "Wrong query! Check again!";
		exit;
	}

	// connect database
	$conn = db_connect();
	$pubName = getPubName($conn, $pubid);

	$query = "SELECT book_isbn, book_title, book_image FROM books WHERE publisherid = '$pubid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty books ! Please wait until new books coming!";
		exit;
	}

	$title = "Books Per Publisher";
	require "./header.php";
?>
 <div class=" py-3">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-12 mb-0 "><a class="text-dark h5" href="publisher_list.php">Publishers</a> <span class="mx-2 mb-0">/</span> <strong class="text-black h5"> <?php echo $pubName; ?></strong></div>
        </div>
      </div>
    </div>
	
	<?php while($row = mysqli_fetch_assoc($result)){
?>
	<div class="container mt-5">
	<div class="row">
		<div class="col-md-3">
			<img class="img-responsive img-thumbnail" src="./images/<?php echo $row['book_image'];?>">
		</div>
		<div class="col-md-7">
			<h4 class="text-black"><?php echo $row['book_title'];?></h4>
			<a href="book.php?bookisbn=<?php echo $row['book_isbn'];?>" class="btn btn-secondary">Get Details</a>
		</div>
	</div>
</div>
	<br>
<?php
	}
	if(isset($conn)) { mysqli_close($conn);}
	require "./footer.php";
?>