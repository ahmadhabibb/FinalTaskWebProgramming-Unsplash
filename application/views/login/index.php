<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | Unsplash</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styleLogin.css">
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon-black.ico">
</head>
<body>
				<!-- -------------------- FLASH DATA -------------------- -->
				<?php if ($this->session->flashdata('flash')) : ?>
    				<div class="row text-center fixed-top">
        				<div class="col-md-12">
							<div class="alert alert-dismissible fade show" role="alert"
							style="background-color: #E36447; padding: 15px; margin:0; color:white;">
							    <?= $this->session->flashdata('flash'); ?>.
                				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    				<span aria-hidden="true">&times;</span>
                				</button>
            				</div>
        				</div>
    				</div>
    			<?php endif; ?>
				<!-- -------------------- FLASH DATA -------------------- -->
<div class="container text-center">
	<div id="row">
		<!-- <div class="col-sm-2"></div> -->
		<div class="col-sm-8 col-md-6 center-block">
			<img class="logo-header" src="<?php echo base_url();?>/assets/img/logo-black.svg" alt="logo"/>
			<h1>Login</h1>
			<h4>Welcome back.</h4>
			<button class="btn btn-fb form-control" type="submit"><img src="<?php echo base_url();?>/assets/img/facebook-logo.svg" style="width: 18px; margin: 0 10px 0 0; ">Login with Facebook</button><br>
			<span style="font-size: 12px;">OR</span>
			<form action="" method="POST">
				<div class="form-group text-left">
					<label for="email">Email Address</label><br>
					<input type="text" class="form-control" name="email">
				</div>
				<div class="form-group text-left">
					<label for="pw">Password <a href="#">Forgot ?</a></label><br>
					<input type="password" class="form-control" name="password">
				</div>
				<button class="btn btn-dark form-control" type="submit">Login</button><br>
				<span>Don't have an account? <a href="<?php echo base_url();?>/join">Join</a></span>
			</form>
		</div>
		<!-- <div class="col-sm-2"></div> -->
	</div>
</div>
</body>
</html>