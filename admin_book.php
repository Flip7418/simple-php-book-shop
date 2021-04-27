<?php
	session_start();
	
	$title = "List book";
	require_once "./header.php";
	require_once "./database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	<div class="container text-black mt-5">
		<a href="admin_add.php" ><button type="Add" name="add" class="btn btn-secondary">Add Book</button></a>
		<a href="messages.php" ><button name="messages" class="btn btn-warning">Messages</button></a>
		<a href="admin_signout.php" ><button type="Sign Out" class="btn btn-primary">Sign out</button></a>
		
	
	<table class="table mt-5" >
		<thead>
		<tr>
			<th scope="col">ISBN</th>
			<th scope="col">Title</th>
			<th scope="col">Author</th>
			<th scope="col">Image</th>
			<th scope="col">Description</th>
			<th scope="col">Price</th>
			<th scope="col">Publisher</th>
			<th scope="col">&nbsp;</th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
	 <tbody>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<th scope="row"><?php echo $row['book_isbn']; ?></th>
			<td><?php echo $row['book_title']; ?></td>
			<td><?php echo $row['book_author']; ?></td>
			<td><?php echo $row['book_image']; ?></td>
			<td><?php echo $row['book_descr']; ?></td>
			<td><?php echo $row['book_price']; ?></td>
			<td><?php echo getPubName($conn, $row['publisherid']); ?></td>
			<td><a href="admin_edit.php?bookisbn=<?php echo $row['book_isbn']; ?>"><button type="button" class="btn btn-success">Edit</button></a></td>
			<td><a href="admin_delete.php?bookisbn=<?php echo $row['book_isbn']; ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>


		</tr>
		<?php } ?>
	</tbody>
	</table>
</div>


<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./footer.php";
?>