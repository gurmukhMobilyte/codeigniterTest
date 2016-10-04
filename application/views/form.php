<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Example</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.brighttheme.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	.form-group .error
    	{
    		color: #ff0800;
    	}
    	.hide_custom
    	{
    		display: none;
    	}
    </style>
  </head>
  <body>
    <div class="row">
	  <div class="col-md-4 col-md-offset-4">
	  		
	  	<form name="test_form" id="test_form" action="<?php echo base_url(); ?>" method="POST">
	  		<h2>Form Example</h2>
	  		<div class="alert alert-success hide_custom"></div>
			<div class="alert alert-danger hide_custom"></div>

			<div class="form-group">
				<label for="email">Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="pwd">Date of Birth:</label>
				<input type="text" class="form-control" id="dob" name="dob">
			</div>
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="text" class="form-control" id="email" name="email">
			</div>
			<div class="form-group">
				<label for="email">Favorite Color:</label>
				<input type="color" class="form-control" id="favorite_color" name="favorite_color">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	  </div>
	  
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.1/jquery.validate.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script> 
	<script src="<?php echo base_url('includes/app.js'); ?>"></script> 
  </body>
</html>