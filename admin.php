<?php
	$title = "Administration section";
	require_once "./header.php";
?>
<div class=" py-3">
	<div class="container " >
		<div class="col-md-6 mb-5 mb-md-0 mt-5">
		<h2 class="h3 mb-3 text-black">Admin Page</h2>
		<div class="p-3 p-lg-5 border text-black">

	<form class="form-horizontal" method="post" action="admin_verify.php">
		
		<div class="form-group">
			<label for="name" class="control-label col-md-4 ">Name</label>
			<div class="col-md-18">
				<input type="text" name="name" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label for="pass" class="control-label col-md-4 ">Password</label>
			<div class="col-md-18">
				<input type="password" name="pass" class="form-control">
			</div>
		</div>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary ">
	</form>
</div>
</div>
</div>
</div>

<?php
	require_once "./footer.php";
?>