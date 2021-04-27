<?php
	session_start();
	require_once "./database_functions.php";
	$conn = db_connect();

	$query = "SELECT * FROM publisher ORDER BY publisherid";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	if(mysqli_num_rows($result) == 0){
		echo "Empty publisher ! Something wrong! check again";
		exit;
	}

	$title = "List Of Publishers";
	require "./header.php";
?>
<div class="container">
	<div class="title-section mb-5 mt-5 " >
      <h2 class="text-uppercase">Publisher list</h2>
  </div>

  <ul class="list-group ">
  	<?php 
		while($row = mysqli_fetch_assoc($result)){
			$count = 0; 
			$query = "SELECT publisherid FROM books";
			$result2 = mysqli_query($conn, $query);
			if(!$result2){
				echo "Can't retrieve data " . mysqli_error($conn);
				exit;
			}
			while ($pubInBook = mysqli_fetch_assoc($result2)){
				if($pubInBook['publisherid'] == $row['publisherid']){
					$count++;
				}
			}
	?>
  <li class="list-group-item d-flex justify-content-between align-items-center ">
    <a class="text-dark" href="bookPerPub.php?pubid=<?php echo $row['publisherid']; ?>"><?php echo $row['publisher_name']; ?></a>
    <span class="badge badge-secondary badge-pill"><?php echo $count; ?></span>
  </li>
  <?php } ?>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    <a class="text-dark" href="books.php">List full of books</a>
  </li>
</ul>



</div>
<?php
	mysqli_close($conn);
	require ".//footer.php";
?>