
<?php
 require_once "./database_functions.php";
 $conn = db_connect();

if(isset($_GET['name'])){
		$name = $_GET['name'];
		$query = "DELETE FROM contact WHERE name = '$name'";
		$result = mysqli_query($conn, $query);
	    if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	    }
	    header("Location: messages.php");
	}
?>