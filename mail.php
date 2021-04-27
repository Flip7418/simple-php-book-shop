<?php
	session_start();

	require_once "./database_functions.php";
	// print out header here
	$title = "Purchase Process";
	require "./header.php";
	// connect database
	$conn = db_connect();
	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['text'];
	$date= date("Y-m-d");

	

	$query = "INSERT INTO contact VALUES ('$name', '$email', '$text','$date')";
	$result = mysqli_query($conn, $query);
	

    session_unset();
?>
 <div class="container">
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-success"></span>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">Your message was successfuly sended.</p>
            <p><a href="books.php" class="btn btn-sm height-auto px-4 py-3 btn-primary">Back to shop</a></p>
          </div>
        </div>
      </div>

      <?php
	if(isset($conn)){
		mysqli_close($conn);
	}
	require_once "./footer.php";
?>
    

    