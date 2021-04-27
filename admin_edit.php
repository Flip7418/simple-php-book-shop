<?php
	session_start();
	
	$title = "Edit book";
	require_once "./header.php";
	require_once "./database_functions.php";
	$conn = db_connect();

	if(isset($_GET['bookisbn'])){
		$book_isbn = $_GET['bookisbn'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($book_isbn)){
		echo "Empty isbn! check again!";
		exit;
	}

	// get book data
	$query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
<div class="bg-light py-3">
	<div class="container " >
		<div class=" py-3">
      
        <div class="row">
          <div class="col-md-12 mb-0 "><a class="text-dark h5" href="admin_book.php">Admin Page</a> <span class="mx-2 mb-0">/</span> <strong class="text-black h5"> <?php echo $title; ?></strong></div>
        </div>
      </div>
    
		<div class="col-md-6 mb-5 mb-md-0 mt-2">
		<h2 class="h3 mb-3 text-black">Editing Book</h2>
		<div class="p-3 p-lg-5 border text-black">

	<form method="post" action="edit_book.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ISBN</th>
				<td><input type="text" name="isbn" value="<?php echo $row['book_isbn'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" value="<?php echo $row['book_title'];?>" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" value="<?php echo $row['book_author'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"><?php echo $row['book_descr'];?></textarea>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" value="<?php echo $row['book_price'];?>" required></td>
			</tr>
			<tr>
				<th>Publisher</th>
				<td><input type="text" name="publisher" value="<?php echo getPubName($conn, $row['publisherid']); ?>" required></td>
			</tr>
		</table>
		<input type="submit" name="save_change" value="Change" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
		
		<a href="admin_book.php" ><button type="Confirm" class="btn btn-success">Confirm</button></a>
	</form>
	
	
</div>
</div>
</div>
</div>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require "./footer.php"
?>