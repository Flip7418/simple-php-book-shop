<?php
	// the shopping cart needs sessions, to start one
	/*
		Array of session(
			cart => array (
				book_isbn (get from $_GET['book_isbn']) => number of books
			),
			items => 0,
			total_price => '0.00'
		)
	*/
	session_start();
	require_once "./database_functions.php";
	// print out header here
	$title = "Checking out";
	require "./header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
?>
    
	<form method="post" action="purchase.php" class="form-horizontal">
		<?php if(isset($_SESSION['err']) and $_SESSION['err'] == 1){ ?>
			<p class="text-danger">All fields have to be filled</p>
			<?php } ?>

		<div class=" py-3">
	<div class="container " >
		<div class="col-md-6 mb-5 mb-md-0 mt-5">
            <h2 class="h3 mb-3 text-black">Basic Information</h2>
            <p class="lead">Please press Purchase to confirm your purchase, or Continue Shopping to add or remove items.</p>
            <div class="p-3 p-lg-5 border bg-light text-black">
		<div class="form-group " >
			<label for="name" class="control-label col-md-4">Name</label>
			<div class="col-md-4">
				<input type="text" name="name" class="col-md-20" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="address" class="control-label col-md-4">Address</label>
			<div class="col-md-4">
				<input type="text" name="address" class="col-md-20" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="city" class="control-label col-md-4">City</label>
			<div class="col-md-4">
				<input type="text" name="city" class="col-md-20" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="zip_code" class="control-label col-md-4">Zip Code</label>
			<div class="col-md-4">
				<input type="text" name="zip_code" class="col-md-20" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="country" class="control-label col-md-4">Country</label>
			<div class="col-md-4">
				<input type="text" name="country" class="col-md-20" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Purchase" class="btn btn-secondary ml-3">
		</div>
	</div>
</div>
</div>
</div>



	</form>
	
	






<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some books in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./footer.php";
?>