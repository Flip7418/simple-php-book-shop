<?php
  $title = "Contact";
  require_once "./header.php";
?>
<form method="post" action="mail.php">
<div class="container">
    <div class="row">
       
        	<div class="col-md-6  align-self-end mb-5">
            <img src="images/mail.png" alt="Image" class="img-fluid">
          </div>
        
		<div class="col-md-6 text-center mt-5">
			<form class="form-horizontal">
			  	<fieldset>
				    <div class="col-md-12">
                    <h2 class="h3 mb-3 mt-5 text-black">Get In Touch</h2>
                    </div>
				    <p class="lead">I’d love to hear from you! Complete the form to send me an email.</p>
				    <div class="form-group">
				      	
				      	<div class="col-lg-15">
				        	<input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
				      	</div>
				    </div>
				    <div class="form-group">
				      
				      	<div class="col-lg-15">
				        	<input type="text" class="form-control" name="email" placeholder="Email">
				      	</div>
				    </div>
				    <div class="form-group">
				      	
				      	<div class="col-lg-15">
				        	<textarea class="form-control" rows="3" name="text" ></textarea>
				        	
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-15 col-lg-offset-2 ">
				        	<button type="reset" class="btn btn-default m-3 pl-4 pr-4 ">Cancel</button>
				        	<button type="submit" class="btn btn-secondary m-3 pl-4 pr-4">Sumbmit</button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
</div>
</form>
<?php
  require_once "./footer.php";
?>