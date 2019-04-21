<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Join Unsplash | Unsplash</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styleJoin.css">
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
<div class="left-content">
	<div id="row">
		<!-- <img src="assets/img/img-register.jpg" alt="Img Login"> -->
			<div class="sheet sheet--inverse registrations_left-panel" style="background-image: url(assets/img/img-register.jpg);">
				<div class="content" style="background-color: rgba(0,0,0,0.5);">
					<div>
						<img class="logo" src="assets/img/logo-white.svg" />
					</div>
				  	<div>
					  	<h1 class="title">Creation starts here</h1>
					  	<h2 class="sub-title">Access 918,646 free, high-resolution photos you can’t<br> find anywhere else</h2>
				  	</div>
					<div>
					  	<p class="credit">Uploaded 4 months ago by Dani Rendina</p>
					</div>
				</div> <!-- .content -->
			</div> <!-- close .left-panel -->

			<div class="registrations_right-panel">
      			<div class="registrations_spacer"></div>
        			<div class="login-form qa-primary-join-form">
          				<div class="row">
  							<div class="col-xs-12 col-md-12">
    							<div class="text-center sheet--padding-bottom">
      								<h4>Join Unsplash</h4>
      								<p>Already have an account? <a rel="nofollow" href="<?php echo base_url();?>login">Login</a></p>
    							</div>
      							<div class="form-group">
									<button class="btn btn-fb form-control" type="submit"><img src="<?php echo base_url();?>/assets/img/facebook-logo.svg" style="width: 18px; margin: 0 10px 0 0; ">Login with Facebook</button><br>
								</div>
      							<div class="form-separator text-center" style="margin-bottom:20px;">
        							<span style="font-size: 12px;">OR</span>
      							</div> <!-- close .form-separator -->
    							<div class="form">
									  <form action=""method="post">
        								<div class="row">
          									<div class="col-xs-6 col-md-6">
            									<div class="form-group">
              										<label for="user_first_name">First name</label>
              										<input autofocus="autofocus" class="form-control" type="text" name="first_name" id="first_name" />
													<small class="form-text text-danger"><?= form_error('first_name') ?>.</small>
												</div> <!-- close .form-group -->
          									</div> <!-- close .col -->

          									<div class="col-xs-6 col-md-6">
            									<div class="form-group">
              										<label for="user_last_name">Last name</label>
              										<input class="form-control" type="text" name="last_name" id="last_name" />
              
            									</div> <!-- close .form-group -->
          									</div> <!-- close .col -->
        								</div> <!-- close .row -->
        								<div class="form-group">
          									<label for="user_email">Email address</label>
          									<input class="form-control" type="email" name="email" id="email" />
        								</div> <!-- close .form-group -->
        							<div class="form-group">
         								 <label for="user_username">
            								Username <span class="text-secondary">(only letters, numbers, and underscores)</span>
										</label>
          								<input class="form-control" type="text" name="username" id="username" />
        							</div> <!-- close .form-group -->

        							<div class="form-group">
          								<label for="user_password">Password <span class="text-secondary">(min. 6 char)</span></label>
         								<input autocomplete="off" minlength="6" class="form-control" type="password" name="password" id="password" />
									</div> <!-- close .form-group -->
									<button type="submit" name="add" class="btn btn-dark form-control">Join</button>
        							<div class="form-group text-center">
          								<p class="text-secondary zeta">By joining, you agree to the <a href="/terms">Terms</a> and <a href="/privacy">Privacy Policy</a>.</p>
        							</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>