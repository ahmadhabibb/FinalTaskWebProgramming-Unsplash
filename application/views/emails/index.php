<!DOCTYPE html>
<html>
<head>
	<title>Email Settings | Unsplash</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/cssemail.css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon-black.ico">
</head>


<body>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------- -->
		<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 fixed-top" style="display: -webkit-inline-box; padding-top: 10px; background-color: white;">
                    <img class="logo-header" src="<?php echo base_url(); ?>/assets/img/logo-black.svg" alt="logo" style="padding-top:5px;"/>
                <div class="col-lg-8">
                    <!-- <input type="text" placeholder="Search free high-resolution photos" class="form-control" name="search"
                    style=" padding-left:30px; 
                            margin: 0; 
                            padding-top: 10px;
                            padding-bottom: 10px; 
                            padding-right: 0; 
                            border-radius:25px;
                            font-size: 14px;
                            height: 40px;
                            width: 1270px;"> -->
                </div>
                <div class="col-sm-2" style="margin:0; padding:0; max-width: 350px;">
                    <ul style="padding-left:15px; display: inline-flex;" class="menu">
                    <li><a href="<?php base_url(); ?>welcome">Home</a></li>
                        <li><a href="<?php base_url(); ?>collection">Collections</a></li>
                        <li><a href="<?php base_url(); ?>explore">Explore</a></li>
                    </ul>
                    <button class="fas fa-ellipsis-h btn" type="button" data-toggle="dropdown" style="margin-left:10px;"></button>
                    <ul class="dropdown-menu" style="background-color: black;">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Wallpapers</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Made with Unsplash</a></li>
                        <li><a href="#">API/Developers</a></li>
                        <li><a href="#">Hiring</a></li>
                        <li><a href="#">Licence</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-lg-2" style="display: inline;">
                    <button style="margin-left:10px;" class="submitPhoto btn btn-light" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Submit a Photo</button>
                    <button style="margin-left:10px;" class="fas fa-bell btn" style="color: #ADADAD;"></button>
                    <?php foreach($userPhoto as $photo) { ?>
                        <a href="<?php echo base_url();?>account"><img src="<?php echo base_url('assets/photoProfile/') . $photo['photo']; ?>" width="40px" style="border-radius:25px;"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->
		<div class="wrapper">
			<div class="container">
		  		<div class="sheet sheet--padding">
		    		<div class="row">
		        		<div class="col-xs-12 col-sm-4 col-md-3" style="margin-top: 100px;">
                    		<ul id="menu">
                        		<h4>Account Settings</h4>
                        			    <li><a href="<?php echo base_url(); ?>edit">Edit Profile</li>
                        				<li><a href="#">Manage Photos</a></li>
                        				<li class="active"><a href="#">Email Settings</a></li>
                        				<li><a href="#">Change Password</a></li>
                        				<li><a href="#">Connect Accounts</a></li>
                        				<li><a href="#">Applications</a></li>
                        				<li><a href="#">Close Account</a></li>   
                   			</ul>
                		</div>

					    <div class="col-xs-12 col-sm-8 col-md-9" style="margin-top: 130px;">
					        <h1 class="margin-bottom--small delta text-weight--bold" style="margin-bottom: 30px;
								font-size: 18px;
								font-family: Helvetica;
								font-weight: 700;
								letter-spacing: 0.5px;">Email Settings</h1>
        						<p>Send me emails related to:</p>

				        <div class="form">
				            <form class="edit_user" method="post">
				            	<input name="utf8" type="hidden" value="✓">
				            	

				            	<div class="form-group">				                
				                    <div class="checkbox" style="margin-bottom: 5px;">
				                    	<label>
				                        	<input type="hidden" value="0">
				                        	<input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Announcements</label>
                                    </div> <!-- close .checkbox -->

			

				                    <div class="checkbox" style="margin-bottom: 5px;">
				                    	<label>
				                        	<input type="hidden" value="0">
				                        	<input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Community Updates</label>                    
				                    </div> <!-- close .checkbox -->
									

				                    <div class="checkbox" style="margin-bottom: 5px;">
				                    	<label>
				                        	<input type="hidden" value="0">
				                        	<input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Curated Collections
										</label>                    
									</div> <!-- close .checkbox -->
									

				                    <div class="checkbox" style="margin-bottom: 5px;">
				                        <label>
				                        	<input type="hidden" value="0">
				                        	<input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Events Near Me
										</label>                    
									</div> <!-- close .checkbox -->
									

				                    <div class="checkbox" style="margin-bottom: 5px;">
				                        <label>
				                        	<input type="hidden" value="0">
				                        	<input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Feedback &amp; Surveys
										</label>                    
									</div> <!-- close .checkbox -->
									

				                    <div class="checkbox" style="margin-bottom: 5px;">
				                        <label>
				                            <input type="hidden" value="0">
				                            <input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Milestones and Notifications
										</label>                    
									</div> <!-- close .checkbox -->
									

				                    <div class="checkbox" style="margin-bottom: 5px;">
				                        <label>
				                            <input type="hidden" value="0">
				                            <input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Recommended Photos, Collections, &amp; Photographers
										</label>                    
									</div> <!-- close .checkbox -->
									

				                    <div class="checkbox" style="margin-bottom: 5px;">
				                        <label>
				                            <input type="hidden" value="0">
				                            <input type="checkbox" value="1" checked="checked" style="margin-right: 5px;">Resources, Tips, &amp; Guides
										</label>                    
									</div> <!-- close .checkbox -->
									            
								</div> <!-- close .form-group -->
          						<div class="form-group">
            						<input type="submit" name="commit" value="Update email settings" class="btn btn-dark btn-block-level" data-disable-with="···" style="width: 110%;">
          						</div>
							</form>
        					<a class="unsub" rel="nofollow" href="">Unsubscribe from all</a>
        					<p></p>
      					</div> <!-- close .form -->
   				 	</div> <!-- close .row -->
  				</div> <!-- close .sheet -->
			</div> <!-- close .container -->
		</div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="container" id="container" style="margin-top: 200px;">
        <footer class="footer-global js-global-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <h6 style=" font-size: 28px;
                                    font-family: Helvetica;
                                    font-weight: 700;
                                    margin-bottom: 30px;
                                    " class="gamma footer__header text-weight--bold">Unsplash</h6>
                    </div>
                </div> <!-- close .row -->
                <div class="row" style="border-bottom: solid 1px #ADADAD; margin-bottom: 50px;">
                    <div class="col-sm-2">
                        <ul class="footer__nav list-unstyled menus">
                            <li class="footer__nav-item"><a class="link--no-underline" href="/about">About</a></li>
                            <li class="footer__nav-item"><a rel="nofollow" class="link--no-underline" href="https://medium.com/unsplash">Blog</a></li>
                            <li class="footer__nav-item"><a class="link--no-underline" href="/hiring">Hiring</a></li>
                        </ul>
                    </div> <!-- close .col -->
                    <div class="col-sm-2">
                        <ul class="footer__nav list-unstyled menus">
                            <li class="footer__nav-item"><a class="link--no-underline" href="/developers">Developers/API</a></li>
                            <li class="footer__nav-item"><a rel="nofollow" class="link--no-underline" href="https://www.dropbox.com/sh/winm0o3ruxyfgnk/AAAaks0btBiGIHYGv1d0zdwOa">Press</a></li>
                            <li class="footer__nav-item"><a rel="nofollow" class="link--no-underline" href="https://help.unsplash.com/">Help Center</a></li>
                        </ul>
                    </div> <!-- close .col -->
                    <div class="col-sm-4">
                        <ul class="footer__nav list-unstyled menus">
                            <li class="footer__nav-item"><a class="link--no-underline" href="/apps/ios">Unsplash for iOS</a></li>
                            <li class="footer__nav-item"><a class="link--no-underline" href="/wallpaper#mac-app">Unsplash for macOS</a></li>
                            <li class="footer__nav-item"><a class="link--no-underline" href="https://instant.unsplash.com/">Unsplash Instant for Chrome</a></li>
                        </ul>
                    </div> <!-- close .col -->
                    <div class="col-sm-4 footer-social-links" style="padding-left: 295px;">
                        <ul class="footer__nav list-inline" style="display: flex;">
                            <li class="list-inline-item-small" style="padding-right: 20px;">
                                <a style="width: 20px; height:20px; color: black; font-size: 20px;" class="footer-social-link" href="https://twitter.com/unsplash" title="Follow Unsplash on Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item-small" style="padding-right: 20px;">
                                <a style="color: black; font-size: 20px;" class="footer-social-link" href="https://facebook.com/unsplash" title="Like Unsplash on Facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item-small" style="padding-right: 20px;">
                                <a style="color:black; font-size: 20px;" class="footer-social-link" href="https://instagram.com/unsplash" title="Follow Unsplash on Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item-small" style="padding-right: 20px;">
                                <a style="color:black; font-size: 20px;" class="footer-social-link" href="https://medium.com/unsplash" title="Follow Unsplash on Medium">
                                    <i class="fab fa-medium"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- close .row -->

                <div class="footer-sub">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="footer-sub__container">
                                <div class="footer-sub__left hidden-xs" style="float: left;">
                                    <a href="/" title="Home &mdash; Unsplash"><img class="footer-sub__logo" src="<?php echo base_url(); ?>/assets/img/logo-black.svg" /></a>
                                    <span style="margin-left: 10px;
                                                 font-family: Helvetica;
                                                 color: #ADADAD;
                                                 font-size: 15px;">Make something awesome.
                                    </span>
                                </div>
                                <div class="footer-sub__right" style="float: right;">
                                    <ul class="footer__nav footer__nav--sub list-inline menuBawah">
                                        <li class="list-inline-item"><a rel="nofollow" class="link--no-underline" href="/privacy">Privacy Policy</a></li>
                                        <li class="list-inline-item"><a rel="nofollow" class="link--no-underline" href="/terms">Terms</a></li>
                                        <li class="list-inline-item"><a rel="nofollow" class="link--no-underline" href="/security">Security</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- close .footer-sub -->
            
        </footer> <!-- close .footer-global -->
    </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->













<!-- ------------------------------------------------------------------------------------------------------------------------------------------------- -->

</div>
</body>
</html>